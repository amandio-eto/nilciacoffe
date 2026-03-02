<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('users.login');
    }

    public function login(Request $request)
    {
        try{
            $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
         if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard.index')->with('Success','Successfully Login');
        }


        }catch(\Exception $e){

             return back()->with('error', 'Failed Login');

        }
        

       

       
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }



    public function index(){




        return view('users.index');
    }
}