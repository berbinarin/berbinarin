<?php

namespace App\Models\Articles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $guarded = ['id'];
    protected $fillable = ['title', 'category_id', 'author_id', 'cover_image', 'content'];

    /**
     * Relasi ke model Category.
     * Satu artikel memiliki satu kategori.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Relasi ke model Author.
     * Satu artikel memiliki satu penulis.
     */
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
