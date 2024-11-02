<?php

namespace App\Models\PsikotestPaid\Biodata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuestionEssay extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_category_id',
        'question'
    ];

    public function question_category(): BelongsTo
    {
        return $this->belongsTo(QuestionCategory::class);
    }
    public function answer_essays(): HasMany
    {
        return $this->hasMany(AnswerEssay::class);
    }
}
