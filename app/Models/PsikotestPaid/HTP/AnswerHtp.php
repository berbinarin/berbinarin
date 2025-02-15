<?php

namespace App\Models\PsikotestPaid\HTP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerHtp extends Model
{
    use HasFactory;

    protected $table = 'answer_htp';

    protected $fillable = [
        'test_htp_id',
        'question_htp_id',
        'answer',
    ];

    public function testHtp()
    {
        return $this->belongsTo(TestHtp::class);
    }
    public function questionHtp()
    {
        return $this->belongsTo(QuestionHtp::class, 'question_htp_id');
    }
}
