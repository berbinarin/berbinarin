<?php

namespace App\Models\PsikotestPaid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPsikotestType extends Model
{
    use HasFactory;

    protected $table = 'category_psikotest_types';

    protected $fillable = [
        'name'
    ];

    public function psikotestTypes()
    {
        return $this->hasMany(PsikotestType::class);
    }
}
