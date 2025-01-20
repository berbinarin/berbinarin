<?php

namespace App\Models\KeluargaBerbinar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataJabatan extends Model
{
    use HasFactory;

    protected $table = 'data_jabatan'; 
    protected $fillable = [
        'data_staff_id',
        'posisi',
        'divisi',
        'sub_divisi',
        'awal_menjabat',
        'akhir_menjabat',
    ];

    public function dataStaff()
    {
        return $this->belongsTo(DataStaff::class, 'data_staff_id');
    }
}
