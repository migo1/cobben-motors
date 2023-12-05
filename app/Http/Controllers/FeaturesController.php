<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class FeaturesController extends Controller
{
    public function addFeatures(Request $request)
    {

        dd($request->all());
        // i want to add or update the features based on the car_id
        // if the car_id exists, then update the features
        // if the car_id does not exist, then create the features

        $car = Car::find($request->car_id);  
        $car->features()->sync($request->features);

        $car = Car::find($request->car_id);
        $car->features()->syncWithoutDetaching($request->features);

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
