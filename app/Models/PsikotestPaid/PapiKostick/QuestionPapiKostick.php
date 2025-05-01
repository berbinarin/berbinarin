<?php

namespace App\Models\PsikotestPaid\PapiKostick;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionPapiKostick extends Model
{
    use HasFactory;

    protected $table = 'question_papi_kostick';

    protected $fillable = [
        'a',
        'b',
    ];

    public function answerPapiKostick()
    {
        return $this->hasMany(AnswerPapiKostick::class, 'question_papi_kostick_id');
    }
}
