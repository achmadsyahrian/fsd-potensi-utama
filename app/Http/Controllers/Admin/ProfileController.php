<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index() {
        return view('admin.profile.index');
    }

    public function update(Request $request)
    {   
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|min:5|max:20|alpha_num|unique:users,username,' . Auth::id(),
            'phone' => 'nullable|regex:/^[0-9]*$/|max:15',
            'new_password' => 'nullable|string|min:8',
        ]);

        $user = Auth::user();

        // Update nama, username, dan telepon
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->phone = $request->input('phone');

        // Jika ada password baru, update password
        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->input('new_password'));
            $user->save();

            // Logout pengguna jika password baru diatur
            Auth::logout();

            // Invalidate session dan regenerate token
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            // Redirect ke halaman login dengan pesan
            return redirect()->route('admin.login')->with('success', 'Password berhasil diperbarui. Silakan login kembali.');
        }

        // Simpan perubahan
        $user->save();

        return redirect()->route('admin.profile.index')->with('success', 'Profile berhasil diperbarui.');
    }

}
