<?php
namespace App\Models\KeluargaBerbinar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDivision extends Model
{
    use HasFactory;

    protected $fillable = ['division_id', 'nama_subdivisi'];
    protected $table = 'sub_divisions';

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}