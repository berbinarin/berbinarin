<?php
namespace App\Models\KeluargaBerbinar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = ['nama_divisi'];
    protected $table = 'divisions';

    public function subDivisions()
    {
        return $this->hasMany(SubDivision::class);
    }
}