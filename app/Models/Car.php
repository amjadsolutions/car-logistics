<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany(CarImage::class);
    }



    protected $fillable = [
        'make',
        'model',
        'year',
        'vin',
        'shipping_status',
        'image',
    ];
}
