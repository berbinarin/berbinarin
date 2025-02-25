<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\DASS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DASSController extends Controller
{
    public function showLanding()
    {
        return view('moduls.psikotes-paid.tools.dass.landing');
    }

    public function showTest()
    {
        return view('moduls.psikotes-paid.tools.dass.test');
    }

    public function showSummary()
    {
        return view('moduls.psikotes-paid.tools.dass.summary');
    }
}
