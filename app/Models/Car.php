<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // Define the relationship with CarImage
    public function images()
    {
        return $this->hasMany(CarImage::class);
    }

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'make',
        'model',
        'year',
        'vin',
        'shipping_status',
        'image',
        'fuel_type',
        'engine',
        'location',
        'mileage',
        'price',
        'stock',
        'used',
    ];
}
