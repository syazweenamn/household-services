<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'service_description',
        'price',
        'servicecategory_id',
    ];

    public function servicecategory()
    {
        return $this->belongsTo(Servicecategory::class, 'servicecategory_id', 'id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'service_id', 'id');
    }
}
