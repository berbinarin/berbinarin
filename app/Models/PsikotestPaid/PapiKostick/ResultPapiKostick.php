<?php

namespace App\Models\PsikotestPaid\PapiKostick;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultPapiKostick extends Model
{
    use HasFactory;

    protected $table = 'result_papi_kosticks';

    protected $fillable = [
        'test_papi_kostick_id', 'A', 'N', 'G', 'C', 'D', 'R', 'T', 'V', 'W', 'F', 'L', 'P', 'I', 'S', 'B', 'O', 'X', 'E', 'K', 'Z',
    ];

    public function testPapiKostick()
    {
        return $this->belongsTo(TestPapiKostick::class);
    }
}
