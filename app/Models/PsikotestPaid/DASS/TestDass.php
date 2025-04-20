<?php

namespace App\Models\PsikotestPaid\DASS;

use App\Models\PsikotestPaid\PsikotestPaidTest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestDass extends Model
{
    use HasFactory;

    protected $table = 'test_dass';

    protected $fillable = [
        'psikotest_paid_test_id'
    ];

    public function psikotestPaidTest() {
        return $this->belongsTo(PsikotestPaidTest::class);
    }
}
