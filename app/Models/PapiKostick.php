<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PapiKostick extends Model
{
    use HasFactory;

    protected $table = 'papi_kosticks';
    protected $fillable = ['a', 'b'];
}
