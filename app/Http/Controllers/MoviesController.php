<?php

namespace App\Http\Controllers;

use App\Models\movies;
use App\Models\categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies=movies::orderBy('id', 'desc')->paginate(6);
        return view('template', ['movies'=>$movies]);
    }

    public function detailMovie($id)
    {
        $movie = movies::with('categories')->findOrFail($id);
        return view('detail_movie', compact('movie'));
    }

    public function detailMovieDua($id)
    {
        $movie = movies::with('categories')->findOrFail($id);
        return view('detail_movie_dua', compact('movie'));
    }

    public function listMovie()
    {
        $movies=movies::orderBy('id', 'desc')->paginate(6);
        return view('view', ['movies'=>$movies]);
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
    return redirect('/view')->with('success', 'Movie created successfully.');
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
    public function edit(string $id)
    {
        $movie = movies::findOrFail($id);
        $categories = categories::all(); // pastikan ini ada
        return view('edit', compact('movie', 'categories'));
        // $movie = movies::with('categories')->findOrFail($id);
        // return view('edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = $request->validate([
        'title' => 'required|string|max:255',
        'synopsis' => 'nullable|string',
        'category_id' => 'required|exists:categories,id',
        'year' => 'required|integer|min:1900|max:' . date('Y'),
        'actors' => 'nullable|string',
        'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Generate slug otomatis
        $rules['slug'] = Str::slug($rules['title']);

        // Simpan cover image jika ada
        if ($request->hasFile('cover_image')) {
            $rules['cover_image'] = $request->file('cover_image')->store('images', 'public');
        }

        movies::where('id', $id)
            ->update($rules);

        return redirect('/view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Gate::allows('delete-movie')) {

            movies::destroy($id);
            return redirect('/view');
        }
        abort(403);
        
    }
}
