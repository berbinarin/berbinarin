<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasilTest extends Model
{
    use HasFactory;

    protected $table ="hasil_test";
    protected $fillable = ["totalPoin","jumlahSoal","rata-rata","presentation","dimensi"];

    public function userKonseling(){
        return $this->hasMany(userKonseling::class);
    }
}
