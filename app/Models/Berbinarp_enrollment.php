<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berbinarp_enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'class_id',
        'transfer_evidance',
        'class_progress',
        'enrollment_date',
        'expired_date',
        'completed_date',
    ];
}
