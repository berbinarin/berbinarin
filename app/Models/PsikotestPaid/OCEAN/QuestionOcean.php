<?php

namespace App\Models\PsikotestPaid\OCEAN;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionOcean extends Model
{
    use HasFactory;

    protected $table = 'question_ocean';

    protected $fillable = [
        'question',
        'dimension_ocean_id'
    ];

    public function answerOcean()
    {
        return $this->hasMany(AnswerOcean::class);
    }

    public function dimensionOcean()
    {
        return $this->belongsTo(DimensionOcean::class, 'dimension_ocean_id'); // Relasi ke dimension
    }
}
