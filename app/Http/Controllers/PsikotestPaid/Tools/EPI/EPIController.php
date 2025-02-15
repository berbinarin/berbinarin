<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\EPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EPIController extends Controller
{
    public function showLanding()
    {
        return view('moduls.psikotes-paid.tools.epi.landing');
    }

    public function test()
    {
        return view('moduls.psikotes-paid.tools.epi.test');
    }

    public function summary()
    {
        return view('moduls.psikotes-paid.tools.epi.summary');
    }
}
