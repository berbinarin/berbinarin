<?php

namespace App\Models\PsikotestPaid\HTP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use Illuminate\Database\Eloquent\Model;

class TestHtp extends Model
{
    use HasFactory;

    protected $table = 'test_htp';

    protected $fillable = [
        'psikotest_paid_test_id',
    ];

    public function psikotestPaidTest()
    {
        return $this->belongsTo(PsikotestPaidTest::class);
    }

    public function answerHtp()
    {
        return $this->hasMany(AnswerHtp::class);
    }
}
