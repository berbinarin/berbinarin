<?php

namespace App\Http\Controllers\Landing\Product\MoodScanTees;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoodScanTeesController extends Controller
{
    public function index()
    {
        return view('landing.product.moodscan-tees.index');
    }
}
