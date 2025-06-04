<?php

namespace App\Http\Controllers\Dashboard\PsikotestTestProductManagement\Psikotest\Tools;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\BAUM\AnswerBaum;
use App\Models\PsikotestPaid\BAUM\TestBaum;

class ResultBaumController extends Controller
{
    public function showResult($psikotestPaidTestId)
    {
        // Find the relevant test_baum_id from the test_baum table where the psikotest_paid_test id matches
        $testBaum = TestBaum::where('psikotest_paid_test_id', $psikotestPaidTestId)->first();

        if ($testBaum) {
            $testBaumId = $testBaum->id;

            // Fetch all answers for the given test_baum_id
            $answers = AnswerBaum::where('test_baum_id', $testBaumId)
                ->with('questionBaum') // Ensure you load the related question
                ->get();

            // Pass answers to the view
            return view('moduls.psikotes-paid.admin.tools.baum-result', ['answers' => $answers]);
        } else {
            // Handle the case where the test_baum is not found
            return redirect()->back()->with('error', 'Test not found');
        }
    }
}
