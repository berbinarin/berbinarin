<?php

namespace App\Models;

use App\Models\UserPsikotest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';
    protected $fillable = ['user_id', 'experience', 'opinion', 'suggestion', 'social_share'];

    public function user()
    {
        return $this->belongsTo(UserPsikotest::class, 'user_id'); // Relasi ke users
    }
}
