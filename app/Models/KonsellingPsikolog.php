<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsellingPsikolog extends Model
{
    use HasFactory;

    protected $table = 'konselling_psikologs';

    protected $fillable = [
        'jadwal_tanggal',
        'jadwal_pukul',
        'metode',
        'nama',
        'no_wa',
        'email',
        'jenis_kelamin',
        'agama',
        'tempat_lahir',
        'tanggal_Lahir',
        'suku',
        'status_pernikahan',
        'alamat',
        'posisi_anak',
        'pendidikan',
        'asal_sekolah',
        'riwayat_pekerjaan',
        'hobi',
        'kegiatan_sosial',
        'cerita',
        'harga',
        'daerah',
        'sesi',
        'kategori',
    ];

    public function userDetail()
    {
        return $this->belongsTo(UserDetail::class);
    }
}
