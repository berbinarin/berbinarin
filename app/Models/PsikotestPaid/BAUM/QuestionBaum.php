<?php

namespace App\Models\PsikotestPaid\BAUM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionBaum extends Model
{
    use HasFactory;

    protected $table = 'question_baum';

    protected $fillable = [
        'question',
    ];

    public function answerBaum()
    {
        return $this->hasMany(AnswerBaum::class);
    }
}
