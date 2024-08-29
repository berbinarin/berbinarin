<?php

namespace App\Models\PsikotestPaid\VAK;

use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\VAK\AnswerVak;
use App\Models\PsikotestPaid\VAK\CategoryQuestionVak;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuestionVak extends Model
{
    use HasFactory;

    protected $table = 'question_vaks';

    protected $fillable = [
        'category_question_vak_id',
        'question_text',
    ];

    public function categoryQuestionVak()
    {
        return $this->belongsTo(CategoryQuestionVak::class);
    }

    public function answerVak()
    {
        return $this->hasMany(AnswerVak::class);
    }
}
