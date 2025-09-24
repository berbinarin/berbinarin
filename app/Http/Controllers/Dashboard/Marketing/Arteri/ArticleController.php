<?php

namespace App\Http\Controllers\Dashboard\Marketing\Arteri;

use App\Http\Controllers\Controller;
use App\Models\Articles\Article;
use App\Models\Articles\Author;
use App\Models\Articles\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Articles\Interaction;
use Illuminate\Support\Str;
use App\Helpers\CategoryColorHelper;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('category', 'author')->get();
        $categories = $articles->pluck('category')->unique('id')->filter();

        $categoryColors = [];
        foreach ($categories as $cat) {
            $categoryColors[$cat->id] = CategoryColorHelper::getColor($cat->id);
        }

        return view('dashboard.marketing.arteri.articles.index', compact('articles', 'categoryColors'));
    }

    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();

        return view('dashboard.marketing.arteri.articles.create', compact('categories', 'authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
            'author_id' => 'required',
            'category_id' => 'required|exists:categories_article,id',
            'content' => 'required|string',
        ]);

        $coverImagePath = $request->file('cover_image')->store('uploads/articles', 'public');

        Article::create([
            'title' => $request->input('title'),
            'cover_image' => $coverImagePath,
            'author_id' => $request->input('author_id'),
            'category_id' => $request->input('category_id'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('dashboard.arteri.articles.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Artikel berhasil ditambahkan',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }

    public function show(string $id)
    {
        $article = Article::with('category', 'author')->findOrFail($id);
        $interactions = Interaction::where('article_id', $article->id)->get();
        $currentUrl = route('arteri.detail', ['slug' => Str::slug($article->title)]);

        $viewers = $interactions->sum('views');
        $totalShare = $interactions->sum('shares');

        $reactionLabels = ['tidak suka', 'bosan', 'biasa saja', 'senang', 'sangat senang'];
        $reactionCounts = [];
        foreach ($reactionLabels as $label) {
            $reactionCounts[] = $interactions->where('reaction_type', $label)->count();
        }

        $categories = collect([$article->category]);
        $categoryColors = [];
        foreach ($categories as $cat) {
            if ($cat) {
                $categoryColors[$cat->id] = CategoryColorHelper::getColor($cat->id);
            }
        }

        return view('dashboard.marketing.arteri.articles.show', compact('article', 'categoryColors', 'viewers', 'totalShare', 'reactionCounts', 'currentUrl'));
    }

    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all();
        $authors = Author::all();
        return view('dashboard.marketing.arteri.articles.edit', compact('article', 'categories', 'authors'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'author_id' => 'required|exists:author_article,id',
            'category_id' => 'required|exists:categories_article,id',
            'content' => 'required',
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
