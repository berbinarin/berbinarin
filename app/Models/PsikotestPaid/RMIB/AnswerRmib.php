<?php

namespace App\Models\PsikotestPaid\RMIB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerRmib extends Model
{
    use HasFactory;

    protected $table = 'answer_rmib';

    protected $fillable = [
        'test_rmib_id',
        'question_rmib_id',
        'outdoor',
        'mechanical',
        'computational',
        'science',
        'personal_contact',
        'aesthetic',
        'musical',
        'literacy',
        'social_service',
        'clerical',
        'practical',
        'medical',
    ];

    public function testRmib()
    {
        return $this->belongsTo(TestRmib::class, 'test_rmib_id', 'id');
    }

    public function questionRmib()
    {
        return $this->belongsTo(QuestionRmib::class, 'question_rmib_id', 'id');
    }
}
