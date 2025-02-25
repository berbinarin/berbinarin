<?php

namespace App\Models\KeluargaBerbinar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataStaff extends Model
{
    use HasFactory;

    protected $table = 'data_staff'; 
    protected $fillable = [
        'nama_lengkap',
        'linkedin',
        'foto',
        'motm',
    ];

    public function dataJabatan()
    {   
        return $this->hasMany(DataJabatan::class, 'data_staff_id');
    }

    // public function dataJabatan()
    // {
    //     return $this->hasOne(DataJabatan::class, 'data_staff_id');  // Menyesuaikan dengan nama kolom foreign key
    // }
}
