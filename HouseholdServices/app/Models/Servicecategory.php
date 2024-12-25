<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicecategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'servicecategory_name',
    ];

    public function services()
    {
        return $this->hasMany(Service::class, 'servicecategory_id', 'id');
    }
}
