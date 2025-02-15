<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\SSCT;

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
  public function showLanding(){
    $user = Auth::guard('psikotestpaid')->user();
    $tool = PsikotestTool::where('name', 'SSCT')->firstOrFail();
    return view('moduls.psikotes-paid.tools.SSCT.landing', ['user' => $user, 'tool' => $tool]);
  }

  public function startTest(Request $request)
    {
        $userId = $request->user_id;
        $toolId = $request->tool_id;

        // Create a new entry in the psikotest_paid_tests table
        $paidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $userId,
            'psikotest_tool_id' => $toolId
        ]);

        // Create a new entry in the test_ssct table
        $test = TestSsct::create([
            'psikotest_paid_test_id' => $paidTest->id,
            'tool' => 'SSCT',
            'user_id' => $userId
        ]);

        // Redirect to the test page
        return redirect()->route('psikotest-paid.tool.SSCT.showTest', ['testId' => $test->id]);
    }

    public function showTest($testId)
    {
        $test = TestSsct::where('id', $testId)->firstOrFail();
        $questions = QuestionSsct::all();

        return view('moduls.psikotes-paid.tools.SSCT.test', ['test' => $test, 'questions' => $questions]);
    }

    public function submitAnswer(Request $request)
    {
        $validatedData = $request->validate([
            'test_id' => 'required|exists:test_ssct,id',
            'question_id' => 'required|exists:question_ssct,id',
            'answer' => 'nullable|string'
        ]);

        $testId = $validatedData['test_id'];
        $questionId = $validatedData['question_id'];
        $answer = $validatedData['answer']??NULL;
        $userId = Auth::guard('psikotestpaid')->id();

        AnswerSsct::create([
            'test_ssct_id' => $testId,
            'question_ssct_id' => $questionId,
            'answer' => $answer,
            'user_id' => $userId
        ]);

        $currentQuestionNumber = $request->input('current_question_number');
        $timeout = $request->input('timeout');
        if ($currentQuestionNumber < 60 && $timeout == "false") {
            return redirect()->route('psikotest-paid.tool.SSCT.showTest', ['testId' => $testId])
                ->with('current_question_number', $currentQuestionNumber + 1);
        } else {
            return redirect()->route('psikotest-paid.tool.SSCT.summary', ['testId' => $testId]);
        }
    }
    public function showSummary($testId)
    {
        return view('moduls.psikotes-paid.tools.SSCT.summary', ['testId' => $testId]);
    }
}
