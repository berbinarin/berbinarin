<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerbinarForU extends Model
{
    use HasFactory;

    protected $table = 'berbinar_for_u';

    protected $fillable = [
        'nama',
        'email',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'status_pernikahan',
        'jenis_kelamin',
        'no_wa',
        'suku',
        'agama',
        'posisi_anak',
        'hobi',
        'pendidikan',
        'asal_sekolah',
        'riwayat_pekerjaan',
        'kegiatan_sosial',
        'kategori',
        'cerita_utama',
        'cerita_tambahan',
        'alasan_konseling',
        'harapan_konseling',
    ];

    public function userDetail()
    {
        return $this->belongsTo(UserDetail::class);
    }
}
