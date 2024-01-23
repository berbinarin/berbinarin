<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userKonseling extends Model
{
    use HasFactory;

    protected  $table = "userKonseling";

    protected $fillable = ["nama_lengkap","email","tanggal","jenis_kelamin","tanggal_mengikuti_test","hasil_test_id"];


    public function jawaban(){
        return $this->hasMany(Jawaban::class);
    }

    public function HasilTest(){
        return $this->belongsTo(hasilTest::class,"hasil_test_id");
    }
}
