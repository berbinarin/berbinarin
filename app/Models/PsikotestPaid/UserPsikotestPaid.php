<?php

namespace App\Models\PsikotestPaid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPsikotestPaid extends Model
{
    use HasFactory;

    protected $table = 'user_psikotest_paid';

    protected $fillable = [
        'fullname',
        'email',
        'password',
        'gender',
        'age',
        'domicile',
        'phone_number',
        'service',
        'reason',
        'preference_schedule',
        'psikotest_type_tool_id',
    ];

    public function psikotestTypeTool()
    {
        return $this->belongsTo(PsikotestTypeTool::class);
    }

    public function psikotestPaidTestimonial()
    {
        return $this->hasMany(PsikotestPaidTestimonial::class);
    }

    public function psikotestPaidTest()
    {
        return $this->hasMany(PsikotestPaidTest::class);
    }
}
