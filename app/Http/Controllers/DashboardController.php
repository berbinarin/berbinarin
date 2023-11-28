<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['index']]);
        $this->middleware('role:Admin,HR', ['only' => ['index']]);
    }
    public function index()
    {
        return view('moduls.dashboard.index');
    }

    public function login()
    {
        return view('moduls.dashboard.login');
    }
}