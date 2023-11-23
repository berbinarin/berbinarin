<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiring_Positions_Job_Descriptions extends Model
{
    use HasFactory;

    protected $table = "hiring_position_job_descriptions";

    protected $fillable =["position_id","job_description"];


    public function HiringPositions(){
        return $this->belongsTo(Hiring_Positions::class,'position_id');
    }
}
