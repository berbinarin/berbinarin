<?php

namespace App\Models\PsikotestPaid\TesEsai;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionTesEsai extends Model
{
    use HasFactory;

    protected $table = 'question_tes_esai';

    protected $fillable = [
        'question',
    ];

    public function answerTesEsai()
    {
        return $this->hasMany(AnswerTesEsai::class);
    }
}
