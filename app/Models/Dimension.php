<?php

namespace App\Models;

use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dimension extends Model
{
    use HasFactory;

    protected $table = 'dimensions';
    protected $fillable = ['name'];

    public function questions()
    {
        return $this->hasMany(Question::class, 'dimension_id'); // Relasi dengan questions
    }
}
