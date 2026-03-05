<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // ===============================
    // Upload / Update Photo
    // ===============================


    Public function index(){

        return view('Profile.index');
    }
    public function updatePhoto(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $user = Auth::user();

        if ($request->hasFile('foto')) {

            // Delete old photo
            if ($user->foto && file_exists(public_path('profile/'.$user->foto))) {
                unlink(public_path('profile/'.$user->foto));
            }

            $fileName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('profile'), $fileName);

            $user->foto = $fileName;
            $user->save();
        }

        return back()->with('success', 'Photo updated successfully');
    }


    // ===============================
    // Change Password
    // ===============================
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed'
        ]);

        $user = Auth::user();

        // Check old password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password changed successfully');
    }
}