<?php

namespace App\Http\Controllers\Berbinarplus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerbinarPlusDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('berbinar-plus.dashboard', ['user' => $user]);
    }
}
