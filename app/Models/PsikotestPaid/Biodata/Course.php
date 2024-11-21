<?php

namespace App\Models\PsikotestPaid\Biodata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_community_id',
        'course_name',
        'organizer_course',
        'year_course'
    ];

    public function user_community(): BelongsTo
    {
        return $this->belongsTo(UserCommunity::class);
    }
}
