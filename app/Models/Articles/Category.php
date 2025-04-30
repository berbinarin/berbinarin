<?php

namespace App\Models\Articles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories_article';
    protected $fillable = ['name_category', 'slug'];
    protected $guarded = ['id'];

    /**
     * Relasi ke model Article.
     * Satu kategori memiliki banyak artikel.
     */
    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }
}
