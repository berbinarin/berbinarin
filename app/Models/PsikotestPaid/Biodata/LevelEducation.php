<?php

namespace App\Models\PsikotestPaid\Biodata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LevelEducation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function educations(): HasMany
    {
        return $this->hasMany(Education::class);
    }
}
