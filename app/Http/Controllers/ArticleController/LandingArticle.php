<?php

namespace App\Http\Controllers\ArticleController;

use App\Http\Controllers\Controller;
use App\Models\Articles\Article;
use App\Models\Articles\Category;

class LandingArticle extends Controller
{
    public function index()
    {
        $sort = request('sort') ?? 'terbaru';
//        $articles = Article::with('category', 'author')->latest()->paginate(9);
        $heroArticles = Article::with(['category', 'author'])->latest()->take(3)->get();


        $articles = Article::with('category', 'author')
            ->when($sort === 'terlama', function ($query) {
                $query->oldest(); // berdasarkan created_at ascending
            }, function ($query) {
                $query->latest(); // default terbaru
            })
            ->paginate(9)
            ->appends(request()->query()); // biar query param ikut ke pagination

        foreach ($articles as $article) {
            $dom = new \DOMDocument();
            @$dom->loadHTML($article->content); // suppresses warnings for invalid HTML

            $pTags = $dom->getElementsByTagName('p');
            $article->first_paragraph = $pTags->length > 0 ? $pTags->item(0)->textContent : '';
        }
        $categories = Category::all();
        return view('moduls.landing-new.arteri.index', compact('articles', 'categories', 'sort', 'heroArticles'));
    }

    public function category($slug)
    {
        // sort ma boi, masih terbaru atau terlama sih
        $sort = request('sort') ?? 'terbaru';
        // Cari kategori berdasarkan slug
        $category = Category::where('slug', $slug)->firstOrFail();

        // Ambil artikel berdasarkan kategori
        // [WITHOUT SORT FEATURES]
//        $articles = Article::with('category', 'author')
//            ->where('category_id', $category->id)
//            ->latest()
//            ->paginate(9);
        $articles = Article::with('category', 'author')
            ->where('category_id', $category->id)
            ->when($sort === 'terlama', function ($query) {
                $query->oldest();
            }, function ($query) {
                $query->latest();
            })
            ->paginate(9)
            ->appends(request()->query());

        foreach ($articles as $article) {
            $dom = new \DOMDocument();
            @$dom->loadHTML($article->content);
            $pTags = $dom->getElementsByTagName('p');
            $article->first_paragraph = $pTags->length > 0 ? $pTags->item(0)->textContent : '';
        }
        $categories = Category::all();

        $heroArticles = Article::with(['category', 'author'])->latest()->take(3)->get();

        return view('moduls.landing-new.arteri.index', compact('articles', 'categories', 'category', 'sort', 'heroArticles'));
    }


    public function show($id)
    {

        $article = Article::with('category', 'author')->findOrFail($id);
        return view('moduls.landing-new.arteri.detail', compact('article'));
    }
}
