<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\HTP;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\HTP\AnswerHtp;
use App\Models\PsikotestPaid\HTP\QuestionHtp;
use App\Models\PsikotestPaid\HTP\TestHtp;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HTPController extends Controller
{
  public function showLanding(){
    $user = Auth::guard('psikotestpaid')->user();
    $tool = PsikotestTool::where('name', 'HTP')->firstOrFail();
    return view('moduls.psikotes-paid.tools.HTP.landing', ['user' => $user, 'tool' => $tool]);
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

        // Create a new entry in the test_baum table
        $test = TestHtp::create([
            'psikotest_paid_test_id' => $paidTest->id,
            'tool' => 'Tes Htp',
            'user_id' => $userId
        ]);

        // Redirect to the test page
        return redirect()->route('psikotest-paid.tool.HTP.instruksi_b', ['testId' => $test->id]);
    }

  public function instruksi_b($testId)
  {
    $test = TestHtp::where('id', $testId)->firstOrFail();
    $questions = QuestionHtp::all();
    return view('moduls.psikotes-paid.tools.htp.instruksi-b',['test' => $test, 'questions' => $questions]);
  }

  public function instruksi_c($testId)
  {
    $test = TestHtp::where('id', $testId)->firstOrFail();
    return view('moduls.psikotes-paid.tools.htp.instruksi-c',['test' => $test]);
  }

  public function instruksi_d($testId)
  {
    $test = TestHtp::where('id', $testId)->firstOrFail();
    $questions = QuestionHtp::all();
    return view('moduls.psikotes-paid.tools.htp.instruksi-d',['test' => $test, 'questions' => $questions]);
  }
  public function submitAnswer(Request $request)
    {
        $validatedData = $request->validate([
            'test_id' => 'required|exists:test_htp,id',
            'question_id' => 'required|exists:question_htp,id',
            'answer_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG|max:2048'
        ]);

        $testId = $validatedData['test_id'];
        $questionId = $validatedData['question_id'];
        $userId = Auth::guard('psikotestpaid')->id();

        if ($request->hasFile('answer_image')) {
            $image = $request->file('answer_image');
            $path = $image->store('res/HTP', 'public');

            AnswerHtp::create([
                'test_htp_id' => $testId,
                'question_htp_id' => $questionId,
                'answer' => $path,
                'user_id' => $userId
            ]);
        }

        return redirect()->route('psikotest-paid.tool.HTP.summary', ['testId' => $testId]);
    }

  public function summary()
  {
    return view('moduls.psikotes-paid.tools.htp.summary');
  }
}
