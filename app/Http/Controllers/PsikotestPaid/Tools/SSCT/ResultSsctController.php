<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\SSCT;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\SSCT\AnswerSsct;
use App\Models\PsikotestPaid\SSCT\TestSsct;
use App\Models\PsikotestPaid\TesEsai\TestTesEsai;
use App\Models\PsikotestPaid\TesEsai\QuestionTesEsai;
use App\Models\PsikotestPaid\TesEsai\AnswerTesEsai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->back()->with('error', 'Test not found');
        }
    }
}
