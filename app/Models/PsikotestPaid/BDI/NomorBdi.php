<?php

namespace App\Models\PsikotestPaid\BDI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomorBdi extends Model
{
    use HasFactory;
    protected $table = 'nomor_bdi';
    protected $fillable = ['nomor_bdi'];

    public function SoalBdi(){
        return $this->hasMany(SoalBdi::class);
    }
}
