<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil input pencarian
        $search = $request->input('search');
        
        // Query builder dengan kondisi pencarian
        $data = User::where('role', 'Admin')
                    ->when($search, function ($query, $search) {
                        return $query->where('name', 'like', "%{$search}%");
                    })
                    ->orderBy('name')
                    ->paginate(10);

        // Kirim data ke view
        return view('admin.user.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|min:5|max:20|alpha_num|unique:users,username',
            'phone' => 'nullable|regex:/^[0-9]*$/|max:15',
        ]);

        // Membuat instance baru user
        $user = new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->phone = $request->input('phone');

        // Set password default 'potensiutama' dan role
        $user->password = Hash::make('potensiutama');
        $user->role = 'Admin';

        // Simpan user
        $user->save();

        return redirect()->route('admin.users.index')->with('success', "User '{$user->name}' berhasil ditambah.");
    }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|min:5|max:20|alpha_num|unique:users,username,' . $user->id,
            'phone' => 'nullable|regex:/^[0-9]*$/|max:15',
        ]);

        // Update data pengguna
        $user->update($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.users.index')->with('success', "User '{$validatedData['name']}' berhasil diperbarui.");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Hapus user dari database
        $user->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus.');
    }

    public function resetPassword(User $id)
    {
        $user = $id;

        // Mengambil nama pengguna
        $userName = $user->name;
        
        // Password default
        $defaultPassword = 'potensiutama';
        
        // Mengatur password dan menyimpannya
        $user->password = bcrypt($defaultPassword);
        $user->save();
        
        // Mengarahkan kembali dengan pesan sukses
        return redirect()->route('admin.users.index')->with('success', "Password untuk '{$userName}' berhasil di-reset ke default.");
    }




}
