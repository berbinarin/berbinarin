<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    protected $table = 'jawaban';
    protected $fillable = ['user_id','soal_id','poin'];

    public function user()
    {
        return $this->belongsTo(userKonseling::class,'user_id');
    }

    public function soal(){
        return $this->hasMany(Soal::class, 'soal_id');
    }
}
