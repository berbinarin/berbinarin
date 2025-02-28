<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableRecord extends Model
{
    use HasFactory;

    protected $table = 'table_record';
    
    protected $fillable = [
        'staff_id', 'division', 'subdivision', 'date_start', 'date_end'
    ];

    public function staff()
    {
        return $this->belongsTo(TableStaff::class, 'staff_id');
    }
}
