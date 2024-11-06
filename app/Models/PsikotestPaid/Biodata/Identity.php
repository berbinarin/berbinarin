<?php

namespace App\Models\PsikotestPaid\Biodata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'no_ktp',
        'place_of_birth',
        'date_of_birth',
        'gender',
        'marriage_status',
        'no_hp',
        'address',
        'email',
        'work_unit',
        'current_position',
        'desired_position',
        'x',
        'facebook',
        'instagram'
    ];
}
