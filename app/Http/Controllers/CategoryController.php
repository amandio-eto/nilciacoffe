<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->orderBy('id','desc')->get();
        return view('Categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100'
        ]);

        DB::table('categories')->insert([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->back()->with('success','Category berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100'
        ]);

        DB::table('categories')->where('id',$id)->update([
            'name' => $request->name,
            'updated_at' => now()
        ]);

        return redirect()->back()->with('success','Category berhasil diupdate');
    }

    public function destroy($id)
    {
        DB::table('categories')->where('id',$id)->delete();
        return redirect()->back()->with('success','Category berhasil dihapus');
    }
}