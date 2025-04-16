<?php

namespace App\Models\PsikotestPaid;

use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\VAK\TestVak;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\PsikotestPaid\PapiKostick\TestPapiKostick;
use App\Models\PsikotestPaid\TesEsai\TestTesEsai;
use App\Models\PsikotestPaid\EPI\EpiAnswer;

class PsikotestPaidTest extends Model
{
    use HasFactory;

    protected $table = 'psikotest_paid_tests';

    protected $fillable = [
        'user_psikotest_paid_id',
        'psikotest_tool_id',
        'status_progress',
    ];

    public function userPsikotestPaid()
    {
        return $this->belongsTo(UserPsikotestPaid::class, 'user_psikotest_paid_id');
    }

    public function psikotestTool()
    {
        return $this->belongsTo(PsikotestTool::class);
    }

    public function testPapiKostick()
    {
        return $this->hasMany(TestPapiKostick::class);
    }

    public function testVak()
    {
        return $this->hasMany(TestVak::class);
    }

    public function epiAnswers()
    {
        return $this->hasMany(EpiAnswer::class, 'psikotest_paid_test_id');
    }

    public function testTesEsai()
    {
        return $this->hasMany(TestTesEsai::class, 'psikotest_paid_test_id');
    }
}
