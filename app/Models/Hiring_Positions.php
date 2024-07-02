<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiring_Positions extends Model
{
    use HasFactory;

    protected $table = "hiring_positions";

    protected $fillable =["name","type","positions","location","link","is_active","divisi"];

    public function HiringPositionsJobDescription(){
        return $this->hasMany(Hiring_Positions_Job_Descriptions::class,'position_id');
    }

    public function Hiring_Positions_Requirement(){
        return $this->hasMany(Hiring_Positions_Requirements::class,'position_id');
    }
}
