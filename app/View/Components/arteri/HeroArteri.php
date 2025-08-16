<?php

namespace App\View\Components\arteri;

use App\Models\Articles\Article;
use App\Helpers\CategoryColorHelper;
use Illuminate\View\Component;

class HeroArteri extends Component
{
    public $heroArticles;
    public $categoryColors;

    /**
     * Create a new component instance.
     */
    public function __construct($heroArticles = null, $categoryColors = null)
    {
        // Jika heroArticles tidak diberikan, ambil sendiri
        $this->heroArticles = $heroArticles ?? Article::with('category', 'author')
            ->latest()
            ->take(3)
            ->get();

        // Generate category colors jika tidak ada
        $this->categoryColors = $categoryColors ?? $this->generateCategoryColors();
    }

    protected function generateCategoryColors()
    {
        $colors = [];
        foreach ($this->heroArticles as $article) {
            $catId = $article->category->id;
            if (!isset($colors[$catId])) {
                $colors[$catId] = CategoryColorHelper::getColor($catId);
            }
        }
        return $colors;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        // Ekstrak paragraf pertama
        foreach ($this->heroArticles as $heroArticle) {
            $dom = new \DOMDocument();
            @$dom->loadHTML($heroArticle->content);
            $pTags = $dom->getElementsByTagName('p');
            $heroArticle->first_paragraph = $pTags->length > 0 ? $pTags->item(0)->textContent : '';
        }

        return view('components.arteri.hero-arteri', [
            'heroArticles' => $this->heroArticles,
            'categoryColors' => $this->categoryColors
        ]);
    }
}