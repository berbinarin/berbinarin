<?php

namespace App\Models;

use App\Models\PsikotestType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserPsikotestPaid extends Model
{
    use HasFactory;

    protected $table = 'user_psikotest_paids';
    protected $fillable = ['fullname', 'email', 'password', 'gender', 'age', 'domicile', 'phone_number', 'service', 'psikotest_type_id', 'reason', 'preference_schedule'];

    public function psikotestType()
    {
        return $this->belongsTo(PsikotestType::class);
    }
}
