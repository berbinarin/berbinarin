<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\TesEsai;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\TesEsai\TestTesEsai;
use App\Models\PsikotestPaid\TesEsai\QuestionTesEsai;
use App\Models\PsikotestPaid\TesEsai\AnswerTesEsai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TesEsaiController extends Controller
{
    public function showLanding()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'Tes Esai')->firstOrFail();
        return view('moduls.psikotes-paid.tools.tes-esai.landing', ['user' => $user, 'tool' => $tool]);
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
        $test = TestTesEsai::create([
            'psikotest_paid_test_id' => $paidTest->id,
            'tool' => 'Tes Esai',
            'user_id' => $userId
        ]);

        // Redirect to the test page
        return redirect()->route('psikotest-paid.tool.Tes Esai.showTest', ['testId' => $test->id]);
    }

    public function showTest($testId)
    {
        $test = TestTesEsai::where('id', $testId)->firstOrFail();
        $questions = QuestionTesEsai::all();

        return view('moduls.psikotes-paid.tools.tes-esai.test', ['test' => $test, 'questions' => $questions]);
    }

    public function submitAnswer(Request $request)
    {
        $validatedData = $request->validate([
            'test_id' => 'required|exists:test_tes_esai,id',
            'question_id' => 'required|exists:question_tes_esai,id',
            'answer' => 'nullable|string'
        ]);

        $testId = $validatedData['test_id'];
        $questionId = $validatedData['question_id'];
        $answer = $validatedData['answer']??NULL;
        $userId = Auth::guard('psikotestpaid')->id();

        AnswerTesEsai::create([
            'test_tes_esai_id' => $testId,
            'question_tes_esai_id' => $questionId,
            'answer' => $answer,
            'user_id' => $userId
        ]);

        $currentQuestionNumber = $request->input('current_question_number');
        $timeout = $request->input('timeout');
        if ($currentQuestionNumber < 6 && $timeout != "2") {
            return redirect()->route('psikotest-paid.tool.Tes Esai.showTest', ['testId' => $testId])
                ->with('current_question_number', $currentQuestionNumber + 1);
        } else {
            return redirect()->route('psikotest-paid.tool.Tes Esai.summary', ['testId' => $testId]);
        }
    }
    public function showSummary($testId)
    {
        return view('moduls.psikotes-paid.tools.tes-esai.summary', ['testId' => $testId]);
    }
}
