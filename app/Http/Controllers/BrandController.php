<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index()
    {
        $brand = Brand::latest()->get();
        return view('brand.index', compact('brand'));
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'nama_brand' => 'required|unique:brands',
        ]);

        $brand = new Brand();
        $brand->nama_brand = $request->nama_brand;
        $brand->save();
        return redirect()->route('brand.index');
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brand.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_brand' => 'required',
        ]);

        $brand = Brand::findOrFail($id);
        $brand->nama_brand = $request->nama_brand;
        $brand->save();
        return redirect()->route('brand.index');
    }

    public function destroy(string $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect()->route('brand.index');

    }
}
