<?php

namespace App\Models\PsikotestPaid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsikotestType extends Model
{
    use HasFactory;

    protected $table = 'psikotest_types';

    protected $fillable = [
        'name',
        'description',
        'price',
        'category_psikotest_type_id'
    ];

    public function categoryPsikotestType()
    {
        return $this->belongsTo(CategoryPsikotestType::class);
    }

    public function userPsikotestPaid()
    {
        return $this->hasMany(UserPsikotestPaid::class);
    }
}
