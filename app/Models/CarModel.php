<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_brand_id',
        'name',
    ];

    public function carBrand()
    {
        return $this->belongsTo(CarBrand::class, 'car_brand_id');
    }
}
