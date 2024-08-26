<?php

namespace App\Models\PsikotestPaid\SSCT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerSsct extends Model
{
    use HasFactory;

    protected $table = 'answer_ssct';

    protected $fillable = [
        'test_ssct_id',
        'question_ssct_id',
        'answer',
    ];

    public function testSsct()
    {
        return $this->belongsTo(TestSsct::class);
    }
    public function questionSsct()
    {
        return $this->belongsTo(QuestionSsct::class, 'question_ssct_id');
    }
}
