<?php

namespace Database\Seeders\Articles;

use Illuminate\Database\Seeder;
use App\Models\Articles\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Teknologi Masa Depan',
            'category_id' => 1, 
            'author_id' => 1, 
            'cover_image' => 'uploads/articles/teknologi_masa_depan.jpg',
            'content' => '<p>Artikel tentang teknologi masa depan...</p>',
        ]);

        Article::create([
            'title' => 'Tips Hidup Sehat',
            'category_id' => 2, 
            'author_id' => 2, 
            'cover_image' => 'uploads/articles/tips_hidup_sehat.jpg',
            'content' => '<p>Artikel tentang tips hidup sehat...</p>',
        ]);

        Article::create([
            'title' => 'Pendidikan di Era Digital',
            'category_id' => 3, 
            'author_id' => 3, 
            'cover_image' => 'uploads/articles/pendidikan_era_digital.jpg',
            'content' => '<p>Artikel tentang pendidikan di era digital...</p>',
        ]);
    }
}