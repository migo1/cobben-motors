<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarModel;
use App\Models\Condition;
use App\Models\Fuel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $carBrands = CarBrand::all();

        $carModels = CarModel::all();

        $conditions = Condition::all();

        $fuels = Fuel::all();

        $search = $request->search;

        $brand = $request->car_brand_id;

        $data = Car::with(['carBrand', 'carModel', 'features'])->when($search, function ($query) use ($search) {
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


        return Inertia::render('Cars/Index', [
            'cars' => CarResource::collection($data)->response()->getData(true),
            'car_brands' => $carBrands,
            'car_models' => $carModels,
            'conditions' => $conditions,
            'fuels' => $fuels,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate(
            $request,
            [
                'car_brand_id' => 'required',
                'car_model_id' => 'required',
                'color' => 'required',
                'year' => 'required',
                'fuel_id' => 'required',
                'condition_id' => 'required',
                'price' => 'required',
                'mileage' => 'required',
            ]
        );


        $brand = CarBrand::find($request->input('car_brand_id'));
        $model = CarModel::find($request->input('car_model_id'));


        $car = new Car();
        $car->car_brand_id = $request->input('car_brand_id');
        $car->car_model_id = $request->input('car_model_id');
        $car->fuel_id = $request->input('fuel_id');
        $car->condition_id = $request->input('condition_id');
        $car->color = $request->input('color');
        $car->year = $request->input('year');
        $car->price = $request->input('price');
        $car->mileage = $request->input('mileage');

        $car->name = $brand->name . ' ' . $model->name . ' ' . $request->input('color');

        $car->save();



        if ($request->has('thumbnail')) {
            Log::info($request->thumbnail);
            $car->addMedia(storage_path('app/public/' . $request->thumbnail))->toMediaCollection('thumbnails');
            Storage::disk('local')->delete('uploads/thumbnails' . $request->thumbnail);
        }

        if ($request->has('cars_display')) {

            $images =  $request->get('cars_display') ? explode('|', $request->get('cars_display')) : [];
            Log::info($images);
            foreach ($images as $image) {
                $car->addMedia(storage_path('app/public/' . $image))->toMediaCollection('cars_display');
                Storage::disk('local')->delete('uploads/temp_cars' . $image);
            }

            // $car->addMedia(storage_path('app/public/' . $request->cars_display))->toMediaCollection('cars_display');
            // Storage::disk('local')->delete('uploads/temp_cars' . $request->cars_display);
        }

        return redirect()->back()->with('success', 'Car created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {

        return Inertia::render('Cars/Show', [
            'car' => $car,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {

        $this->validate(
            $request,
            [
                'car_brand_id' => 'required',
                'car_model_id' => 'required',
                'color' => 'required',
                'year' => 'required',
            ]
        );

        $brand = CarBrand::find($request->input('car_brand_id'));
        $model = CarModel::find($request->input('car_model_id'));
        $car->car_brand_id = $request->input('car_brand_id');
        $car->car_model_id = $request->input('car_model_id');
        $car->fuel_id = $request->input('fuel_id');
        $car->condition_id = $request->input('condition_id');
        $car->color = $request->input('color');
        $car->year = $request->input('year');
        $car->price = $request->input('price');
        $car->mileage = $request->input('mileage');
        $car->name = $brand->name . ' ' . $model->name . ' ' . $request->input('color');
        $car->update();

        if ($request->has('deleted_from_collection')) {
            Media::whereIn('id', $request->deleted_from_collection)->delete();
        }

        $get_media = $car->getFirstMedia("thumbnails");
        if ($request->has('thumbnail') && $request->thumbnail != $get_media->getUrl()) {
            $car->clearMediaCollection('thumbnails');
            $car->addMedia(storage_path('app/public/' . $request->thumbnail))->toMediaCollection('thumbnails');
            Storage::disk('local')->delete('uploads/thumbnails' . $request->thumbnail);
        }

        return redirect()->back()->with('success', 'Car updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->clearMediaCollection('thumbnails');
        $car->clearMediaCollection('cars_display');
        $car->delete();

        return redirect()->back()->with('success', 'Car deleted successfully.');
    }

    public function getBrandModels(Request $request)
    {

        $carBrandId = $request->input('car_brand_id');

        $carModels = CarModel::where('car_brand_id', $carBrandId)->get();

        return response()->json($carModels);
    }

    public function uploadThumbnail(Request $request)
    {

        if ($request->hasFile('thumbnail')) {
            Log::info($request->thumbnail);
            $path = $request->file('thumbnail')->store('uploads/thumbnails', 'public');
            return $path;
        };
        return '';
    }

    public function uploadTempCars(Request $request)
    {

        // dd($request->all());
        if ($request->hasFile('cars_display')) {
            Log::info($request->cars_display);
            $path = $request->file('cars_display')->store('uploads/temp_cars', 'public');
            return $path;
        };
        return '';
    }

    public function revertImage(Request $request)
    {
        if ($cars_display = $request->get('cars_display')) {
            $carImages = $request->get('cars_display') ? explode('|', $request->get('cars_display')) : [];

            foreach ($carImages as $carImage) {
                $path = storage_path('app/public/' . $carImage);
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            // $path = storage_path('app/public/' .$cars_display);
            // if (file_exists($path)) {
            //     unlink($path);
            // }

        };
    }
}
