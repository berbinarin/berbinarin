<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\OCEAN;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\OCEAN\AnswerOcean;
use App\Models\PsikotestPaid\OCEAN\QuestionOcean;
use App\Models\PsikotestPaid\OCEAN\TestOcean;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OCEANController extends Controller
{
  public function showLanding()
  {
    $user = Auth::guard('psikotestpaid')->user();
    $tool = PsikotestTool::where('name', 'OCEAN')->firstOrFail();
    return view('moduls.psikotes-paid.tools.OCEAN.landing', ['user' => $user, 'tool' => $tool]);
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

    // Create a new entry in the test_tes_esai table
    $test = TestOcean::create([
      'psikotest_paid_test_id' => $paidTest->id,
      'tool' => 'Tes Esai',
      'user_id' => $userId
    ]);

    // Redirect to the test page
    return redirect()->route('psikotest-paid.tool.OCEAN.showTest', ['testId' => $test->id]);
  }

  public function showTest($testId)
  {
    $test = TestOcean::where('id', $testId)->firstOrFail();
    $questions = QuestionOcean::all();

    return view('moduls.psikotes-paid.tools.OCEAN.test', ['test' => $test, 'questions' => $questions]);
  }

  public function submitAnswer(Request $request)
  {
    $validatedData = $request->validate([
      'test_id' => 'required|exists:test_ocean,id',
      'question_id' => 'required|exists:question_ocean,id',
      'answer' => 'nullable|string'
    ]);

    $testId = $validatedData['test_id'];
    $questionId = $validatedData['question_id'];
    $answer = $validatedData['answer']??NULL;
    $userId = Auth::guard('psikotestpaid')->id();

    AnswerOcean::create([
      'test_ocean_id' => $testId,
      'question_ocean_id' => $questionId,
      'answer' => $answer,
      'user_id' => $userId
    ]);

    $currentQuestionNumber = $request->input('current_question_number');
    $timeout = $request->input('timeout');
    if ($currentQuestionNumber < 44 && $timeout == "false") {
      return redirect()->route('psikotest-paid.tool.OCEAN.showTest', ['testId' => $testId])
        ->with('current_question_number', $currentQuestionNumber + 1);
    } else {
      $ResultController = new ResultOceanController();
      $ResultController->calculateAndStoreResult($testId);
      return redirect()->route('psikotest-paid.tool.OCEAN.summary', ['testId' => $testId]);
    }
  }
  public function showSummary($testId)
  {
    return view('moduls.psikotes-paid.tools.OCEAN.summary', ['testId' => $testId]);
  }
}
