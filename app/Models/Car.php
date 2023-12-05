<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Car extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasSlug;

    protected $fillable = [
        'car_brand_id',
        'car_model_id',
        'fuel_id',
        'condition_id',
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

    public function generateName()
    {
        $name = $this->name = $this->carBrand->name . ' ' . $this->carModel->name . ' ' . $this->color;
        
        return $name;
    }


    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
