<?php

namespace App\Http\Controllers\Landing\Arteri;

use App\Http\Controllers\Controller;
use App\Models\Articles\Article;
use App\Models\Articles\Category;

class ArteriController extends Controller
{

    public function index()
    {
        $sort = request('sort') ?? 'terbaru';
        $heroArticles = Article::with(['category', 'author'])->latest()->take(3)->get();

        $articles = Article::with('category', 'author')
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
        return view('moduls.landing-new.arteri.index', compact('articles', 'categories', 'sort', 'heroArticles'));
    }

    public function category($slug)
    {
        $sort = request('sort') ?? 'terbaru';
        $category = Category::where('slug', $slug)->firstOrFail();

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
