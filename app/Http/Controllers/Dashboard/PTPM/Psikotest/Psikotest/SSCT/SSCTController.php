<?php

namespace App\Http\Controllers\Dashboard\PTPM\Psikotest\Psikotest\SSCT;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\SSCT\AnswerSsct;
use App\Models\PsikotestPaid\SSCT\QuestionSsct;
use App\Models\PsikotestPaid\SSCT\TestSsct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SSCTController extends Controller
{
    public function showLanding()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $psikotestTool = PsikotestTool::where('name', 'SSCT')->firstOrFail();
        return view('moduls.psikotes-paid.tools.SSCT.landing', compact('user', 'psikotestTool'));
    }

    public function start()
    {

        $user = Auth::guard('psikotestpaid')->user();
        $psikotestTool = PsikotestTool::where('name', 'SSCT')->firstOrFail();

        $paidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $user->id,
            'psikotest_tool_id' => $psikotestTool->id
        ]);

        $testSsct = TestSsct::create([
            'psikotest_paid_test_id' => $paidTest->id,
        ]);

        // Redirect to the test page
        return redirect()->route('psikotest-paid.tool.SSCT.showQuestion', ['testSsct' => $testSsct->id, 'questionSsct' => 1]);
    }

    public function showQuestion(TestSsct $testSsct, QuestionSsct $questionSsct)
    {
        $existingAnswer = AnswerSsct::where('test_ssct_id', $testSsct->id)
            ->where('question_ssct_id', $questionSsct->id)
            ->first();

        return view('moduls.psikotes-paid.tools.SSCT.question', compact('testSsct', 'questionSsct', 'existingAnswer'));
    }

    public function submit(Request $request, TestSsct $testSsct, QuestionSsct $questionSsct)
    {
        $validatedData = $request->validate([
            'answer' => 'nullable|string'
        ]);

        $answer = $validatedData['answer'];

        $existingAnswer = AnswerSsct::where('test_ssct_id', $testSsct->id)
            ->where('question_ssct_id', $questionSsct->id)
            ->first();

        if ($existingAnswer) {
            $existingAnswer->update([
                'answer' => $answer
            ]);
        } else {
            AnswerSsct::create([
                'test_ssct_id' => $testSsct->id,
                'question_ssct_id' => $questionSsct->id,
                'answer' => $answer
            ]);
        }

        $timeout = $request->input('timeout');

        if ($questionSsct->id < 60 && $timeout == "false") {
            return redirect()->route('psikotest-paid.tool.SSCT.showQuestion', ['testSsct' => $testSsct->id, 'questionSsct' => $questionSsct->id + 1]);
        } else {
            return redirect()->route('psikotest-paid.tool.SSCT.summary', ['testSsct' => $testSsct->id]);
        }
    }
    public function summary(TestSsct $testSsct)
    {
        $psikotestPaidTest = PsikotestPaidTest::where('id', $testSsct->psikotestPaidTest->id);
        $psikotestPaidTest->update([
            'status_progress' => true
        ]);

        return view('moduls.psikotes-paid.tools.SSCT.summary');
    }
}
