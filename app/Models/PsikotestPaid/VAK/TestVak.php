<?php

namespace App\Models\PsikotestPaid\VAK;

use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestVak extends Model
{
    use HasFactory;

    protected $table = 'test_vaks';

    protected $fillable = [
        'psikotest_paid_test_id',
    ];

    public function psikotestPaidTest()
    {
        return $this->belongsTo(PsikotestPaidTest::class);
    }

    public function resultVak()
    {
        return $this->hasOne(ResultVak::class);
    }

    public function answerVak()
    {
        return $this->hasMany(AnswerVak::class);
    }
}
