<?php

namespace App\Models;

use App\Models\Result;
use App\Models\TestQuestion;
use App\Models\UserPiskotest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Test extends Model
{
    use HasFactory;

    protected $table = 'tests';

    protected $fillable = [
        'test_date',
        'user_id',
    ];


    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(UserPiskotest::class);
    }

    // Relasi One-to-Many dengan Test_Question
    public function testQuestions()
    {
        return $this->hasMany(TestQuestion::class);
    }

    // Relasi One-to-One dengan Result
    public function result()
    {
        return $this->hasOne(Result::class);
    }
}
