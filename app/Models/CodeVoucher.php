<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodeVoucher extends Model
{
    use HasFactory;
    protected $table = 'code_voucher';

    protected $fillable = [
        'category',
        'code',
        'percentage',
        'service_type',
        'jenis_pendaftaran',
        'nama_voucher',
        'tipe',
        'detail',
    ];

}
