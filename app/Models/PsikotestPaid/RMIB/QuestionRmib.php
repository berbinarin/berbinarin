<?php

namespace App\Models\PsikotestPaid\RMIB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuestionRmib extends Model
{
    use HasFactory;

    protected $table = "question_rmib";

    protected $fillalbe = [
        'subtest',
        'instruction'
    ];

    public function statements(): HasMany {
        return $this->hasMany(StatementRmib::class);
    }

    public function answers(): HasMany {
        return $this->hasMany(AnswerRmib::class);
    }
}
