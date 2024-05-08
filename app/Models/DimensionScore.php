<?php

namespace App\Models;

use App\Models\Dimension;
use App\Models\UserPiskotest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DimensionScore extends Model
{
    use HasFactory;

    protected $table = 'dimension_scores';

    protected $fillable = [
        'test_id',
        'dimension_id',
        'score',
    ];

    // Relasi dengan TEst
    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }

    // Relasi dengan Dimension
    public function dimension()
    {
        return $this->belongsTo(Dimension::class, 'dimension_id');
    }
}
