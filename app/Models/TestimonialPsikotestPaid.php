<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialPsikotestPaid extends Model
{
    use HasFactory;

    protected $table = 'testimonial_psikotest_paids';
    protected $fillable = ['user_id', 'sharing_testimonial', 'experience_story', 'opinion_psikotest', 'criticism_suggestion'];
}
