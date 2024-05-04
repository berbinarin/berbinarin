<?php

namespace App\Models;

use App\Models\Test;
use App\Models\Answer;
use App\Models\Result;
use App\Models\Feedback;
use App\Models\DimensionScore;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserPiskotest extends Model
{
    use HasFactory;

    protected $table = 'users_psikotest';

    protected $fillable = ['name', 'email', 'gender', 'date_of_birth'];

    // Relasi One-to-Many dengan Test
    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    // Relasi One-to-Many dengan Answer
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    // Relasi One-to-Many dengan Feedback
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    // Relasi One-to-Many dengan Dimension_Scores
    public function dimensionScores()
    {
        return $this->hasMany(DimensionScore::class);
    }

    // Relasi One-to-One dengan Result
    public function result()
    {
        return $this->hasOne(Result::class);
    }
}
