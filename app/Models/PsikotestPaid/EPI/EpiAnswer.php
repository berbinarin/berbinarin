<?php

namespace App\Models\PsikotestPaid\EPI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\UserPsikotestPaid;
use App\Models\PsikotestPaid\PsikotestPaidTest;

class EpiAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['psikotest_paid_test_id', 'question_id', 'answer', 'points', 'conclusion'];

    public function question()
    {
        return $this->belongsTo(EpiQuestion::class, 'question_id');
    }

    public function psikotestPaidTest()
    {
        return $this->belongsTo(PsikotestPaidTest::class, 'psikotest_paid_test_id');
    }

}
