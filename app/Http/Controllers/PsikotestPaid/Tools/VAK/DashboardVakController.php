<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\VAK;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\VAK\ResultVak;
use App\Models\PsikotestPaid\VAK\TestVak;

class DashboardVakController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['login']);
    //     $this->middleware('role:Admin,HR,Konselling,PsikotestFree', 'PsikotestPaid')->except(['login']);
    // }

    public function countUserTest()
    {
        $respondens = PsikotestPaidTest::where('psikotest_tool_id', 13)
            ->count();

        return view('moduls.dashboard.psikotes-paid.tools.vak.data', compact('respondens'));
    }

    public function allResponden()
    {
        $respondens = PsikotestPaidTest::with('userPsikotestPaid')
            ->where('psikotest_tool_id', 13)
            ->get();

        // dd($respondens);
        return view('moduls.dashboard.psikotes-paid.tools.vak.responden', compact('respondens'));
    }

    public function detailAnswer($id)
    {
        // menampilkan result berdasarkan id responden
        $responden = PsikotestPaidTest::with('userPsikotestPaid')->findOrFail($id);
        $testVak = TestVak::where('psikotest_paid_test_id', $responden->id)->first();

        $result = $testVak ? ResultVak::where('test_vak_id', $testVak->id)->first() : null;
        // $descriptions = $result ? $this->getAllDescription($result) : [];

        return view('moduls.dashboard.psikotes-paid.tools.vak.detail', compact('responden', 'answers', 'result'));
    }

    private function getAllDescription($result)
    {
        $descriptions = [];
        $descriptions['visual'] = $this->getDescription($result->visual);
        $descriptions['auditory'] = $this->getDescription($result->auditory);
        $descriptions['kinesthetic'] = $this->getDescription($result->kinesthetic);

        return $descriptions;
    }

    private function getDescription($result)
    {
        $description = '';
        if ($result == 1) {
            $description = 'Tidak Sesuai';
        } elseif ($result == 2) {
            $description = 'Cukup Sesuai';
        } elseif ($result == 3) {
            $description = 'Sangat Sesuai';
        } else {
            $description = 'Jawaban Tidak Ada';
        }

        return $description;
    }
}
