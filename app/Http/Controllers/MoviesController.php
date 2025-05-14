<?php

namespace App\Http\Controllers;

use App\Models\movies;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies=movies::orderBy('id', 'asc')->paginate(6);
        return view('template', ['movies'=>$movies]);
    }

    public function detailMovie($id)
    {
        $movie = movies::with('categories')->findOrFail($id);
        return view('detail_movie', compact('movie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = categories::all();
        return view('create', compact('categories'));
        //return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'synopsis' => 'nullable|string',
        'category_id' => 'required|exists:categories,id',
        'year' => 'required|integer|min:1900|max:' . date('Y'),
        'actors' => 'nullable|string',
        'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Generate slug otomatis
    $validated['slug'] = Str::slug($validated['title']);

    // Simpan cover image jika ada
    if ($request->hasFile('cover_image')) {
        $validated['cover_image'] = $request->file('cover_image')->store('images', 'public');
    }

    // Simpan data ke database
    movies::create($validated);

    // Redirect kembali dengan pesan sukses
    return redirect('/create')->with('success', 'Movie created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(movies $movies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(movies $movies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, movies $movies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(movies $movies)
    {
        //
    }
}
