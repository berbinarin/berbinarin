<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'full_name',
        'nickname',
        'date_of_birth',
        'whatsapp_number',
        'residence',
        'institution',
        'status',
        'major',
        'instagram_account',
        'tiktok_account',
        'linkedin_account',
        'recruitment_info',
        'cv_link',
        'portfolio_link',
        'proof_of_follow_link',
        'motivation',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];
}