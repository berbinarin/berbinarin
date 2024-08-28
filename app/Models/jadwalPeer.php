<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalPeer extends Model
{
    use HasFactory;

    protected $table = 'jadwal_peers';

    protected $fillable = ['hari', 'pukul_mulai', 'pukul_selesai', 'penanggung_jawab'];

    public function userDetail()
    {
        return $this->belongsTo(UserDetail::class);
    }
}