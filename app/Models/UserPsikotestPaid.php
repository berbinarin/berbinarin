<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPsikotestPaid extends Model
{
    use HasFactory;

    protected $table = 'user_psikotest_paids';
    protected $fillable = ['fullname', 'email', 'password', 'gender', 'age', 'domicile', 'phone_number', 'service', 'psikotest_type_id', 'reason', 'preference_schedule'];
}
