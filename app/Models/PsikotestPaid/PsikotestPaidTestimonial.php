<?php

namespace App\Models\PsikotestPaid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsikotestPaidTestimonial extends Model
{
    use HasFactory;

    protected $table = 'psikotest_paid_testimonials';

    protected $fillable = [
        'sharing_testimonial',
        'sharing_experience',
        'opinion_psikotest',
        'criticism_suggestion',
    ];

    public function userPsikotestPaid()
    {
        return $this->belongsTo(UserPsikotestPaid::class);
    }
}
