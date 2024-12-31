<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasStaff extends Model
{
    use HasFactory;

    protected $table = 'identitas_staff';
    
    protected $fillable = [
        'nama_lengkap',
        'kampus',
        'no_hp',
        'email',
        'linkedin',
        'instagram',
        'foto_profil',
    ];

    public function jabatan()
    {
        return $this->hasMany(JabatanStaff::class, 'identitas_staff_id');
    }
}
