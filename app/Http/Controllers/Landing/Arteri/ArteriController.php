<?php

namespace App\Http\Controllers\Landing\Arteri;

use App\Http\Controllers\Controller;
use App\Models\Articles\Article;
use App\Models\Articles\Category;
use Illuminate\Support\Facades\Cookie;
use App\Models\Articles\Interaction;
use App\Helpers\InteractionHelper;
use Illuminate\Http\Request;


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
        return view('landing.arteri.index', compact('articles', 'categories', 'sort', 'heroArticles'));
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

        return view('landing.arteri.index', compact('articles', 'categories', 'category', 'sort', 'heroArticles'));
    }



    public function show($slug)
    {
        // Mengembalikan artikel berdasarkan slug
        $title = str_replace('-', ' ', $slug);

        $whereTitle = '%' . str_replace('-', '%', strtolower($slug)) . '%';
        $article = Article::with('category', 'author')
            ->whereRaw('LOWER(title) LIKE ?', [$whereTitle])
            ->firstOrFail();

        // Method untuk memgirim data ke Helpers 
        // if (
        //     request()->query('from') === 'index' &&
        //     request()->method() === 'GET' &&
        //     !session()->has('success')
        // ) {
        //     InteractionHelper::trackView($article->id);
        // }
        // Ambil user_token dari cookie
        $userToken = Cookie::get('user_token');
        $ipAddress = request()->ip();


        $userReaction = Interaction::where('article_id', $article->id)
            ->where(function ($query) use ($userToken, $ipAddress) {
                $query->where('user_token', $userToken)
                    ->orWhere('ip_address', $ipAddress);
            })
            ->first();

        // URL untuk Button Share
        $currentUrl = route('arteri.detail', ['slug' => $slug]);
        $description = strip_tags($article->content);
        $description = substr($description, 0, 160) . '...';

        // imageurl untuk share
        $imageUrl = asset('/image/' . $article->cover_image);


        $shareButtons = [
            'facebook' => "https://www.facebook.com/sharer/sharer.php?u=" . urlencode($currentUrl) . "&quote=" . urlencode($article->title),
            'twitter' => "https://twitter.com/intent/tweet?text=" . urlencode($article->title) . "&url=" . urlencode($currentUrl) . "&hashtags=BerbinarInsightful",
            'linkedin' => "https://www.linkedin.com/sharing/share-offsite/?url=" . urlencode($currentUrl) . "&title=" . urlencode($article->title) . "&summary=" . urlencode($description),
            'whatsapp' => "https://wa.me/?text=" . urlencode($article->title . "\n\n" . $description . "\n\nBaca selengkapnya: " . $currentUrl),
            'telegram' => "https://t.me/share/url?url=" . urlencode($currentUrl) . "&text=" . urlencode($article->title . "\n\n" . $description)
        ];

        return view('landing.arteri.detail', compact('article', 'shareButtons', 'currentUrl', 'imageUrl', 'description', 'slug', 'userReaction'));
    }

    public function view(Request $request, $articleId)
    {
        InteractionHelper::trackView($articleId);
        return response()->json(['success' => true]);
    }

    public function reaction(Request $request, $articleId)
    {
        InteractionHelper::trackReaction($articleId, $request->reaction_type);
        if ($request->ajax()) {
            return response()->json(['success' => 'Reaction Tersimpan!']);
        }
        return response()->json([
            'success' => 'Reaction tersimpan!',
            'reaction' => $request->reaction
        ]);
    }

    public function share(Request $request, $articleId)
    {
        InteractionHelper::trackShare($articleId);
        if ($request->ajax()) {
            return response()->json(['success' => 'Share tercatat!']);
        }
        return response()->json([
            'success' => 'Share berhasil!',
            'reaction' => $request->reaction
        ]);
    }

    
}
