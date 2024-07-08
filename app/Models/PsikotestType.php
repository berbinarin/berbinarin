<?php

namespace App\Models;

use App\Models\UserPsikotestPaid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PsikotestType extends Model
{
    use HasFactory;

    protected $table = 'psikotest_types';
    protected $fillable = ['name', 'description'];

    public function userPsikotestPaids()
    {
        return $this->hasMany(UserPsikotestPaid::class);
    }
}
