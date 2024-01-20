<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPeerKonseling extends Model
{
    use HasFactory;
    protected $table = 'jadwal_peer_konseling';

    protected $fillable = ['tanggal-jadwal-konseling','jam'];


    public function KonselingPeerKonseling()
    {
        return $this->hasOne(Konseling_PeerKonselor::class);
    }
}
