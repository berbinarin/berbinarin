<?php

namespace App\Models;

use App\Models\Test;
use App\Models\Answer;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserPiskotest extends Model
{
    use HasFactory;

    protected $table = 'users_psikotest';

    protected $fillable = [
        'name',
        'gender',
        'date_of_birth',
        'email',
        'test_date',
    ];

    // Relasi One-to-Many dengan Test
    public function tests()
    {
        return $this->hasMany(Test::class, 'user_id');
    }

    // Relasi One-to-Many dengan Feedback
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'user_id');
    }

    // Relasi One-to-Many dengan Answer
    public function answers()
    {
        return $this->hasMany(Answer::class, 'user_id');
    }
}
