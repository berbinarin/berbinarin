<?php

namespace App\Http\Controllers\Dashboard\PsikotestTestProductManagement\Psikotest\Tools;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\DAP\AnswerDap;
use App\Models\PsikotestPaid\DAP\TestDap;

class ResultDapController extends Controller
{
    public function showResult($psikotestPaidTestId)
    {
        // Find the relevant test_baum_id from the test_baum table where the psikotest_paid_test id matches
        $testDap = TestDap::where('psikotest_paid_test_id', $psikotestPaidTestId)->first();

        if ($testDap) {
            $testDapId = $testDap->id;

            // Fetch all answers for the given test_baum_id
            $answers = AnswerDap::where('test_dap_id', $testDapId)
                ->with('questionDap') // Ensure you load the related question
                ->get();

            // Pass answers to the view
            return view('moduls.psikotes-paid.admin.tools.dap-result', ['answers' => $answers]);
        } else {
            // Handle the case where the test_baum is not found
            return redirect()->back()->with('error', 'Test not found');
        }
    }
}
