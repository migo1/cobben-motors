<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarModel;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
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


        return Inertia::render('Cars/Index', [
            'cars' => CarResource::collection($data)->response()->getData(true),
            'car_brands' => $carBrands,
            'car_models' => $carModels,
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
    public function store(Request $request) {

        $this->validate(
            $request,
            [
                'car_brand_id' => 'required',
                'car_model_id' => 'required',
                'color' => 'required',
                'year' => 'required',
            ]
        );

        $car = new Car();
        $car->car_brand_id = $request->input('car_brand_id');
        $car->car_model_id = $request->input('car_model_id');
        $car->color = $request->input('color');
        $car->year = $request->input('year');
        $car->save();

        if ($request->has('thumbnail')) {
            $car->addMedia(storage_path('app/public/'.$request->thumbnail))->toMediaCollection('thumbnails');
        }

        

        return redirect()->back()->with('success', 'Car created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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
            $path = $request->file('thumbnail')->store('uploads/thumbnails', 'public');
            return $path;
        };
        return '';
    }
}
