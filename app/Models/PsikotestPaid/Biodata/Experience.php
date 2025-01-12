<?php

namespace App\Models\PsikotestPaid\Biodata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_community_id',
        'company_name',
        'last_position'
    ];

    public function user_community(): BelongsTo
    {
        return $this->belongsTo(UserCommunity::class);
    }
}
