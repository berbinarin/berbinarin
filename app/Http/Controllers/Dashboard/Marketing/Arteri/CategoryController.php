<?php

namespace App\Http\Controllers\Dashboard\Marketing\Arteri;

use App\Http\Controllers\Controller;
use App\Models\Articles\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::withCount('articles')->get();
        return view('dashboard.marketing.arteri.categories.index', compact('categories'));
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
        $request->validate([
            'name_category' => 'required|string|max:255',
        ]);

        if (Category::where('name_category', $request->input('name_category'))->exists()) {
            return redirect()->back()->withErrors([
                'error' => 'Nama kategori sudah ada. Silakan gunakan nama lain.',
            ]);
        }

        Category::create([
            'name_category' => $request->input('name_category'),
            'slug' => Str::slug($request->input('name_category')),
        ]);

        return redirect()->route('dashboard.arteri.categories.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_category' => 'required|string|max:255',
        ]);

        if (Category::where('name_category', $request->input('name_category'))->where('id', '!=', $id)->exists()) {
            return redirect()->back()->withErrors([
                'error' => 'Nama kategori sudah ada. Silakan gunakan nama lain.',
            ]);
        }

        $category = Category::findOrFail($id);

        $category->update([
            'name_category' => $request->input('name_category'),
        ]);

        return redirect()->route('dashboard.arteri.categories.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        // Periksa apakah kategori sedang digunakan dalam artikel
        if ($category->articles()->exists()) {
            return redirect()->back()->withErrors([
                'error' => 'Kategori ini tidak dapat dihapus karena masih digunakan dalam artikel.',
            ]);
        }

        // Hapus kategori jika tidak digunakan
        $category->delete();

        return redirect()->route('dashboard.arteri.categories.index')->with('success', 'Kategori berhasil dihapus!');
    }
}
