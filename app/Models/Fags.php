<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fags extends Model
{
    use HasFactory;

    protected $table ="fags";
    protected $fillable = ["question","answer","service"];
}
