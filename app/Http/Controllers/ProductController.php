<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
  
    
 public function index(Request $request)
{
    $query = DB::table('products')->where('status', 1);

    // Jika ada search keyword
    if ($request->has('search') && $request->search != '') {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    $products = $query->get();

    return view('Products.index_product', compact('products'));
}
    

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:150',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/products'), $imageName);
        }

        DB::table('products')->insert([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imageName,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->back()->with('success','Product Created');
    }

    public function update(Request $request, $id)
    {
        $product = DB::table('products')->where('id',$id)->first();

        $imageName = $product->image;

        if ($request->hasFile('image')) {

            if ($product->image && File::exists(public_path('uploads/products/'.$product->image))) {
                File::delete(public_path('uploads/products/'.$product->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/products'), $imageName);
        }

        DB::table('products')->where('id',$id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imageName,
            'updated_at' => now()
        ]);

        return redirect()->back()->with('success','Product Updated');
    }

    public function destroy($id)
    {
        $product = DB::table('products')->where('id',$id)->first();

        if ($product->image && File::exists(public_path('uploads/products/'.$product->image))) {
            File::delete(public_path('uploads/products/'.$product->image));
        }

        DB::table('products')->where('id',$id)->delete();

        return redirect()->back()->with('success','Product Deleted');
    }
}