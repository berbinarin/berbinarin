<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpiQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['statement', 'category'];

    public function answers()
    {
        return $this->hasMany(EpiAnswer::class, 'question_id');
    }
}
