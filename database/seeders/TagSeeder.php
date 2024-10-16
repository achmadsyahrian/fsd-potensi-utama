<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'name' => 'Teknik Industri',
            'slug' => 'teknik-industri',
        ]);

        Tag::create([
            'name' => 'Informatika',
            'slug' => 'informatika',
        ]);

        Tag::create([
            'name' => 'Sistem Informasi S1',
            'slug' => 'sistem-informasi-s1',
        ]);

        Tag::create([
            'name' => 'Sistem Informasi D3',
            'slug' => 'sistem-informasi-d3',
        ]);

        Tag::create([
            'name' => 'Ilmu Komputer S2',
            'slug' => 'ilmu-komputer-s2',
        ]);
        Tag::create([
            'name' => 'Kegiatan Mahasiswa',
            'slug' => 'kegiatan-mahasiswa',
        ]);

        Tag::create([
            'name' => 'Akademik',
            'slug' => 'akademik',
        ]);

        Tag::create([
            'name' => 'Fakultas',
            'slug' => 'fakultas',
        ]);

        Tag::create([
            'name' => 'Prodi',
            'slug' => 'prodi',
        ]);
    }
}
