<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Car extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    
    protected $fillable = [
        'car_brand_id',
        'car_model_id',
        'color',
        'year',
    ];

    public function carBrand()
    {
        return $this->belongsTo(CarBrand::class);
    }

    public function carModel()
    {
        return $this->belongsTo(CarModel::class);
    }
    
}
