<?php

namespace App\Models\PsikotestPaid\OCEAN;

use App\Models\Test;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResultOcean extends Model
{
    use HasFactory;

    protected $table = 'result_ocean';
    protected $fillable = ['test_ocean_id', 'agreeableness', 'conscientiousness', 'extraversion', 'neuroticism', 'openness'];

    public function testOcean()
    {
        return $this->belongsTo(TestOcean::class, 'test_ocean_id'); // Relasi ke tests
    }
}
