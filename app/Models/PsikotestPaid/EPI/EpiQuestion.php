<?php

namespace App\Models\PsikotestPaid\EPI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpiQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['statement', 'category', 'answer_key'];

    public function answers()
    {
        return $this->hasMany(EpiAnswer::class, 'question_id');
    }
}
