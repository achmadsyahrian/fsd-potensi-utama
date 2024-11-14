<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Achmad Syahrian',
            'username' => 'administrator',
            'password' => Hash::make('administrator'),
            'role' => 'Administrator',
        ]);

        User::create([
            'name' => 'Admin FSD',
            'username' => 'admin',
            'password' => Hash::make('adminfsd1994'),
            'role' => 'Admin',
        ]);
    }
}
