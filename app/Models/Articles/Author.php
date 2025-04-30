<?php

namespace App\Models\Articles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'author_article'; 
    protected $fillable = ['name_author', 'profil_image']; 
    protected $guarded = ['id']; 

    /**
     * Relasi ke model Article.
     * Satu penulis memiliki banyak artikel.
     */
    public function articles()
    {
        return $this->hasMany(Article::class, 'author_id', 'id');
    }
}
