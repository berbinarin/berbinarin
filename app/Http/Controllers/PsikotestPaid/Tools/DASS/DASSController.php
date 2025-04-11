<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\DASS;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\DASS\AnswerDass;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\DASS\QuestionDass;
use App\Models\PsikotestPaid\DASS\TestDass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DassController extends Controller
{
    public function showLanding()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'Dass-42')->firstOrFail();
        return view('moduls.psikotes-paid.tools.DASS.landing', ['user' => $user, 'tool' => $tool]);
    }

    public function startTest()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'Dass-42')->firstOrFail();

        $psikotestPaidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $user->id,
            'psikotest_tool_id' => $tool->id,
            'status_progress' => false,
        ]);

        $testDass = TestDass::create([
            'psikotest_paid_test_id' => $psikotestPaidTest->id,
        ]);

        return redirect()->route('psikotest-paid.tool.Dass-42.showTest', ['testDass' => $testDass->id])
            ->with('current_question_number', 1);
    }

    public function showTest(Request $request, TestDass $testDass)
    {

        $questions = QuestionDass::all();

        $progress = round(session('current_question_number') / $questions->count() * 100);

        return view('moduls.psikotes-paid.tools.DASS.question', ['test' => $testDass, 'questions' => $questions, 'progress' => $progress]);
    }

    public function submitAnswer(Request $request)
    {

        $validateData = $request->validate([
            'answer' => 'string'
        ]);

        $existingAnswer = AnswerDass::where('psikotest_paid_test_id', $psikotest_paid_test_id)
            ->where('question_dass_id', $question_dass->id)
            ->first();

        if ($existingAnswer) {
            $existingAnswer->update([
                'answer' => $validateData['answer']
            ]);
        } else {
            AnswerDass::create([
                'psikotest_paid_test_id' => $psikotest_paid_test_id,
                'question_dass_id' => $question_dass->id,
                'answer' => $validateData['answer'],
            ]);
        }

        if ($question_dass->question_order == QuestionDass::count()) {
            return redirect()->route('psikotest-paid.tool.Dass-42.showSummary');
        } else {
            return redirect()->route('psikotest-paid.tool.Dass-42.showTest', ['psikotest_paid_test_id' => $psikotest_paid_test_id, 'question_dass' => $question_dass->question_order + 1]);
        }
    }

    public function showSummary()
    {
        return view('moduls.psikotes-paid.tools.DASS.summary');
    }
}
