<?php

namespace App\Models;


use App\Models\Answer;
use App\Models\Result;
use App\Models\Question;
use App\Models\UserPsikotest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Test extends Model
{
    use HasFactory;

    protected $table = 'tests';
    protected $fillable = ['test_date'];

    public function users()
    {
        return $this->hasMany(UserPsikotest::class, 'test_id'); // Relasi dengan users
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'test_id'); // Relasi dengan questions
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'test_id'); // Relasi dengan answer
    }

    public function results()
    {
        return $this->hasOne(Result::class, 'test_id'); // Relasi dengan results
    }
}
