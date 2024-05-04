<?php

namespace App\Models;

use App\Models\Test;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestQuestion extends Model
{
    use HasFactory;

    protected $table = 'test_questions';

    protected $fillable = [
        'test_id',
        'question_id',
    ];

    // Relasi dengan Test
    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    // Relasi dengan Question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    // Relasi One-to-Many dengan Answer
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
