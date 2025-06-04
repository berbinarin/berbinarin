<?php

namespace App\Http\Controllers\Dashboard\PsikotestTestProductManagement\Psikotest\Psikotest\OCEAN;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Psikotest\Tools\ResultOceanController;
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
    $psikotestTool = PsikotestTool::where('name', 'OCEAN')->firstOrFail();
    return view('moduls.psikotes-paid.tools.OCEAN.landing', compact('user', 'psikotestTool'));
  }

  public function start()
  {
    $user = Auth::guard('psikotestpaid')->user();
    $psikotestTool = PsikotestTool::where('name', 'OCEAN')->firstOrFail();

    // Create a new entry in the psikotest_paid_tests table
    $paidTest = PsikotestPaidTest::create([
      'user_psikotest_paid_id' => $user->id,
      'psikotest_tool_id' => $psikotestTool->id
    ]);

    // Create a new entry in the test_tes_esai table
    $testOcean = TestOcean::create([
      'psikotest_paid_test_id' => $paidTest->id,
    ]);

    // Redirect to the test page
    return redirect()->route('psikotest-paid.tool.OCEAN.showQuestion', ['testOcean' => $testOcean->id, 'questionOcean' => 1]);
  }

  public function showQuestion(TestOcean $testOcean, QuestionOcean $questionOcean)
  {
    $existingAnswer = AnswerOcean::where('test_ocean_id', $testOcean->id)
    ->where('question_ocean_id', $questionOcean->id)->first();

    return view('moduls.psikotes-paid.tools.OCEAN.question', compact('testOcean', 'questionOcean', 'existingAnswer'));
  }

  public function submit(Request $request, TestOcean $testOcean, QuestionOcean $questionOcean)
  {
    $validatedData = $request->validate([
      'answer' => 'nullable|string'
    ]);

    $existingAnswer = AnswerOcean::where('test_ocean_id', $testOcean->id)
      ->where('question_ocean_id', $questionOcean->id)
      ->first();

    if ($existingAnswer) {
      $existingAnswer->update([
        'answer' => $request->answer,
      ]);
    } else {
      AnswerOcean::create([
        'test_ocean_id' => $testOcean->id,
        'question_ocean_id' => $questionOcean->id,
        'answer' => $validatedData['answer'],
      ]);
    }

    $timeout = $request->input('timeout');
    if ($questionOcean->id < 44 && $timeout == "false") {
      return redirect()->route('psikotest-paid.tool.OCEAN.showQuestion', ['testOcean' => $testOcean->id, 'questionOcean' => $questionOcean->id + 1]);
    } else {
      $ResultController = new ResultOceanController();
      $ResultController->calculateAndStoreResult(test_ocean_id: $testOcean->id);
      return redirect()->route('psikotest-paid.tool.OCEAN.summary', ['testOcean' => $testOcean]);
    }
  }
  public function showSummary(TestOcean $testOcean)
  {
    $psikotestPaidTest = PsikotestPaidTest::where('id', $testOcean->psikotestPaidTest->id)->first();
    $psikotestPaidTest->update(['status_progress' => true]);

    return view('moduls.psikotes-paid.tools.OCEAN.summary');
  }
}
