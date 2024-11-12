<?php

namespace App\Models\PsikotestPaid\Biodata;

use App\Models\PsikotestPaid\UserPsikotestPaid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class UserEducation extends Model
{
    use HasFactory;

    protected $fillable = [
        'identity_id'
    ];

    public function user_psikotest_paid(): BelongsTo
    {
        return $this->belongsTo(UserPsikotestPaid::class);
    }
    public function identity(): BelongsTo
    {
        return $this->belongsTo(Identity::class);
    }
    public function educations(): MorphMany
    {
        return $this->morphMany(Education::class, 'educationable');
    }
    public function answer_essays(): MorphMany
    {
        return $this->morphMany(AnswerEssay::class, 'answer_essayable');
    }
}
