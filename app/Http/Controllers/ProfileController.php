<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function profil(){
        $sb_menu ="User";
        $sb_submenu = 'profile';
        $user = Auth::user();
        // dd(auth()->user()->getRoleNames());
        return view('/pages/User/profile',  compact('sb_menu','sb_submenu','user'));
    }

    public function dataUser(){
        $sb_menu ="User";
        $sb_submenu = 'dataUser';
        $user = Auth::user();

        return view('/pages/User/dataUser',  compact('sb_menu','sb_submenu','user'));
    }
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username,' . $user->id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'max:255', 'unique:users,username,' ]
        ]);

        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}
