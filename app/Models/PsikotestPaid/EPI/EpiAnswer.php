<?php

namespace App\Models\PsikotestPaid\EPI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\UserPsikotestPaid; // Sesuaikan dengan path folder yang benar

class EpiAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'fullname', 'question_id', 'answer', 'points'];

    public function question()
    {
        return $this->belongsTo(EpiQuestion::class, 'question_id');
    }

    public function user()
    {
        return $this->belongsTo(UserPsikotestPaid::class, 'user_id');
    }
}