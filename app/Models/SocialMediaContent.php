<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialMediaContent extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'platform',
        'url',
        'position',
        'status',
    ];
}
