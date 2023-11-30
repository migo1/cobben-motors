<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarModel;
use Inertia\Inertia;
use App\Http\Resources\CarResource;
use Psy\Readline\Hoa\Console;

class LandingPageController extends Controller
{
    public function home(Request $request)
    {
        // dd($request->all());

        $carBrands = CarBrand::all();

        $carModels = CarModel::all();

        $search = $request->search;

        $car_brand = $request->car_brand_id;

        if($request->brand && !is_null($request->brand)) {
            $data = Car::with(['carBrand', 'carModel'])->where('car_brand_id', $request->brand)->orderBy('id', 'DESC')->take(6)->get();
        } else {

            $data = Car::with(['carBrand', 'carModel'])
            // ->when($search, function ($query) use ($search) {
            //     return $query->where(function ($q) use ($search) {
            //         return $q->where('year', 'LIKE', '%' . $search . '%')
            //         ->orwhere('color', 'LIKE', '%' . $search . '%');
            //     });

            // })->when($car_brand, function ($query) use ($car_brand) {
            //     return $query->where('car_brand_id', $car_brand);
            // })
                 ->orderBy('id', 'DESC')
                 ->take(6)
                 ->get();

        }





        // dd($data);

        if($request->ajax()) {
            return response()->json([
                'cars' => CarResource::collection($data)->response()->getData(true),
            ]);
        }

        return Inertia::render('LandingPage/Index', [
            'cars' => CarResource::collection($data)->response()->getData(true),
            'car_brands' => $carBrands,
            'car_models' => $carModels,
        ]);

    }

    public function our_cars(Request $request)
    {

        $carBrands = CarBrand::all();

        $carModels = CarModel::all();

        $search = $request->search;

        $brand = $request->car_brand_id;

        $data = Car::with(['carBrand', 'carModel'])->when($search, function ($query) use ($search) {
            return $query->where(function ($q) use ($search) {
                return $q->where('year', 'LIKE', '%' . $search . '%')
                ->orwhere('color', 'LIKE', '%' . $search . '%');
            });
        })->when($brand, function ($query) use ($brand) {
            return $query->where('car_brand_id', $brand);
        })
        ->orderBy('id', 'DESC')
        ->paginate(10)
        ->withQueryString();


        return Inertia::render('LandingPage/OurCars', [
            'cars' => CarResource::collection($data)->response()->getData(true),
            'car_brands' => $carBrands,
            'car_models' => $carModels,
        ]);

    }

    public function car(Car $car)
    {

        $images = [];

        foreach ($car->getMedia('cars_display') as $key => $value) {
            array_push($images, $value->getUrl());
        }
        // dd($images);

        return Inertia::render('LandingPage/CarDetail', [
                  'car' => $car,
                  'images' => $images,
              ]);

    }
}
