<?php

namespace App\Models\Articles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    use HasFactory;

    protected $table = 'interaction_article';

    protected $fillable = [
        'article_id',
        'user_token',
        'ip_address',
        'views',
        'reaction_type',
        'shares',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }
}
