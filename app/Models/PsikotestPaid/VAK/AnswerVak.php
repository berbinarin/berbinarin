<?php

namespace App\Models\PsikotestPaid\VAK;

use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\VAK\TestVak;
use App\Models\PsikotestPaid\VAK\QuestionVak;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnswerVak extends Model
{
    use HasFactory;

    protected $table = 'answer_vaks';

    protected $fillable = [
        'question_vak_id',
        'test_vak_id',
        'answer',
    ];

    public function questionVak()
    {
        return $this->belongsTo(QuestionVak::class);
    }

    public function testVak()
    {
        return $this->belongsTo(TestVak::class);
    }
}
