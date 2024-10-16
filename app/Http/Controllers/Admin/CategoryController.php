<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil input pencarian
        $search = $request->input('search');
        
        // Query builder dengan kondisi pencarian
        $data = Category::when($search, function ($query, $search) {
                        return $query->where('name', 'like', "%{$search}%");
                    })
                    ->orderBy('name')
                    ->paginate(10);

        // Kirim data ke view
        return view('admin.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug', // Validasi unik slug
            'description' => 'nullable',
        ]);

        // Buat record baru dalam database (misalnya tabel categories)
        $category = new Category();
        $category->name = $validatedData['name'];
        $category->slug = $validatedData['slug'];
        $category->description = $validatedData['description'];
        
        // Simpan data ke dalam database
        $category->save();

        // Redirect atau response setelah data disimpan
        return redirect()->route('admin.categories.index')->with('success', "Category '{$category->name}' berhasil ditambah.");
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        return response()->json($category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // Simpan nama lama sebelum update
        $oldName = $category->name;

        // Validasi input dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug,' . $category->id, // Validasi unik slug, tetapi hanya jika slug berbeda
            'description' => 'nullable',
        ]);

        // Update data kategori
        $category->name = $validatedData['name'];
        $category->slug = $validatedData['slug'];
        $category->description = $validatedData['description'];

        // Simpan data ke dalam database
        $category->save();

        // Redirect atau response setelah data diubah, dengan pesan berisi nama kategori lama dan baru
        return redirect()->route('admin.categories.index')->with('success', "Category '{$oldName}' berhasil diperbarui.");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // Simpan nama kategori sebelum dihapus
        $categoryName = $category->name;

        // Hapus kategori
        $category->delete();

        // Redirect atau response setelah data dihapus, dengan pesan berisi nama kategori
        return redirect()->route('admin.categories.index')->with('success', "Category '{$categoryName}' berhasil dihapus.");
    }

}
