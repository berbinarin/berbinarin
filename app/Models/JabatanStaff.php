<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanStaff extends Model
{
    use HasFactory;

    protected $table = 'jabatan_staff';

    protected $fillable = [
        'identitas_staff_id',
        'divisi',
        'posisi',
        'sub_divisi',
        'awal_menjabat',
        'akhir_menjabat',
    ];

    public function identitas()
    {
        return $this->belongsTo(IdentitasStaff::class, 'identitas_staff_id');
    }
}
