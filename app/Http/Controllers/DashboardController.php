<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
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

        $userId = Auth::user()->id;
        $totalTransactionsToday = DB::table('transactions')
            ->where('user_id', $userId)
            ->whereDate('created_at', Carbon::today())
            ->count();

        return view('Dashboard.index',compact('user','total','totalTransactionsToday'));
    }
}
