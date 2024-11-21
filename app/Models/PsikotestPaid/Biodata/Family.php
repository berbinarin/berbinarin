<?php

namespace App\Models\PsikotestPaid\Biodata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Family extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_clinical_id',
        'family_status_id',
        'name',
        'gender',
        'age',
        'ethnic',
        'religion',
        'address',
        'no_hp',
        'last_education',
        'job',
        'child_marriage'
    ];

    public function user_clinical():BelongsTo
    {
        return $this->belongsTo(UserClinical::class);
    }
    public function family_status():BelongsTo
    {
        return $this->belongsTo(FamilyStatus::class);
    }
}
