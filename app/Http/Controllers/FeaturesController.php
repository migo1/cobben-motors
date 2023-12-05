<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class FeaturesController extends Controller
{
    public function addFeatures(Request $request)
    {

        // dd($request->all());


        $car = Car::find($request->car_id);

        $features = $request->features;

        $features->each(function($feature) use ($car) {
            dd($feature);
            // $car->features()->create([
            //     'name' => $feature['name'],
            //     'value' => $feature['value'],
            // ]);
        });

            if($car->features) {
                foreach($car->features as $feature) {
                    dd($feature);
                }
            }
        
        // $car->features()->sync($request->features);

        // $car = Car::find($request->car_id);
        // $car->features()->syncWithoutDetaching($request->features);

        // $car = Car::find($request->car_id);
        // $car->features()->syncWithoutDetaching($request->features);

        // $car = Car::find($request->car_id);
        // $car->features()->syncWithoutDetaching($request->features);

        
$car = Car::find($request->car_id);

$car->features()->createMany($request->features);

return response()->json([
    'message' => 'Features added successfully',
], 200);



  
    }
}
