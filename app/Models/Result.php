<?php

namespace App\Models;

use App\Models\Test;
use App\Models\UserPiskotest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Result extends Model
{
    use HasFactory;

    protected $table = 'results';

    protected $fillable = [
        'test_id',
        'user_id',
        'result_score',
        'result_summary',
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(UserPiskotest::class);
    }

    // Relasi dengan Test
    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
