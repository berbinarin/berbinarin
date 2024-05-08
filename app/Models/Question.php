<?php

namespace App\Models;

use App\Models\Dimension;
use App\Models\TestQuestion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';

    protected $fillable = ['rn', 'question_text', 'dimension_id'];

    // Relasi dengan Dimension
    public function dimension()
    {
        return $this->belongsTo(Dimension::class, 'dimension_id');
    }

    // Relasi One-to-Many dengan TestQuestion
    public function testQuestions()
    {
        return $this->hasMany(TestQuestion::class, 'question_id');
    }
}
