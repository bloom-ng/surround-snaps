<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Transaction;
use App\Services\SquarePaymentService;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function index()
    {
        return view('surround.booking', [
            'packageCost' => Booking::getPackageCost(),
        ]);
    }

    public function store(Request $request, SquarePaymentService $squarePaymentService)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'event_type' => 'required|string|max:255',
            'event_date' => [
                'required',
                'date',
                'after:' . now()->addWeek()->subDay()->toDateString(),
            ],
            'event_start_time' => 'required|date_format:H:i',
            'venue_address' => 'required|string',
            'venue_type' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'contact_person_phone' => 'required|string|max:20',
            'event_theme' => 'nullable|string',
            'special_instructions' => 'nullable|string',
            'package' => 'required|string|in:silver,gold,platinum',
            'additional_hours' => 'required|integer|in:0,1,2,3',
        ]);

        $booking = new Booking($validatedData);
        $durationHours = $booking->getDurationHours();

        $conflictingBookings = Booking::conflictingBookings(
            $validatedData['event_date'],
            $validatedData['event_start_time'],
            $durationHours
        );

        if ($conflictingBookings > 0) {
            return back()->withErrors(['event_date' => 'The selected date and time conflicts with an existing booking. Please choose a different time.'])->withInput();
        }

        $booking->total_cost = $booking->getTotalCost();
        $booking->status = Booking::STATUS_PENDING;

        $booking->save();

        try {
            // Search or create customer
            $customer = $squarePaymentService->searchCustomer($booking->email);

            if (empty($customer) || $customer == null) {
                $customer = $squarePaymentService->createCustomer(
                    $booking->email,
                    $booking->full_name,
                    // $booking->contact_number
                );
            }


            // Create checkout for booking fee
            $checkout = $squarePaymentService->createQuickPayCheckout(
                Booking::BOOKING_FEE_AMOUNT_CENTS,
                Booking::BOOKING_FEE_CURRENCY,
                route('payment.success', ['booking' => $booking->id])
                // "https://9b25-105-112-238-84.ngrok-free.app/payment/success/" . $booking->id
            );

            // Create transaction record
            Transaction::create([
                'booking_id' => $booking->id,
                'square_customer_id' => $customer->getId(),
                'square_payment_id' => $checkout->getOrderId(),
                'amount' => Booking::BOOKING_FEE_AMOUNT,
                'status' => Transaction::STATUS_PENDING,
                'type' => Transaction::TYPE_BOOKING_FEE,
            ]);


            return redirect($checkout->getUrl());
        } catch (\Exception $e) {
            dd($e);
            // Log the error
            \Log::error('Payment initiation failed: ' . $e->getMessage());

            // Delete the booking if payment initiation fails
            $booking->delete();

            // Redirect back to the booking page with an error message
            return redirect()->route('booking.index')
                ->with('error', 'There was an error initiating the payment. Please try again or contact support.');
        }
    }

    public function checkAvailability(Request $request)
    {
        $request->validate([
            'event_date' => [
                'required',
                'date',
                'after:today',
            ],
            'event_start_time' => 'required|date_format:H:i',
        ]);

        $booking = new Booking([
            'package' => 'platinum',
            'additional_hours' => 3,
        ]);
        $durationHours = $booking->getDurationHours();

        $conflictingBookings = Booking::conflictingBookings(
            $request->event_date,
            $request->event_start_time,
            $durationHours
        );

        return response()->json(['available' => $conflictingBookings === 0]);
    }
}