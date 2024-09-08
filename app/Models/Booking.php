<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public const STATUS_PAID = "paid";
    public const STATUS_CANCELLED = "cancelled";

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


}