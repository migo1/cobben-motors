<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarModelResource;
use Illuminate\Http\Request;
use App\Models\CarModel;
use Inertia\Inertia;
use App\Models\CarBrand;
use Illuminate\Support\Facades\Log;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $carBrands = CarBrand::all();

        $search = $request->search;

        $brand = $request->car_brand_id;   

        $data = CarModel::with('carBrand')->when($search, function ($query) use ($search) {
            return $query->where(function ($q) use ($search) {
                return $q->where('name', 'LIKE', '%' . $search . '%');
            });
        })->when($brand, function ($query) use ($brand) {
                return $query->where('car_brand_id',  $brand);
            })
        ->orderBy('id', 'DESC')
        ->paginate(10)
        ->withQueryString();


        return Inertia::render('CarModels/Index', [
            'car_models' => CarModelResource::collection($data)->response()->getData(true),
            'car_brands' => $carBrands,
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
        $this->validate($request,
            [
                'name' => 'required',
                'car_brand_id' => 'required',
            ]
        );

        $carModel = new CarModel();
        $carModel->name = $request->input('name');
        $carModel->car_brand_id = $request->input('car_brand_id');
        $carModel->save();

        return redirect()->back()->with('success', 'Car Model created successfully');
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
        
        $carModel = CarModel::find($id);
        $carModel->name = $request->input('name');
        $carModel->car_brand_id = $request->input('car_brand_id');

        foreach ($carModel->cars as $car) {
            $car->name = $carModel->carBrand->name . ' ' . $carModel->name . ' ' . $car->color;
            $car->update();
        }

        $carModel->update();

        return redirect()->back()->with('success', 'Car Model updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $carModel = CarModel::find($id);
        if ($carModel->cars->count() > 0) {
            return redirect()->back()->with('success', 'Car Model has cars, cannot delete');
        }

        $carModel->delete();

        return redirect()->back()->with('success', 'Car Model deleted successfully');
    }
}
