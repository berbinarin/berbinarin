<?php

namespace App\Models\PsikotestPaid;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PsikotestTool extends Model
{
    use HasFactory;

    protected $table = 'psikotest_tools';

    protected $fillable = [
        'name',
        'token'
    ];

    // public function psikotestTypeTools()
    // {
    //     return $this->hasMany(PsikotestTypeTool::class);
    // }

    public static function generateToken($length = 32)
    {
        return Str::random($length);
    }

    public function psikotestPaidTests()
    {
        return $this->hasMany(PsikotestPaidTest::class);
    }
}
