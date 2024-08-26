<?php

namespace App\Models\PsikotestPaid\OCEAN;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DimensionOcean extends Model
{
  use HasFactory;

  protected $table = 'dimension_ocean';
  protected $fillable = ['name'];

  public function questionsOcean()
  {
      return $this->hasMany(QuestionOcean::class, 'dimension_ocean_id'); // Relasi dengan questions
  }
}
