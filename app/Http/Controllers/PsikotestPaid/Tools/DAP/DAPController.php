<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\DAP;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\DAP\AnswerDap;
use App\Models\PsikotestPaid\DAP\QuestionDap;
use App\Models\PsikotestPaid\DAP\TestDap;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DAPController extends Controller
{
  public function showLanding(){
    $user = Auth::guard('psikotestpaid')->user();
    $tool = PsikotestTool::where('name', 'DAP')->firstOrFail();
    return view('moduls.psikotes-paid.tools.DAP.landing', ['user' => $user, 'tool' => $tool]);
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

        $test = TestDap::create([
            'psikotest_paid_test_id' => $paidTest->id,
        ]);

        // Redirect to the test page
        return redirect()->route('psikotest-paid.tool.DAP.showTest', ['testId' => $test->id]);
    }

    public function showTest($testId)
    {
        $test = TestDap::where('id', $testId)->firstOrFail();
        $questions = QuestionDap::all();

        return view('moduls.psikotes-paid.tools.DAP.test', ['test' => $test, 'questions' => $questions]);
    }

    public function submitAnswer(Request $request)
    {
        $validatedData = $request->validate([
            'test_id' => 'required|exists:test_dap,id',
            'question_id' => 'required|exists:question_dap,id',
            'answer_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG|max:2048'
        ]);

        $testId = $validatedData['test_id'];
        $questionId = $validatedData['question_id'];
        $userId = Auth::guard('psikotestpaid')->id();

        if ($request->hasFile('answer_image')) {
            $image = $request->file('answer_image');
            $path = $image->store('res/DAP', 'public');

            AnswerDap::create([
                'test_dap_id' => $testId,
                'question_dap_id' => $questionId,
                'answer' => $path,
                'user_id' => $userId
            ]);
        }

        $currentQuestionNumber = $request->input('current_question_number');
        if ($currentQuestionNumber < 2) {
            return redirect()->route('psikotest-paid.tool.DAP.showTest', ['testId' => $testId])
                ->with('current_question_number', $currentQuestionNumber + 1);
        } else {
            return redirect()->route('psikotest-paid.tool.DAP.summary', ['testId' => $testId]);
        }
        
    }

    public function showSummary($testId)
    {
        return view('moduls.psikotes-paid.tools.DAP.summary', ['testId' => $testId]);
    }
}
