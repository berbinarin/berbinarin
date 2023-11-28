<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('moduls.dashboard.index');
    }

    public function login()
    {
        return view('moduls.dashboard.login');
    }

    public function faqs()
    {
        return view('moduls.dashboard.faqs');
    }

    public function positions()
    {
        return view('moduls.dashboard.positions');
    }
}