<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::orderBy('name', 'asc')->get();
        $transformedBrands = $brands->map(function($row) {
            return [
                'id' => $row->id,
                'name' => $row->name,
                'image_path' => $row->image_path,
            ];  
        });
        return response()->json(['data' => $transformedBrands], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
