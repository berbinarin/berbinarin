<?php

namespace App\Http\Controllers\Dashboard\PsikotestTestProductManagement\Psikotest\Tools;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\TesEsai\AnswerTesEsai;
use App\Models\PsikotestPaid\TesEsai\TestTesEsai;

class ResultTesEsaiController extends Controller
{
    public function showResult($psikotestPaidTestId)
    {
        // Find the relevant test_tes_esai_id from the test_tes_esai table where the psikotest_paid_test id matches
        $testTesEsai = TestTesEsai::where('psikotest_paid_test_id', $psikotestPaidTestId)->first();

        if ($testTesEsai) {
            $testTesEsaiId = $testTesEsai->id;

            // Fetch all answers for the given test_tes_esai_id
            $answers = AnswerTesEsai::where('test_tes_esai_id', $testTesEsaiId)
                ->with('questionTesEsai') // Ensure you load the related question
                ->get();

            // Pass answers to the view
            return view('moduls.psikotes-paid.admin.tools.tes-esai-result', ['answers' => $answers]);
        } else {
            // Handle the case where the test_tes_esai is not found
            return redirect()->back()->with([
            'alert'   => true,
            'type'    => 'error',
            'title'   => 'Gagal!',
            'message' => 'Tes esai tidak ditemukan.',
            'icon'    => asset('assets/images/dashboard/error.png'),
        ]);
        }
    }
}
