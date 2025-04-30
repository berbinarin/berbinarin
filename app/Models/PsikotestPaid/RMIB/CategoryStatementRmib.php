<?php

namespace App\Models\PsikotestPaid\RMIB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryStatementRmib extends Model
{
    use HasFactory;

    protected $table = 'category_statement_rmib';

    protected $fillable = [
        'name',
        'description'
    ];
}
