<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SquarePaymentService;
use App\Models\Booking;
use App\Models\Transaction;

class PaymentController extends Controller
{
    public function handlePaymentSuccess(Request $request, SquarePaymentService $squarePaymentService, Booking $booking)
    {
        try {
            // Retrieve the booking fee transaction
            $bookingFeeTransaction = Transaction::where('booking_id', $booking->id)
                ->where('type', Transaction::TYPE_BOOKING_FEE)
                ->first();

            if (!$bookingFeeTransaction) {
                \Log::error('Booking fee transaction not found for booking:', ['id' => $booking->id]);
                return redirect()->route('booking.index')->with('error', 'Unable to process payment. Please contact support.');
            }

            \Log::info('Transaction details:', [
                'booking_id' => $booking->id, 
                'square_customer_id' => $bookingFeeTransaction->square_customer_id
            ]);

            // Update booking status
            $booking->update(['status' => Booking::STATUS_BOOKED]);

            // Update transaction status
            $bookingFeeTransaction->update(['status' => Transaction::STATUS_COMPLETED]);

            // Calculate remaining amount
            $remainingAmount = $booking->total_cost - Booking::BOOKING_FEE_AMOUNT;

            // Create invoice for remaining amount
            $invoiceId = $squarePaymentService->createInvoice(
                $bookingFeeTransaction->square_customer_id,
                [
                    'description' => 'Remaining balance for ' . Booking::getPackageName()[$booking->package],
                    'amount' => $remainingAmount,
                    'currency' => Booking::BOOKING_FEE_CURRENCY,
                    'dueDate' => $booking->event_date->subDays(5)->format('Y-m-d')
                ]
            );

            // Create transaction record for the remaining amount
            Transaction::create([
                'booking_id' => $booking->id,
                'square_customer_id' => $bookingFeeTransaction->square_customer_id,
                'square_payment_id' => $invoiceId,
                'amount' => $remainingAmount,
                'status' => Transaction::STATUS_PENDING,
                'type' => Transaction::TYPE_FULL_PAYMENT,
            ]);

            // Redirect to thank you page with success message
            return redirect()->route('payment.thank-you')->with([
                'success' => 'Payment successful! An invoice for the remaining balance has been sent.'
            ]);
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Payment success handling failed: ' . $e->getMessage());
            
            // Redirect back with an error message
            return redirect('/booking')
                ->with('error', 'There was an error processing your payment. Please contact support.');
        }
    }

    public function handlePaymentFailure(Request $request)
    {
        // Retrieve the transaction ID from the request
        $transactionId = $request->input('transactionId');

        // Find the corresponding transaction
        $transaction = Transaction::where('square_payment_id', $transactionId)->first();

        if ($transaction) {
            // Update transaction status to failed
            $transaction->update([
                'status' => Transaction::STATUS_FAILED
            ]);

            // Find the associated booking
            $booking = Booking::find($transaction->booking_id);

            if ($booking) {
                // Update booking status if necessary
                $booking->update([
                    'status' => Booking::STATUS_PENDING
                ]);
            }
        }

        // Redirect to /booking with an error message
        return redirect('/booking')
            ->with('error', 'Payment failed. Please try again or contact support.');
    }

    public function thankYou()
    {
        return view('surround.thank-you');
    }

    public function handleWebhook(Request $request, SquarePaymentService $squarePaymentService)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('X-Square-Signature');

        try {
            $event = $squarePaymentService->verifyWebhookSignature($payload, $sigHeader);

            switch ($event['type']) {
                case 'invoice.payment_made':
                    $this->handleInvoicePaymentMade($event['data']['object']['invoice']);
                    break;
                case 'invoice.canceled':
                    $this->handleInvoiceCanceled($event['data']['object']['invoice']);
                    break;
                default:
                    \Log::info('Unhandled webhook event: ' . $event['type']);
            }

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            \Log::error('Webhook error: ' . $e->getMessage());
            return response()->json(['success' => false], 400);
        }
    }

    private function handleInvoicePaymentMade($invoice)
    {
        $transaction = Transaction::where('square_payment_id', $invoice['id'])
            ->where('type', Transaction::TYPE_FULL_PAYMENT)
            ->first();

        if ($transaction) {
            $transaction->update([
                'status' => Transaction::STATUS_COMPLETED,
                'amount' => $invoice['payment_requests'][0]['computed_amount_money']['amount'] / 100
            ]);

            $booking = Booking::find($transaction->booking_id);
            if ($booking) {
                $booking->update(['status' => Booking::STATUS_PAID]);
            }
        }
    }

    private function handleInvoiceCanceled($invoice)
    {
        $transaction = Transaction::where('square_payment_id', $invoice['id'])
            ->where('type', Transaction::TYPE_FULL_PAYMENT)
            ->first();

        if ($transaction) {
            $transaction->update(['status' => Transaction::STATUS_FAILED]);

            $booking = Booking::find($transaction->booking_id);
            if ($booking) {
                $booking->update(['status' => Booking::STATUS_PENDING]);
            }
        }
    }
}
