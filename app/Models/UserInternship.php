<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInternship extends Model
{
    use HasFactory;
    protected $table = 'user_internships';

    protected $fillable = [
        'position_id', 'email', 'nama_lengkap', 'nama_panggilan', 'tanggal_lahir',
        'no_whatsapp', 'asal_kota', 'asal_pendidikan', 'status_kelas', 'jurusan',
        'akun_instagram', 'akun_tiktok', 'akun_linkdin', 'sumber_informasi',
        'tautan_cv', 'tautan_portofolio', 'tautan_berkas_ss', 'motivasi', 'is_process',
        'status_tidak_dapat_diproses', 'status_catatan', 'status_progress', 'keterangan'
    ];

    public function hiringPosition()
    {
        return $this->belongsTo(Hiring_Positions::class, 'position_id', 'id');
    }
}
