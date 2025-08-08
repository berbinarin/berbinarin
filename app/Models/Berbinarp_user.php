<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Berbinarp_user extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'berbinarp_users'; // Menyesuaikan nama tabel

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'gender',
        'age',
        'wa_number',
        'last_education',
        'knowing_source',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        //'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function enrollment()
    {
        return $this->hasOne(Berbinarp_enrollments::class, 'user_id');
    }
}
