<?php

namespace App\Models\PsikotestPaid\SSCT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionSsct extends Model
{
    use HasFactory;

    protected $table = 'question_ssct';

    protected $fillable = [
        'question',
    ];

    public function answerSsct()
    {
        return $this->hasMany(AnswerSsct::class);
    }
}
