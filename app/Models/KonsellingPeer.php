<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsellingPeer extends Model
{
    use HasFactory;

    protected $table = 'konselling_peers';

    protected $fillable = [
        'jadwal_tanggal',
        'jadwal_pukul',
        'metode',
        'daerah',
        'sesi',
        'harga',
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
        'kategori'
    ];

    public function userDetail()
    {
        return $this->belongsTo(UserDetail::class);
    }
}
