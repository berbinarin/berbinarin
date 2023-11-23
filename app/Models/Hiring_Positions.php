<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiring_Positions extends Model
{
    use HasFactory;

    protected $table = "hiring_positions";

    protected $fillable =["name","type","positions","location","link"];

    public function HiringPositionsJobDescription(){
        return $this->hasOne(Hiring_Positions_Job_Descriptions::class);
    }

    public function Hiring_Positions_Requirement(){
        return $this->hasOne(Hiring_Positions_Requirements::class);
    }
}
