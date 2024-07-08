<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestTool extends Model
{
    use HasFactory;

    protected $table = 'test_tools';
    protected $fillable = ['name'];
}
