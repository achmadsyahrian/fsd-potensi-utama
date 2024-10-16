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
            'name' => 'Teknik Industri',
            'slug' => 'teknik-industri',
        ]);

        Category::create([
            'name' => 'Informatika',
            'slug' => 'informatika',
        ]);

        Category::create([
            'name' => 'Sistem Informasi S1',
            'slug' => 'sistem-informasi-s1',
        ]);

        Category::create([
            'name' => 'Sistem Informasi D3',
            'slug' => 'sistem-informasi-d3',
        ]);

        Category::create([
            'name' => 'Ilmu Komputer S2',
            'slug' => 'ilmu-komputer-s2',
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
