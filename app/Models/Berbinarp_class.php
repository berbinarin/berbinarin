<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berbinarp_class extends Model
{
    protected $table = 'berbinarp_class';
    protected $fillable = ['title', 'description', 'price', 'thumbnail'];
}
