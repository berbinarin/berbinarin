<?php

namespace App\Models\PsikotestPaid\Biodata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'level_education_id',
        'educationable_id',
        'educationable_type',
        'school_name',
        'major',
        'year'
    ];

    public function educationable(): MorphTo
    {
        return $this->morphTo();
    }
    public function level_education(): BelongsTo
    {
        return $this->belongsTo(LevelEducation::class);
    }
}
