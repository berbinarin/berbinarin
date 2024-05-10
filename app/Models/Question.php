<?php

namespace App\Models;

use App\Models\Answer;
use App\Models\Dimension;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';
    protected $fillable = ['question_text', 'dimension_id'];

    public function dimension()
    {
        return $this->belongsTo(Dimension::class, 'dimension_id'); // Relasi ke dimension
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id'); // Relasi dengan answers
    }
}
