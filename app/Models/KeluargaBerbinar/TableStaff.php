<?php

namespace App\Models\KeluargaBerbinar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableStaff extends Model
{
    use HasFactory;

    protected $table = 'table_staff';
    
    protected $fillable = [
        'name', 'status', 'linkedin', 'photo', 'motm'
    ];

    public function records()
    {
        return $this->hasMany(TableRecord::class, 'staff_id');
    }
}
