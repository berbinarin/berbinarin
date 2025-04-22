<?php

namespace App\Http\Controllers\ArticleController;

use App\Http\Controllers\Controller;
use App\Models\Articles\Author;
use App\Models\Articles\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Articles\Article;
use Illuminate\Support\Str;

class DashboardArticle extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['login']);
    //     $this->middleware('role:Admin,HR,Konselling,PsikotestFree,PsikotestPaid,BerbinarSatu')->except(['login']);
    // }

    public function dashboardArticle()
    {
        $articleCount = Article::count();
        $authorCount = Author::count();
        $categoryCount = Category::count();

        return view('moduls.dashboard.arteri.dashboard', compact('articleCount', 'authorCount', 'categoryCount'));
    }

    public function addArticle()
    {
        $categories = Category::all();
        $authors = Author::all();

        return view('moduls.dashboard.arteri.form-add', compact('categories', 'authors'));
    }

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

        return redirect()->route('dashboard.article.postingan')->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function updateArticle($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all();
        $authors = Author::all();
        return view('moduls.dashboard.arteri.form-edit', compact('article', 'categories', 'authors'));
    }

    public function updateArticleStore(Request $request, $id)
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

        return redirect()->route('dashboard.article.postingan')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function kategoriArticle()
    {
        $categories = Category::withCount('articles')->get();
        return view('moduls.dashboard.arteri.kategori', compact('categories'));
    }

    public function addCategory(Request $request)
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

        return redirect()->route('dashboard.article.kategori')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function deleteCategory($id)
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

        return redirect()->route('dashboard.article.kategori')->with('success', 'Kategori berhasil dihapus!');
    }

    public function postinganArticle()
    {

        // Mengambil semua data pada tabel articles
        $articles = Article::with('category', 'author')->get();

        return view('moduls.dashboard.arteri.postingan', compact('articles'));
    }

    public function penulisArticle()
    {
        $authors = Author::withCount('articles')->get();

        return view('moduls.dashboard.arteri.penulis', compact('authors'));
    }

    public function addpenulis(Request $request)
    {
        $request->validate([
            'name_author' => 'required|string|max:255',
            'profil_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if (Author::where('name_author', $request->input('name_author'))->exists()) {
            return redirect()->back()->withErrors([
                'error' => 'Nama penulis sudah ada. Silakan gunakan nama lain.',
            ]);
        }

        $fotoProfil = null;
        if ($request->hasFile('profil_image')) {
            $fotoProfil = $request->file('profil_image')->store('uploads/penulis', 'public');
        }

        Author::create([
            'name_author' => $request->input('name_author'),
            'profil_image' => $fotoProfil,
        ]);
        return redirect()->route('dashboard.article.penulis')->with('success', 'Penulis berhasil ditambahkan!');
    }

    public function deletePenulis($id)
    {
        $author = Author::findOrFail($id);

        // Periksa apakah penulis sedang digunakan dalam artikel
        if ($author->articles()->exists()) {
            return redirect()->back()->withErrors([
                'error' => 'Penulis ini tidak dapat dihapus karena masih digunakan dalam artikel.',
            ]);
        }

        if ($author->profil_image) {
            Storage::disk('public')->delete($author->profil_image);
        }

        // Hapus penulis
        $author->delete();
        return redirect()->route('dashboard.article.penulis')->with('success', 'Penulis berhasil dihapus!');
    }

    public function updatePenulis(Request $request, $id)
    {
        $request->validate([
            'name_author' => 'required|string|max:255',
            'profil_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if (Author::where('name_author', $request->input('name_author'))->where('id', '!=', $id)->exists()) {
            return redirect()->back()->withErrors([
                'error' => 'Nama penulis sudah ada. Silakan gunakan nama lain.',
            ]);
        }

        $author = Author::findOrFail($id);

        // Perbarui foto profil jika ada
        if ($request->hasFile('profil_image')) {
            if ($author->profil_image) {
                Storage::disk('public')->delete($author->profil_image);
            }
            $author->profil_image = $request->file('profil_image')->store('uploads/penulis', 'public');
        }

        // Perbarui data penulis
        $author->update([
            'name_author' => $request->input('name_author'),
            'profil_image' => $author->profil_image,
        ]);

        return redirect()->route('dashboard.article.penulis')->with('success', 'Penulis berhasil diperbarui!');
    }

    public function detailArticle($id)
    {
        // Ambil artikel berdasarkan ID
        $article = Article::with('category', 'author')->findOrFail($id);

        // Kirim data artikel ke view
        return view('moduls.dashboard.arteri.detail', compact('article'));
    }

    public function deleteArticle($id)
    {
        $article = Article::findOrFail($id);

        if ($article->cover_image) {
            Storage::disk('public')->delete($article->cover_image);
        }

        $article->delete();

        return redirect()->route('dashboard.article.postingan')->with('success', 'Artikel berhasil dihapus!');
    }

    public function updateCategory(Request $request, $id)
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

        // Perbarui nama kategori
        $category->update([
            'name_category' => $request->input('name_category'),
        ]);

        return redirect()->route('dashboard.article.kategori')->with('success', 'Kategori berhasil diperbarui!');
    }
}
