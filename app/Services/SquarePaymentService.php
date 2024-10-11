<?php

namespace App\Services;

use Square\SquareClient;
use Square\Environment;
use Square\Exceptions\ApiException;

class SquarePaymentService
{
    private $client;
    private $location;

    public function __construct()
    {
        $environment = env('SQUARE_ENVIRONMENT', 'sandbox');
        $squareEnvironment = $environment === 'production' ? Environment::PRODUCTION : Environment::SANDBOX;

        $this->client = new SquareClient([
            'accessToken' => env('SQUARE_ACCESS_TOKEN'),
            'environment' => $squareEnvironment,
        ]);
        $this->location = env('SQUARE_LOCATION_ID');
    }

    public function createQuickPayCheckout($amount, $currency, $successUrl)
    {
        try {
            $checkout_api = $this->client->getCheckoutApi();
            $location_id = $this->location;

            $price_money = new \Square\Models\Money();
            $price_money->setAmount($amount);
            $price_money->setCurrency($currency);

            $quick_pay = new \Square\Models\QuickPay(
                'Booking Fee',
                $price_money,
                $location_id
            );
            $quick_pay->setLocationId($location_id);

            $accepted_payment_methods = new \Square\Models\AcceptedPaymentMethods();

            $checkout_options = new \Square\Models\CheckoutOptions();
            $checkout_options->setRedirectUrl($successUrl);
            $checkout_options->setAcceptedPaymentMethods($accepted_payment_methods);
            $checkout_options->setEnableCoupon(true);

            $body = new \Square\Models\CreatePaymentLinkRequest();
            $body->setIdempotencyKey(uniqid());
            $body->setQuickPay($quick_pay);
            $body->setCheckoutOptions($checkout_options);

            $api_response = $checkout_api->createPaymentLink($body);

            if ($api_response->isSuccess()) {
                $result = $api_response->getResult();
                return $result->getPaymentLink();
            } else {
                $errors = $api_response->getErrors();
                throw new \Exception('Failed to create checkout: ' . json_encode($errors));
            }
        } catch (ApiException $e) {
            return $this->handleApiException($e);
        }
    }

    public function getPayment($id)
    {
        $api_response = $this->client->getPaymentsApi()->getPayment($id);

        if ($api_response->isSuccess()) {
            $result = $api_response->getResult();
            return $result->getPayment();
        } else {
            $errors = $api_response->getErrors();
            return null;
            
        }
    }

    public function getOrder($id)
    {
        $api_response = $this->client->getOrdersApi()->retrieveOrder($id);

        if ($api_response->isSuccess()) {
            $result = $api_response->getOrder()->getStatus();
            return $result;
        } else {
            $errors = $api_response->getErrors();
            return null;
        }
    }

    public function createInvoice($customerId, $orderDetails)
    {
        try {
            $order_amount = $orderDetails['amount'] * 100; // Order details converted to cents
            $orderId = $this->createOrder($customerId, $order_amount, $orderDetails['currency']);
            
            $primary_recipient = new \Square\Models\InvoiceRecipient();
            $primary_recipient->setCustomerId($customerId);

            $invoice_payment_request = new \Square\Models\InvoicePaymentRequest();
            $invoice_payment_request->setRequestType('BALANCE');
            $invoice_payment_request->setDueDate($orderDetails['dueDate']);
            $invoice_payment_request->setAutomaticPaymentSource('NONE');

            $payment_requests = [$invoice_payment_request];
            $accepted_payment_methods = new \Square\Models\InvoiceAcceptedPaymentMethods();
            $accepted_payment_methods->setCard(true);
            $accepted_payment_methods->setBankAccount(true);
            $accepted_payment_methods->setCashAppPay(true);

            $invoice = new \Square\Models\Invoice();
            $invoice->setLocationId($this->location);
            $invoice->setOrderId($orderId);
            $invoice->setPrimaryRecipient($primary_recipient);
            $invoice->setPaymentRequests($payment_requests);
            $invoice->setDeliveryMethod('EMAIL');
            
            // Schedule the invoice for one hour from now
            $oneHourFromNow = new \DateTime('+1 hour');
            $invoice->setScheduledAt($oneHourFromNow->format('Y-m-d\TH:i:s.v\Z'));
            
            $invoice->setAcceptedPaymentMethods($accepted_payment_methods);

            $body = new \Square\Models\CreateInvoiceRequest($invoice);
            $body->setIdempotencyKey(uniqid());

            $api_response = $this->client->getInvoicesApi()->createInvoice($body);

            if ($api_response->isSuccess()) {
                $result = $api_response->getResult();
                $invoiceId = $result->getInvoice()->getId();
                $invoiceVersion = $result->getInvoice()->getVersion();
                
                // Publish the invoice
                $publishResponse = $this->publishInvoice($invoiceId, $invoiceVersion);
                
                if ($publishResponse->isSuccess()) {
                    return $invoiceId;
                } else {
                    $errors = $publishResponse->getErrors();
                    throw new \Exception('Failed to publish invoice: ' . json_encode($errors));
                }
            } else {
                $errors = $api_response->getErrors();
                throw new \Exception('Failed to create invoice: ' . json_encode($errors));
            }
        } catch (ApiException $e) {
            return $this->handleApiException($e);
        }
    }

