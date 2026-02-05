<?php

namespace App\Http\Controllers\Dashboard\SMC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SmcController extends Controller
{
    public function index()
    {
        return view('dashboard.smc.index');
    }

    public function create()
    {
        return view('dashboard.smc.create');
    }
}
