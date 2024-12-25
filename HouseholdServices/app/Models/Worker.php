<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'worker_name',
        'worker_rating',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'worker_id', 'id');
    }
}
