<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiring_Positions_Requirements extends Model
{
    use HasFactory;
    
    protected $table = "hiring_position_requirements";

    protected $fillable =["position_id","requirement"];

    public function HiringPositions(){
        return $this->belongsTo(Hiring_Positions::class, "position_id");
    }
}
