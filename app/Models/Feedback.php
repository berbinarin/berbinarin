<?php

namespace App\Models;

use App\Models\UserPiskotest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';

    protected $fillable = [
        'user_id',
        'experience',
        'suggestions',
        'opinion',
        'social_share',
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(UserPiskotest::class);
    }
}
