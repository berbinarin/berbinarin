<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konseling_Psikolog extends Model
{
    use HasFactory;

    protected $table = 'konseling_psikolog';

    protected $fillable = ['jadwal_konseling','pelaksanaan','persetujuan-pengisian-data','user_detail_id','hal-yang-dikonsultasikan','hobi/kegemaran','kegiatan-luar-rumah/kegiatan-sosial'];

    
    public function userDetail()
    {
        return $this->belongsTo(UserDetail::class);
    }

}
