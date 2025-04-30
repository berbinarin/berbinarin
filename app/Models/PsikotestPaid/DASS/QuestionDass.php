<?php

namespace App\Models\PsikotestPaid\DASS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionDass extends Model
{
    use HasFactory;

    protected $table = "question_dass";

    protected $fillable = [
        'question',
        'question_order',
        'category',
    ];

    public function getRouteKeyName()
    {
        return 'question_order';
    }
}
