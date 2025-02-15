<?php

namespace App\Models\PsikotestPaid\Biodata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class AnswerEssay extends Model
{
    use HasFactory;

    protected $fillable = [
        'essay_id',
        'question_essay_id',
        'answer_essayable_id',
        'answer_essayable_type',
        'answer'
    ];

    public function answer_essayable(): MorphTo 
    {
        return $this->morphTo();
    }
    public function question_essay(): BelongsTo
    {
        return $this->belongsTo(QuestionEssay::class);
    }
}
