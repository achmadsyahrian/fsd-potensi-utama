<?php

return [
    'required' => 'Kolom :attribute harus diisi.',
    'attributes' => [
        'name' => 'nama',
        'phone' => 'nomor handphone',
        'new_password' => 'password baru',
        'description' => 'deskripsi',
        'title' => 'judul',
        'category_id' => 'category',
    ],
    'regex' => 'Kolom :attribute harus memenuhi format yang benar.',
    'email' => 'Kolom :attribute harus berupa alamat email yang valid.',
    'min' => [
        'string' => 'Kolom :attribute harus memiliki setidaknya :min karakter.',
    ],
    'same' => 'Kolom :attribute harus sama dengan :other.',
    'max' => [
        'file' => 'Ukuran file :attribute tidak boleh melebihi :max kilobyte.', 
        'string' => 'Panjang karakter :attribute tidak boleh melebihi :max karakter.', 
    ],
    'unique' => 'Data :attribute telah terdaftar, mohon gunakan yang berbeda.',
    'image' => 'Kolom :attribute harus berupa file gambar.',
    'numeric' => 'Kolom :attribute hanya boleh berisi angka.',
    'uploaded' => 'Ukuran file yang diunggah pada kolom :attribute terlalu besar. Harap unggah file dengan ukuran maksimum 2MB.',
];