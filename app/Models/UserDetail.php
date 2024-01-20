<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $table = 'user_detail';

    protected $fillable = ['user_id','jenis_kelamin','tempat_lahir','tanggal_lahir','suku-bangsa','agama','status_pernikahan','anak_ke-_dari_berapa_bersaudara','alamat-domisili-saat-ini','pendidikan-saat-ini'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function RiwayatPekerjaan()
    {
        return $this->hasMany(RiwayatPekerjaan::class,'riwayat_pekerjaan_id');
    }

}
