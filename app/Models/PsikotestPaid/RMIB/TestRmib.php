<?php

namespace App\Models\PsikotestPaid\RMIB;

use App\Models\PsikotestPaid\PsikotestPaidTest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestRmib extends Model
{
    use HasFactory;

    protected $table = 'test_rmib';

    protected $fillable = [
        'psikotest_paid_test_id'
    ];

    public function psikotestPaidTest()
    {
        return $this->belongsTo(PsikotestPaidTest::class, 'psikotest_paid_test_id', 'id');
    }

    public function answerRmib()
    {
        return $this->hasMany(AnswerRmib::class);
    }
}
