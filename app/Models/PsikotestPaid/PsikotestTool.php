<?php

namespace App\Models\PsikotestPaid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function psikotestPaidTests()
    {
        return $this->hasMany(PsikotestPaidTest::class);
    }
}
