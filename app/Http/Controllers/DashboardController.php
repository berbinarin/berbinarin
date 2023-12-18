<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hiring_Positions;


class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['login']);
        $this->middleware('role:Admin,HR')->except(['login']);
    }
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
        $HiringPosisitons = Hiring_Positions::all();
        return view('moduls.dashboard.positions',['HiringPosisitons'=>$HiringPosisitons]);
    }

    public function requirements()
    {
        return view('moduls.dashboard.requirements');
    }
}