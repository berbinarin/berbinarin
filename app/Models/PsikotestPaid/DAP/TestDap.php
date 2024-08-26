<?php

namespace App\Models\PsikotestPaid\DAP;

use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestDap extends Model
{
    use HasFactory;

    protected $table = 'test_dap';

    protected $fillable = [
        'psikotest_paid_test_id',
    ];

    public function psikotestPaidTest()
    {
        return $this->belongsTo(PsikotestPaidTest::class);
    }

    public function answerDap()
    {
        return $this->hasMany(AnswerDap::class);
    }

    // public function resultDap()
    // {
    //     return $this->hasMany(ResultPapiKostick::class);
    // }
}
