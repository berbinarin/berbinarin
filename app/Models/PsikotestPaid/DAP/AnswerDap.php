<?php

namespace App\Models\PsikotestPaid\DAP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerDap extends Model
{
    use HasFactory;

    protected $table = 'answer_dap';

    protected $fillable = [
        'test_dap_id',
        'question_dap_id',
        'answer',
    ];

    public function testDap()
    {
        return $this->belongsTo(TestDap::class);
    }
    public function questionDap()
    {
        return $this->belongsTo(QuestionDap::class, 'question_dap_id');
    }
}
