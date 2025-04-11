<?php

namespace App\Models\PsikotestPaid;

use App\Models\PsikotestPaid\DASS\AnswerDass;
use Illuminate\Database\Eloquent\Model;
use App\Models\PsikotestPaid\VAK\TestVak;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\PsikotestPaid\PapiKostick\TestPapiKostick;

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

    public function answerDass()
    {
        return $this->hasMany(AnswerDass::class);
    }

    public function testVak()
    {
        return $this->hasMany(TestVak::class);
    }
}
