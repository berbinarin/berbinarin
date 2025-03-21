<?php

namespace App\Models\PsikotestPaid\DASS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerDass extends Model
{
    use HasFactory;

    protected $table = 'answer_dass';

    protected $fillable = [
        'psikotest_paid_test_id',
        'question_dass_id',
        'answer'
    ];

    public function questionDass() {
        return $this->belongsTo(QuestionDass::class);
    }
}
