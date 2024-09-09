<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'square_customer_id',
        'square_payment_id',
        'amount',
        'status',
        'type',
    ];

    public const STATUS_PENDING = 'pending';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_FAILED = 'failed';

    public const TYPE_BOOKING_FEE = 'booking_fee';
    public const TYPE_FULL_PAYMENT = 'full_payment';
}
