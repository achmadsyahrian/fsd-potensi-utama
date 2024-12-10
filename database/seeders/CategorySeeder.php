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

        Category::create([
            'name' => 'Skripsi',
            'slug' => 'skripsi',
        ]);

        Category::create([
            'name' => 'PKL',
            'slug' => 'pkl',
        ]);

        Category::create([
            'name' => 'Perwalian',
            'slug' => 'perwalian',
        ]);

        Category::create([
            'name' => 'Krs',
            'slug' => 'krs',
        ]);

        Category::create([
            'name' => 'Ujian',
            'slug' => 'ujian',
        ]);
    }
}
