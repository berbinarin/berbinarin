<?php

namespace App\Models\PsikotestPaid\OCEAN;

use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestOcean extends Model
{
    use HasFactory;

    protected $table = 'test_ocean';

    protected $fillable = [
        'psikotest_paid_test_id',
    ];

    public function psikotestPaidTest()
    {
        return $this->belongsTo(PsikotestPaidTest::class);
    }

    public function answerOcean()
    {
        return $this->hasMany(AnswerOcean::class);
    }

    // public function resultDap()
    // {
    //     return $this->hasMany(ResultPapiKostick::class);
    // }
}
