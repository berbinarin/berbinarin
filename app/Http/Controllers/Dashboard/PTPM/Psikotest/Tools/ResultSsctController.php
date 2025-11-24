<?php

namespace App\Http\Controllers\Dashboard\PsikotestTestProductManagement\Psikotest\Tools;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\SSCT\AnswerSsct;
use App\Models\PsikotestPaid\SSCT\TestSsct;

class ResultSsctController extends Controller
{
    public function showResult($psikotestPaidTestId)
    {
        // Find the relevant test_tes_esai_id from the test_tes_esai table where the psikotest_paid_test id matches
        $testTesEsai = TestSsct::where('psikotest_paid_test_id', $psikotestPaidTestId)->first();

        if ($testTesEsai) {
            $testTesEsaiId = $testTesEsai->id;

            // Fetch all answers for the given test_tes_esai_id
            $answers = AnswerSsct::where('test_ssct_id', $testTesEsaiId)
                ->with('questionSsct') // Ensure you load the related question
                ->get();

            // Pass answers to the view
            return view('moduls.psikotes-paid.admin.tools.ssct-result', ['answers' => $answers]);
        } else {
            // Handle the case where the test_tes_esai is not found
            return redirect()->back()->with([
            'alert'   => true,
            'type'    => 'error',
            'title'   => 'Gagal!',
            'message' => 'Tes SSCT tidak ditemukan.',
            'icon'    => asset('assets/images/dashboard/error.webp'),
        ]);
        }
    }
}
