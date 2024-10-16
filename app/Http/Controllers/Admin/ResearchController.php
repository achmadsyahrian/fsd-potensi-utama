<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Research;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Research::all();
        
        // Kirim data ke view
        return view('admin.research.index', compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Research $research)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $research = Research::findOrFail($id);

        return view('admin.research.edit', compact('research'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $research = Research::find($id);

        // Validasi data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        // Data Lama
        $oldTitle = $research->title;

        // Update data post
        $research->title = $request->input('title');
        $research->content = $request->input('content');
        $research->save();

        return redirect()->route('admin.researches.index')->with('success', "Penelitian '{$oldTitle}' berhasil diperbarui!");
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/research/content/files', $filename);

        return response()->json(['url' => Storage::url($path)]);
    }
}
