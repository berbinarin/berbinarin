<?php

namespace App\Models\PsikotestPaid\PapiKostick;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionPapiKostick extends Model
{
    use HasFactory;

    protected $table = 'question_papi_kosticks';

    protected $fillable = [
        'a',
        'b',
    ];

    public function answerPapiKostick()
    {
        return $this->hasMany(AnswerPapiKostick::class);
    }
}
