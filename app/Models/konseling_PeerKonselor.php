<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konseling_PeerKonselor extends Model
{
    use HasFactory;
    protected $table = 'konseling_peer_konseling';

    protected $fillable = ['jadwal_peer_konseling_id', 'pelaksanaan', 'persetujuan-pengisian-data', 'user_detail_id', 'hal-yang-dikonsultasikan', 'hobi/kegemaran', 'kegiatan-luar-rumah/kegiatan-sosial'];

    public function userDetail()
    {
        return $this->belongsTo(UserDetail::class);
    }

    // public function JadwalPeerKonseling()
    // {
    //     return $this->belongsTo(JadwalPeerKonseling::class, 'jadwal_peer_konseling_id');
    // }
}
