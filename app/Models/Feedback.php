<?php

namespace App\Models;

use App\Models\UserPsikotest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';
    protected $fillable = ['user_id', 'rating', 'experience'];

    public function user()
    {
        return $this->belongsTo(UserPsikotest::class, 'user_id'); // Relasi ke users
    }
}
