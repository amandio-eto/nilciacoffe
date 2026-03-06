<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    

    public function index(){


        $user = User::count();
        $total = DB::table('transactions')
            ->where('user_id', Auth::id())
            ->where('status', 'paid')
            ->whereDate('created_at', date('Y-m-d'))
            ->sum('grand_total');

        return view('Dashboard.index',compact('user','total'));
    }
}
