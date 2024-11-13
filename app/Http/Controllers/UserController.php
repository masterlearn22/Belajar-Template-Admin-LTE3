<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $sb_menu ="User";
        $sb_submenu = 'dataUser';
        // Mengambil semua pengguna
        $users = User::all();
        
        // dd($users);

        // Melewatkan data pengguna ke view menggunakan compact
        return view('/pages/User/dataUser', compact('sb_menu','sb_submenu','users'));
    }


    public function show(User $user)
    {
        $sb_menu ="User";
        $sb_submenu = 'show';
        return view('/pages/User/show', compact('sb_menu','sb_submenu','user'));
    }

    public function edit(User $user)
    {
        $sb_menu ="User";
        $sb_submenu = 'edit';
        return view('/pages/User/edit', compact('sb_menu','sb_submenu','user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|string|in:mahasiswa,dosen,guest',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->update([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
            'role' => $request->role
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
