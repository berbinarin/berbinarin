<?php

namespace App\Models\PsikotestPaid\DAP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionDap extends Model
{
    use HasFactory;

    protected $table = 'question_dap';

    protected $fillable = [
        'question',
    ];

    public function answerDap()
    {
        return $this->hasMany(AnswerDap::class);
    }
}
