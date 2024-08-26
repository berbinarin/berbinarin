<?php

namespace App\Models\PsikotestPaid\TesEsai;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerTesEsai extends Model
{
    use HasFactory;

    protected $table = 'answer_tes_esai';

    protected $fillable = [
        'test_tes_esai_id',
        'question_tes_esai_id',
        'answer',
    ];

    public function testTesEsai()
    {
        return $this->belongsTo(TestTesEsai::class);
    }
    public function questionTesEsai()
    {
        return $this->belongsTo(QuestionTesEsai::class, 'question_tes_esai_id');
    }
}
