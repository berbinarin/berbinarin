<?php

namespace App\View\Components\arteri;

use App\Models\Articles\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroArteri extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $heroArticles = Article::with('category', 'author')->latest()->take(3)->get();
        foreach ($heroArticles as $heroArticle) {
            $dom = new \DOMDocument();
            @$dom->loadHTML($heroArticle->content);

            $pTags = $dom->getElementsByTagName('p');
            $heroArticle->first_paragraph = $pTags->length > 0 ? $pTags->item(0)->textContent : '';
        }

        return view('components.arteri.hero-arteri', compact('heroArticles'));
    }
}
