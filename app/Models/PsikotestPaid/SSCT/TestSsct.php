<?php

namespace App\Models\PsikotestPaid\SSCT;

use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestSsct extends Model
{
    use HasFactory;

    protected $table = 'test_ssct';

    protected $fillable = [
        'psikotest_paid_test_id',
    ];

    public function psikotestPaidTest()
    {
        return $this->belongsTo(PsikotestPaidTest::class);
    }

    public function answerSsct()
    {
        return $this->hasMany(AnswerSsct::class);
    }

    // public function resultTesEsai()
    // {
    //     return $this->hasMany(ResultPapiKostick::class);
    // }
}
