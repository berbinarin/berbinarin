<?php

namespace App\Models\PsikotestPaid;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\PsikotestPaid\PapiKostick\TestPapiKostick;

class PsikotestPaidTest extends Model
{
    use HasFactory;

    protected $table = 'psikotest_paid_tests';

    protected $fillable = [
        'user_psikotest_paid_id',
        'psikotest_tool_id',
    ];

    public function userPsikotestPaid()
    {
        return $this->belongsTo(UserPsikotestPaid::class);
    }

    public function psikotestTool()
    {
        return $this->belongsTo(PsikotestTool::class);
    }

    public function testPapiKostick()
    {
        return $this->hasMany(TestPapiKostick::class);
    }
}
