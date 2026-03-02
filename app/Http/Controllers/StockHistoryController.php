<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockHistoryController extends Controller
{
    public function index()
    {
        $history = DB::table('stock_history as sh')
            ->join('products as p','p.id','=','sh.product_id')
            ->select('sh.*','p.name')
            ->orderBy('sh.id','desc')
            ->get();

        $products = DB::table('products')->get();
        return view('Stocks.index_stock', compact('products','history'));
    }

    public function store(Request $request)
    {
        DB::table('stock_history')->insert([
            'product_id' => $request->product_id,
            'type'       => $request->type,
            'quantity'   => $request->quantity,
            'description'=> $request->description,
        ]);

        return back()->with('success','Stock created successfully');
    }

    public function update(Request $request, $id)
    {
        DB::table('stock_history')
            ->where('id',$id)
            ->update([
                'product_id' => $request->product_id,
                'type'       => $request->type,
                'quantity'   => $request->quantity,
                'description'=> $request->description,
            ]);

        return back()->with('success','Stock updated successfully');
    }

    public function destroy($id)
    {
        DB::table('stock_history')->where('id',$id)->delete();

        return back()->with('success','Stock deleted successfully');
    }
}