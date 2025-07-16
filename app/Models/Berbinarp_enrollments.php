<?php

namespace App\Models;

use App\Models\Berbinarp_user;
use App\Models\Berbinarp_class;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berbinarp_enrollments extends Model
{
    use HasFactory;
    protected $table = 'berbinarp_enrollments';
    protected $fillable = [
        'user_id',
        'class_id',
        'transfer_evidance',
        'class_progress',
        'service_package',
        'enrollment_date',
        'expired_date',
        'completed_date',
    ];
    public function user()
    {
        return $this->belongsTo(Berbinarp_user::class, 'user_id');
    }
    public function class()
    {
        return $this->belongsTo(Berbinarp_class::class, 'class_id');
    }
}
