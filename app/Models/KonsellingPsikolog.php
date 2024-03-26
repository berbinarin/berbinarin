<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsellingPsikolog extends Model
{
    use HasFactory;

    protected $table = 'konselling_psikologs';

    protected $fillable = ['jadwal_tanggal', 'jadwal_pukul', 'metode', 'nama', 'no_wa', 'email', 'jenis_kelamin', 'agama', 'tempat_lahir', 'tanggal_lahir', 'suku', 'status_pernikahan',
                            'alamat', 'posisi_anak', 'pendidikan', 'riwayat_pekerjaan', 'hobi', 'kegiatan_sosial', 'cerita'];

    public function userDetail()
    {
        return $this->belongsTo(UserDetail::class);
    }
}
