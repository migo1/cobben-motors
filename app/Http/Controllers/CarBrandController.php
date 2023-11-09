<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarBrandResource;
use App\Models\CarBrand;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $search = $request->search;

        $carBrands = CarBrand::when($search, function ($query) use ($search) {
            return $query->where(function ($q) use ($search) {
                return $q->where('name', 'LIKE', '%' . $search . '%');
            });
        })
        ->orderBy('id', 'DESC')
        ->paginate(10)
        ->withQueryString();

        return Inertia::render('CarBrands/Index', [
            'car_brands' => CarBrandResource::collection($carBrands)->response()->getData(true),
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
                'name' => 'required',
            ]
        );

        $carBrand = new CarBrand();
        $carBrand->name = $request->input('name');
        $carBrand->save();

        return redirect()->back()->with('success', 'Car Brand created successfully');

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
        $carBrand = CarBrand::find($id);
        $carBrand->name = $request->input('name');
        $carBrand->update();

        return back()->with('success', 'CarBrand updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CarBrand::find($id)->delete();

        return back()->with('success', 'car brand deleted successfully');
    }
}
