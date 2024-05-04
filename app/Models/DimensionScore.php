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
        'user_id',
        'dimension_id',
        'score',
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(UserPiskotest::class);
    }

    // Relasi dengan Dimension
    public function dimension()
    {
        return $this->belongsTo(Dimension::class);
    }
}
