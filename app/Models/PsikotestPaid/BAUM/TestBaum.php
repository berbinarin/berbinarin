<?php

namespace App\Models\PsikotestPaid\BAUM;

use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestBaum extends Model
{
    use HasFactory;

    protected $table = 'test_baum';

    protected $fillable = [
        'psikotest_paid_test_id',
    ];

    public function psikotestPaidTest()
    {
        return $this->belongsTo(PsikotestPaidTest::class);
    }

    public function answerBaum()
    {
        return $this->hasMany(AnswerBaum::class);
    }

    // public function resultBaum()
    // {
    //     return $this->hasMany(ResultPapiKostick::class);
    // }
}
