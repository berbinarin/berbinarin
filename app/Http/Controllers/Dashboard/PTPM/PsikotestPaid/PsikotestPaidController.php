<?php

namespace App\Http\Controllers\Dashboard\PsikotestPaid;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PsikotestPaidController extends Controller
{
    //PSIKOTEST PAID
    public function psikotesPaidData()
    {
        return view('moduls.dashboard.psikotes-paid.data');
    }

    public function psikotesPaidDataTest()
    {
        return view('moduls.dashboard.psikotes-paid.data-test');
    }

    public function psikotesPaidDataShow()
    {
        return view('moduls.dashboard.psikotes-paid.data-detail');
    }

    public function psikotesPaidPrice()
    {
        return view('moduls.dashboard.psikotes-paid.price-list');
    }

    public function psikotesPaidTestimoni()
    {
        return view('moduls.dashboard.psikotes-paid.testi');
    }

    public function psikotesPaidTestimoniShow()
    {
        return view('moduls.dashboard.psikotes-paid.testi-detail');
    }
}
