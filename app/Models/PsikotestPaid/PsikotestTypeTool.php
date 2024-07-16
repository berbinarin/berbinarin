<?php

namespace App\Models\PsikotestPaid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsikotestTypeTool extends Model
{
    use HasFactory;

    protected $table = 'psikotest_type_tools';

    protected $fillable = [
        'psikotest_type_id',
        'psikotest_tool_id'
    ];

    public function psikotestType()
    {
        return $this->belongsTo(PsikotestType::class);
    }

    public function psikotestTool()
    {
        return $this->belongsTo(PsikotestTool::class);
    }

    public function userPsikotestPaids()
    {
        return $this->hasMany(UserPsikotestPaid::class);
    }
}
