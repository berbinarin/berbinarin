<?php

namespace App\Models\PsikotestPaid\BDI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalBdi extends Model
{
    use HasFactory;
    protected $table = 'soal_bdi';
    protected $fillable = ['pernyataan','bobot','nomor_bdi_id'];

    public function NomorBdi(){
        return $this->belongsTo(NomorBdi::class);
    }

    public function SkorBdi(){
        return $this->hasMany(SkorBdi::class);
    }
}
