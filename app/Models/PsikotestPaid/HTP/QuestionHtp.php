<?php

namespace App\Models\PsikotestPaid\HTP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionHtp extends Model
{
    use HasFactory;

    protected $table = 'question_htp';

    protected $fillable = [
        'question',
    ];

    public function answerHtp()
    {
        return $this->hasMany(AnswerHtp::class);
    }
}
