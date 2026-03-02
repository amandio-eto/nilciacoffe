<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{


    public function index()
{
    $menus = DB::table('products')
               ->leftJoin('categories','products.category_id','=','categories.id')
               ->select('products.*','categories.name as category_name')
               ->paginate(10);

    return view('Order.index_order', compact('menus'));
}
    

}
