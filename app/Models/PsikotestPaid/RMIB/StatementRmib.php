<?php

namespace App\Models\PsikotestPaid\RMIB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StatementRmib extends Model
{
    use HasFactory;

    protected $table = 'statement_rmib';

    protected $fillable = [
        'question_rmib_id',
        'category_statement_rmib_id',
        'question_order',
        'male_statement',
        'female_statement',
    ];

    public function category():BelongsTo {
        return $this->belongsTo(CategoryStatementRmib::class, 'category_statement_rmib_id', 'id');
    }
}
