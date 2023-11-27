<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HiringGeneralRequirement extends Model
{
    use HasFactory;

    protected $table = "hiring_general_requirement";
    protected $fillable = ["requirement"];
}
