<?php

namespace App\Models\PsikotestPaid\PapiKostick;

use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestPapiKostick extends Model
{
    use HasFactory;

    protected $table = 'test_papi_kosticks';

    protected $fillable = [
        'psikotest_paid_test_id',
    ];

    public function psikotestPaidTest()
    {
        return $this->belongsTo(PsikotestPaidTest::class);
    }

    public function answerPapiKostick()
    {
        return $this->hasMany(AnswerPapiKostick::class);
    }

    public function resultPapiKostick()
    {
        return $this->hasMany(ResultPapiKostick::class);
    }
}
