<?php
namespace App\Models\KeluargaBerbinar;

use Illuminate\Database\Eloquent\Model;

class TableRecord extends Model
{
    protected $table = 'table_record'; 
    protected $fillable = [
        'staff_id',
        'division_id',
        'subdivision_id',
        'date_start',
        'date_end',
        'status',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function subDivision()
    {
        return $this->belongsTo(SubDivision::class, 'subdivision_id');
    }

    public function staff()
    {
        return $this->belongsTo(TableStaff::class, 'staff_id');
    }
}