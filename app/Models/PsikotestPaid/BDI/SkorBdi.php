<?php

namespace App\Models\PsikotestPaid\BDI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkorBdi extends Model
{
    use HasFactory;
    protected $fillable = ['skor','hasil','soal_bdi_id'];
    protected $table = 'skor_bdi';

    public function SoalBdi(){
        return $this->belongsTo(SoalBdi::class,'soal_bdi_id');
    }
}
