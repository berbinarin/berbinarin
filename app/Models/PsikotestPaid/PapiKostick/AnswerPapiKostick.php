<?php

namespace App\Models\PsikotestPaid\PapiKostick;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerPapiKostick extends Model
{
    use HasFactory;

    protected $table = 'answer_papi_kosticks';

    protected $fillable = [
        'test_papi_kostick_id',
        'question_papi_kostick_id',
        'answer',
    ];

    public function testPapiKostick()
    {
        return $this->belongsTo(TestPapiKostick::class);
    }
}