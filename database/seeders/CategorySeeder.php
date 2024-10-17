<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan Kategori Default
        Category::create([
            'name' => 'Desain Komunikasi Visual',
            'slug' => 'desain-komunikasi-visual',
        ]);

        Category::create([
            'name' => 'Televisi & Film',
            'slug' => 'ftv',
        ]);

        Category::create([
            'name' => 'Desain Interior',
            'slug' => 'desain-interior',
        ]);
        
        Category::create([
            'name' => 'Akademik',
            'slug' => 'akademik',
        ]);
        
        Category::create([
            'name' => 'Mahasiswa',
            'slug' => 'mahasiswa',
        ]);

        Category::create([
            'name' => 'Pengembangan Karir',
            'slug' => 'pengembangan-karir',
        ]);

        Category::create([
            'name' => 'Kegiatan Ekstrakurikuler',
            'slug' => 'kegiatan-ekstrakurikuler',
        ]);
    }
}
