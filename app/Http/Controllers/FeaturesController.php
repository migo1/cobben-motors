<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Feature;

class FeaturesController extends Controller
{
    public function addFeatures(Request $request)
    {
        $car = Car::find($request->car_id);
        if($car->features->isEmpty()) {
            foreach ($request->input('features') as $featureData) {
                $feature = new Feature([
                    'car_id' => $car->id,
                    'feature' => $featureData['value'],
                ]);
                $feature->save();
            }
        } else {
            foreach($car->features as $feature) {
                $feature->delete();
            }
            foreach ($request->input('features') as $featureData) {
                $feature = new Feature([
                    'car_id' => $car->id,
                    'feature' => $featureData['value'],
                ]);
                $feature->save();
            }
        }

        return redirect()->back()->with('success', 'Car Feature created successfully');

    }
}
