<?php

namespace App\Models\PsikotestPaid\OCEAN;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnswerOcean extends Model
{
    use HasFactory;

    protected $table = 'answer_ocean';

    protected $fillable = [
        'test_ocean_id',
        'question_ocean_id',
        'answer',
    ];

    public function testOcean(): BelongsTo
    {
        return $this->belongsTo(TestOcean::class, 'test_ocean_id');
    }
    public function questionOcean(): BelongsTo
    {
        return $this->belongsTo(QuestionOcean::class, 'question_ocean_id');
    }
}
