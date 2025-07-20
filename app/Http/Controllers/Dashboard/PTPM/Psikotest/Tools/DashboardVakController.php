<?php

namespace App\Http\Controllers\Dashboard\PsikotestTestProductManagement\Psikotest\Tools;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\VAK\AnswerVak;
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

        return view('moduls.dashboard.psikotes-paid.tools.vak.responden', compact('respondens'));
    }

    public function detailAnswer($id)
    {
        $responden = PsikotestPaidTest::with('userPsikotestPaid')->findOrFail($id);
        $testVak = TestVak::where('psikotest_paid_test_id', $responden->id)->first();
        $result = $testVak ? ResultVak::where('test_vak_id', $testVak->id)->first() : null;

        $visual = $result->visual;
        $auditory = $result->auditori;
        $kinestetik = $result->kinestetik;

        if ($visual >= $auditory) {
            $terpilih = 'visual';
        } else {
            $terpilih = 'auditory';
        }

        if ($terpilih === 'visual' && $visual >= $kinestetik) {
            $description = 'Kecenderungan siswa untuk menerima informasi dalam belajar dengan menggunakan indera penglihatan. Gaya belajar ini mengakses citra visual seperti warna, gambar dan video.';
        } elseif ($terpilih === 'auditory' && $auditory >= $kinestetik) {
            $description = 'Kecenderungan siswa untuk menerima informasi dalam belajar dengan melibatkan indera pendengaran.';
        } else {
            $description = 'Kecenderungan siswa untuk menerima informasi dalam belajar dengan melibatkan gerakan /psikomotorik';
        }


        if ($testVak) {
            $categoryIds = [1, 2, 3];

            $answers = [];

            foreach ($categoryIds as $categoryId) {
                $answers[$categoryId] = AnswerVak::whereHas('questionVak', function ($query) use ($categoryId) {
                    $query->where('category_question_vak_id', $categoryId);
                })->with('questionVak')
                    ->where('test_vak_id', $testVak->id)
                    ->get()
                    ->map(function ($answer) {
                        $answer->answer = $this->formatAnswer($answer->answer);
                        return $answer;
                    });
            }
        } else {
            $answers = [
                1 => [],
                2 => [],
                3 => [],
            ];
        }

        return view('moduls.dashboard.psikotes-paid.tools.vak.detail-answer', compact('responden', 'result', 'description', 'answers'));
    }

    private function formatAnswer($answer)
    {
        switch ($answer) {
            case 1:
                return 'Kurang Sesuai';
            case 2:
                return 'Cukup Sesuai';
            case 3:
                return 'Sangat Sesuai';
            default:
                return 'Tidak Valid';
        }
    }
}
