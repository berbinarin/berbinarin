<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPekerjaan extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pekerjaan';

    protected $fillable = ['nama-perusahaan','posisi','tahun_masuk','tahun_keluar','user_detail_id'];


    public function userDetail()
    {
        return $this->belongsTo(UserDetail::class);
    }
}