    public function createOrder($customerId, $amount, $currency)
    {
        $base_price_money = new \Square\Models\Money();
        $base_price_money->setAmount($amount);
        $base_price_money->setCurrency($currency);

        $order_line_item = new \Square\Models\OrderLineItem('1');
        $order_line_item->setItemType('CUSTOM_AMOUNT');
        $order_line_item->setBasePriceMoney($base_price_money);

        $line_items = [$order_line_item];
        $order = new \Square\Models\Order($this->location);
        $order->setCustomerId($customerId);
        $order->setLineItems($line_items);
        $order->setState('OPEN');

        $body = new \Square\Models\CreateOrderRequest();
        $body->setOrder($order);
        try {

            $api_response = $this->client->getOrdersApi()->createOrder($body);

            if ($api_response->isSuccess()) {
                $result = $api_response->getResult();
                return $result->getOrder()->getId();
            } else {
                $errors = $api_response->getErrors();
                return null;
            }
        } catch (ApiException $e) {
            return $this->handleApiException($e);
        }
    }

    public function searchCustomer($email)
    {
        try {
            $email_address = new \Square\Models\CustomerTextFilter();
            $email_address->setExact($email);

            $filter = new \Square\Models\CustomerFilter();
            $filter->setEmailAddress($email_address);

            $query = new \Square\Models\CustomerQuery();
            $query->setFilter($filter);

            $body = new \Square\Models\SearchCustomersRequest();
            $body->setQuery($query);
            $body->setCount(true);

            $api_response = $this->client->getCustomersApi()->searchCustomers($body);

            if ($api_response->isSuccess()) {
                $result = $api_response->getResult();
                return empty($result->customers) ? null : $result->customers[0];
            } else {
                $errors = $api_response->getErrors();
            }
        } catch (ApiException $e) {
            return $this->handleApiException($e);
        }
    }

    public function createCustomer($email, $name)
    {
        try {
            $customers_api = $this->client->getCustomersApi();

            $body = new \Square\Models\CreateCustomerRequest();
            $body->setGivenName($name);
            $body->setEmailAddress($email);
            // $body->setPhoneNumber($phone);

            $api_response = $customers_api->createCustomer($body);

            if ($api_response->isSuccess()) {
                $result = $api_response->getResult();
                return $result->getCustomer();
            } else {
                $errors = $api_response->getErrors();
                // Handle errors
            }
        } catch (ApiException $e) {
            return $this->handleApiException($e);
        }
    }

    // Helper method to handle API exceptions
    private function handleApiException(ApiException $e)
    {
        // Log the error
        \Log::error('Square API Error: ' . $e->getMessage());
        
        // You can customize this response based on your needs
        return [
            'error' => true,
            'message' => 'An error occurred while processing your request.',
            'msg' => $e->getMessage()
        ];
    }

    public function verifyWebhookSignature($payload, $sigHeader)
    {
        $webhookSignatureKey = env('SQUARE_WEBHOOK_SIGNATURE_KEY');

        $generatedSignature = hash_hmac('sha256', $payload, $webhookSignatureKey);

        if ($generatedSignature !== $sigHeader) {
            throw new \Exception('Invalid webhook signature');
        }

        return json_decode($payload, true);
    }

    // Add this new method to publish the invoice
    private function publishInvoice($invoiceId, $version = 0)
    {
        $body = new \Square\Models\PublishInvoiceRequest($version);
        $body->setIdempotencyKey(uniqid());

        return $this->client->getInvoicesApi()->publishInvoice($invoiceId, $body);
    }
}
