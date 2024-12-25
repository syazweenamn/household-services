<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'worker_id',
        'date',
        'price',
        'payment_method',
        'booking_status',
        'service_status',
        'booking_rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    public function worker()
    {
        return $this->belongsTo(Worker::class, 'worker_id', 'id');
    }
}
