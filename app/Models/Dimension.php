<?php

namespace App\Models;

use App\Models\Question;
use App\Models\DimensionScore;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dimension extends Model
{
    use HasFactory;

    protected $table = 'dimensions';

    protected $fillable = ['name'];

    // Relasi One-to-Many dengan Question
    public function questions()
    {
        return $this->hasMany(Question::class, 'dimension_id');
    }

    // Relasi One-to-Many dengan Dimension_Scores
    public function dimensionScores()
    {
        return $this->hasMany(DimensionScore::class, 'dimension_id');
    }
}
