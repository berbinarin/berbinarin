<?php

namespace App\Models\PsikotestPaid\TesEsai;

use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestTesEsai extends Model
{
    use HasFactory;

    protected $table = 'test_tes_esai';

    protected $fillable = [
        'psikotest_paid_test_id',
    ];

    public function psikotestPaidTest()
    {
        return $this->belongsTo(PsikotestPaidTest::class, 'psikotest_paid_test_id');
    }

    public function answerTesEsai()
    {
        return $this->hasMany(AnswerTesEsai::class);
    }

    // public function resultTesEsai()
    // {
    //     return $this->hasMany(ResultPapiKostick::class);
    // }
}
