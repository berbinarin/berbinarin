<?php

namespace App\Models\PsikotestPaid\OCEAN;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerOcean extends Model
{
    use HasFactory;

    protected $table = 'answer_ocean';

    protected $fillable = [
        'test_ocean_id',
        'question_ocean_id',
        'answer',
    ];

    public function testOcean()
    {
        return $this->belongsTo(TestOcean::class);
    }
    public function questionOcean()
    {
        return $this->belongsTo(QuestionOcean::class, 'question_ocean_id');
    }
}
