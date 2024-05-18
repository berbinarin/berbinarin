<?php

namespace App\Models;

use App\Models\Test;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Result extends Model
{
    use HasFactory;

    protected $table = 'results';
    protected $fillable = ['test_id', 'agreeableness', 'conscientiousness', 'extraversion', 'neuroticism', 'openness'];

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id'); // Relasi ke tests
    }
}
