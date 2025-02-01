<?php

namespace App\Models\PsikotestPaid\OCEAN;

use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TestOcean extends Model
{
    use HasFactory;

    protected $table = 'test_ocean';

    protected $fillable = [
        'psikotest_paid_test_id',
    ];

    public function psikotestPaidTest(): BelongsTo
    {
        return $this->belongsTo(PsikotestPaidTest::class);
    }

    public function answerOcean(): HasMany
    {
        return $this->hasMany(AnswerOcean::class);
    }

    // public function resultDap()
    // {
    //     return $this->hasMany(ResultPapiKostick::class);
    // }
}
