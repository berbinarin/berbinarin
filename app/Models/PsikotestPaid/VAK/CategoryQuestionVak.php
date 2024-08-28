<?php

namespace App\Models\PsikotestPaid\VAK;

use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\VAK\QuestionVak;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryQuestionVak extends Model
{
    use HasFactory;

    protected $table = 'category_question_vaks';

    protected $fillable = [
        'name',
    ];

    public function questionVak()
    {
        return $this->hasMany(QuestionVak::class);
    }
}
