<?php

namespace App\Models\PsikotestPaid\BAUM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerBaum extends Model
{
    use HasFactory;

    protected $table = 'answer_baum';

    protected $fillable = [
        'test_baum_id',
        'question_baum_id',
        'answer',
    ];

    public function testBaum()
    {
        return $this->belongsTo(TestBaum::class);
    }
    public function questionBaum()
    {
        return $this->belongsTo(QuestionBaum::class, 'question_baum_id');
    }
}
