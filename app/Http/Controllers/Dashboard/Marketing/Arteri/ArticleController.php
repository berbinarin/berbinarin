<?php

namespace App\Http\Controllers\Dashboard\Marketing\Arteri;

use App\Http\Controllers\Controller;
use App\Models\Articles\Article;
use App\Models\Articles\Author;
use App\Models\Articles\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('category', 'author')->get();

        $categories = $articles->pluck('category')->unique('id')->filter();

        // Generate warna dari id
        $categoryColors = [];
        foreach ($categories as $cat) {
            $hash = crc32($cat->id);
            // Generate warna
            $hue = $hash % 360;
            $color = "hsl($hue, 80%, 70%)";
            $categoryColors[$cat->id] = $color;
        }

        return view('dashboard.marketing.arteri.articles.index', compact('articles', 'categoryColors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();

        return view('dashboard.marketing.arteri.articles.create', compact('categories', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'author_id' => 'required|string|max:255',
            'category_id' => 'required|exists:categories_article,id',
            'content' => 'required|string',
        ]);

        // Menyimpan file gambar
        $coverImagePath = $request->file('cover_image')->store('uploads/articles', 'public');

        // Menyimpan data ke database
        Article::create([
            'title' => $request->input('title'),
            'cover_image' => $coverImagePath,
            'author_id' => $request->input('author_id'),
            'category_id' => $request->input('category_id'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('dashboard.arteri.articles.index')->with('success', 'Artikel berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::with('category', 'author')->findOrFail($id);
        
        $categories = collect([$article->category]);
        $categoryColors = [];
        foreach ($categories as $cat) {
            if ($cat) {
                $hash = crc32($cat->id);
                $hue = $hash % 360;
                $color = "hsl($hue, 80%, 70%)";
                $categoryColors[$cat->id] = $color;
            }
        }

        return view('dashboard.marketing.arteri.articles.show', compact('article', 'categoryColors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

    {
        $article = Article::findOrFail($id);
        $categories = Category::all();
        $authors = Author::all();
        return view('dashboard.marketing.arteri.articles.edit', compact('article', 'categories', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'author_id' => 'required|exists:author_article,id',
            'category_id' => 'required|exists:categories_article,id',
            'content' => 'required|string',
        ]);

        $article = Article::findOrFail($id);

        if ($request->hasFile('cover_image')) {
            if ($article->cover_image) {
                Storage::disk('public')->delete($article->cover_image);
            }
            $article->cover_image = $request->file('cover_image')->store('uploads/articles', 'public');
        }

        $article->update([
            'title' => $request->input('title'),
            'cover_image' => $article->cover_image,
            'author_id' => $request->input('author_id'),
            'category_id' => $request->input('category_id'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('dashboard.arteri.articles.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);

        if ($article->cover_image) {
            Storage::disk('public')->delete($article->cover_image);
        }

        $article->delete();

        return redirect()->route('dashboard.arteri.articles.index')->with('success', 'Artikel berhasil dihapus!');
    }
}
