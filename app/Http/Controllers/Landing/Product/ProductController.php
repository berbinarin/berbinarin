<?php

namespace App\Http\Controllers\Landing\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('landing.product.index');
    }
}
