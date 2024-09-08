<?php

namespace App\Http\Controllers;

use App\Models\Booking;
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

    public function store(Request $request)
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
            'additional_hours' => 'nullable|integer|in:0,1,2,3',
            // 'total_cost' => 'required|numeric',
        ]);

        $booking = new Booking($validatedData);
        $durationHours = $booking->getDurationHours();

        // Check for conflicting events
        $eventStart = Carbon::parse($validatedData['event_date'] . ' ' . $validatedData['event_start_time']);
        $eventEnd = $eventStart->copy()->addHours($durationHours);

        $conflictingBookings = Booking::where('event_date', $validatedData['event_date'])
            ->where(function ($query) use ($eventStart, $eventEnd, $durationHours) {
                $query->whereBetween('event_start_time', [$eventStart, $eventEnd])
                    ->orWhere(function ($query) use ($eventStart, $eventEnd, $durationHours) {
                        $query->where('event_start_time', '<=', $eventStart)
                            ->whereRaw("ADDTIME(event_start_time, SEC_TO_TIME($durationHours * 3600)) > ?", [$eventStart]);
                    });
            })
            ->count();

        if ($conflictingBookings > 0) {
            return back()->withErrors(['event_date' => 'The selected date and time conflicts with an existing booking. Please choose a different time.'])->withInput();
        }

        $booking->total_cost = $booking->getTotalCost();
        $booking->status = Booking::STATUS_PENDING;

        $booking->save();

        // For now, we'll redirect to the payment page
        return redirect()->route('payment')->with('booking_id', $booking->id);
    }

    public function checkAvailability(Request $request)
    {
        $request->validate([
            'event_date' => [
                'required',
                'date',
                'after:today',
                'before:' . now()->addWeek()->toDateString(),
            ],
            'event_start_time' => 'required|date_format:H:i',
            'package' => 'required|string|in:silver,gold,platinum',
            'additional_hours' => 'nullable|integer|in:0,1,2,3',
        ]);

        $booking = new Booking([
            'package' => $request->package,
            'additional_hours' => $request->additional_hours ?? 0,
        ]);
        $durationHours = $booking->getDurationHours();

        $eventStart = Carbon::parse($request->event_date . ' ' . $request->event_start_time);
        $eventEnd = $eventStart->copy()->addHours($durationHours);

        $conflictingBookings = Booking::where('event_date', $request->event_date)
            ->where(function ($query) use ($eventStart, $eventEnd, $durationHours) {
                $query->whereBetween('event_start_time', [$eventStart, $eventEnd])
                    ->orWhere(function ($query) use ($eventStart, $eventEnd, $durationHours) {
                        $query->where('event_start_time', '<=', $eventStart)
                            ->whereRaw("ADDTIME(event_start_time, SEC_TO_TIME($durationHours * 3600)) > ?", [$eventStart]);
                    });
            })
            ->count();

        return response()->json(['available' => $conflictingBookings === 0]);
    }
}