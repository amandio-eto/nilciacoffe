<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = DB::table('suppliers')->orderBy('id','desc')->get();
        return view('Supplier.index', compact('suppliers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:150',
            'phone' => 'nullable|max:20',
            'address' => 'nullable'
        ]);

        DB::table('suppliers')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'created_at' => now()
        ]);

        return redirect()->back()->with('success','Supplier berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:150',
            'phone' => 'nullable|max:20',
            'address' => 'nullable'
        ]);

        DB::table('suppliers')->where('id',$id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('success','Supplier berhasil diupdate');
    }

    public function destroy($id)
    {
        DB::table('suppliers')->where('id',$id)->delete();
        return redirect()->back()->with('success','Supplier berhasil dihapus');
    }
}