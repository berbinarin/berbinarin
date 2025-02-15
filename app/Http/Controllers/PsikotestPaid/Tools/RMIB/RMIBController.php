<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\RMIB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RMIBController extends Controller
{
    public function showLanding() 
    {
        return view('moduls.psikotes-paid.tools.rmib.landing');
    }

    public function test()
    {
        return view('moduls.psikotes-paid.tools.rmib.test');
    }

    public function summary()
    {
        return view('moduls.psikotes-paid.tools.rmib.summary');
    }
}
