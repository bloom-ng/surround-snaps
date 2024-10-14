<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'contact_number',
        'email',
        'event_type',
        'event_date',
        'event_start_time',
        'venue_address',
        'venue_type',
        'contact_person',
        'contact_person_phone',
        'event_theme',
        'special_instructions',
        'package',
        'additional_hours',
        'total_cost',
        'status',
    ];

    protected $casts = [
        'event_date' => 'date',
        'event_start_time' => 'datetime',
    ];

    public static $costPerHour = 200;

    public const STATUS_PENDING = "pending";
    public const STATUS_BOOKED = "booked";
    public const STATUS_PAID = "paid";
    public const STATUS_CANCELLED = "cancelled";

    public const BOOKING_FEE_AMOUNT = 100; // $100
    public const BOOKING_FEE_AMOUNT_CENTS = 10000; // $100 in cents
    public const BOOKING_FEE_CURRENCY = 'USD';

    public function getDurationHours()
    {
        $packageHours = [
            'silver' => 3,
            'gold' => 4,
            'platinum' => 5,
        ];

        $baseHours = $packageHours[$this->package] ?? 3;
        return $baseHours + ($this->additional_hours ?? 0);
    }

    public function getAdditionalHoursCost()
    {
        return $this->additional_hours * static::$costPerHour;
    }

    public function getTotalCost()
    {
        $packageCost = static::getPackageCost()[$this->package];
        return $packageCost + $this->getAdditionalHoursCost();
    }

    public static function getPackageCost()
    {
        return [
            'silver' => 500,
            'gold' => 600,
            'platinum' => 700,
        ];
    }

    public static function getPackageName()
    {
        return [
            'silver' => "Silver Package",
            'gold' => "Gold Package",
            'platinum' => "Platinum Package",
        ];
    }

    public static function getCostPerHour()
    {
        return static::$costPerHour;
    }

    public static function getBookingPopupMessage()
    {
        $line_one = "<p>A non-refundable $100 deposit is required to confirm booking. Balance is due 5-days to the event.</p>";
        $line_two = "<p>An added cost of $200/hour will be charged for every hour past the stipulated event time agreed per your contract.</p>";
        return $line_one . "</br>" . $line_two;
    }

    public static function conflictingBookings($eventDate, $eventStartTime, $durationHours)
    {
        $eventStart = Carbon::parse($eventDate . ' ' . $eventStartTime);
        $eventEnd = $eventStart->copy()->addHours($durationHours);

        return self::where('event_date', $eventDate)
            ->where(function ($query) use ($eventStart, $eventEnd, $durationHours) {
                $query->whereBetween('event_start_time', [$eventStart, $eventEnd])
                    ->orWhere(function ($query) use ($eventStart, $eventEnd, $durationHours) {
                        $query->where('event_start_time', '<=', $eventStart)
                            ->whereRaw("ADDTIME(event_start_time, SEC_TO_TIME(? * 3600)) > ?", [$durationHours, $eventStart]);
                    });
            })
            ->count();
    }
}