<?php

namespace App\Models;

use App\Models\Test;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserPsikotest extends Model
{
    use HasFactory;

    protected $table = 'user_psikotests';
    protected $fillable = ['name', 'gender', 'date_of_birth', 'email', 'test_id'];

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id'); // Relasi ke tests
    }

    public function feedback()
    {
        return $this->hasOne(Feedback::class, 'user_id'); // Relasi ke feedback
    }
}
