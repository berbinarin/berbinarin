<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsikotestType extends Model
{
    use HasFactory;

    protected $table = 'psikotest_types';
    protected $fillable = ['name', 'description'];
}
