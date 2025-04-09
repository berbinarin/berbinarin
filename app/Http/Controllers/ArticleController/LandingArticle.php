<?php

namespace App\Http\Controllers\ArticleController;

use App\Http\Controllers\Controller;
use App\Models\Articles\Article;
use Illuminate\Http\Request;

class LandingArticle extends Controller
{
    public function index()
    {
        $articles = Article::with('category', 'author')->latest()->paginate(6);

        return view('moduls.landing-new.index-article', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::with('category', 'author')->findOrFail($id);

        return view('moduls.landing-new.detail-article', compact('article'));
    }
}