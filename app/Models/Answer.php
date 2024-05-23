<?php

namespace App\Models;

use App\Models\Test;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answer extends Model
{
    use HasFactory;

    protected $table = 'answers';
    protected $fillable = ['answer', 'question_id', 'test_id'];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id'); // Relasi ke questions
    }

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id'); // Relasi ke tests
    }
}
