<?php

namespace App\Models;

use App\Models\TestQuestion;
use App\Models\UserPiskotest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;

    protected $table = 'answers';

    protected $fillable = [
        'test_question_id',
        'user_id',
        'answer_text',
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(UserPiskotest::class);
    }

    // Relasi dengan TestQuestion
    public function testQuestion()
    {
        return $this->belongsTo(TestQuestion::class);
    }
}
