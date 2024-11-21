<?php

namespace App\Models\PsikotestPaid\Biodata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FamilyStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    
    public function families():HasMany
    {
        return $this->hasMany(Family::class);
    }
}
