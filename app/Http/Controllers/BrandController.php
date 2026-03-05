<?php


namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('Brand.index', compact('brands'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $request->validate([
            'brand_name' => 'required',
            'images' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('images')) {

            if ($brand->images && file_exists(public_path('brand/'.$brand->images))) {
                unlink(public_path('brand/'.$brand->images));
            }

            $imageName = time().'.'.$request->images->extension();
            $request->images->move(public_path('brand'), $imageName);

            $brand->images = $imageName;
        }

        $brand->brand_name = $request->brand_name;
        $brand->save();

        return redirect()->back()->with('success', 'Brand updated successfully');
    }
}