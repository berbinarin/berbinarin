<?php

namespace App\Models\PsikotestPaid\VAK;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultVak extends Model
{
    use HasFactory;

    protected $table = 'result_vaks';

    protected $fillable = [
        'test_vak_id',
        'visual',
        'auditori',
        'kinestetik',
    ];
}
