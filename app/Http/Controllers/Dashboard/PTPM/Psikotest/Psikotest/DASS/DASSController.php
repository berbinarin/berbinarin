<?php

namespace App\Http\Controllers\Dashboard\PsikotestTestProductManagement\Psikotest\Psikotest\DASS;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\DASS\AnswerDass;
use App\Models\PsikotestPaid\DASS\QuestionDass;
use App\Models\PsikotestPaid\DASS\TestDass;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DassController extends Controller
{
    public function showLanding()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $psikotestTool = PsikotestTool::where('name', 'Dass-42')->firstOrFail();
        return view('moduls.psikotes-paid.tools.DASS.landing', compact('user', 'psikotestTool'));
    }

    public function start()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $psikotestTool = PsikotestTool::where('name', 'Dass-42')->firstOrFail();

        $psikotestPaidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $user->id,
            'psikotest_tool_id' => $psikotestTool->id,
            'status_progress' => false,
        ]);

        $testDass = TestDass::create([
            'psikotest_paid_test_id' => $psikotestPaidTest->id,
        ]);

        return redirect()->route('psikotest-paid.tool.Dass-42.showQuestion', ['testDass' => $testDass->id, 'questionDass' => 1])
            ->with('current_question_number', 1);
    }

    public function showQuestion(TestDass $testDass, QuestionDass $questionDass)
    {
        $existingAnswer = AnswerDass::where('test_dass_id', $testDass->id)
        ->where('question_dass_id', $questionDass->id)
        ->first();

        $progress = round(session('current_question_number') / 21 * 100);

        return view('moduls.psikotes-paid.tools.DASS.question', compact('testDass', 'questionDass', 'existingAnswer', 'progress'));
    }

    public function submit(Request $request, TestDass $testDass, QuestionDass $questionDass)
    {
        $validateData = $request->validate([
            'answer' => 'string'
        ]);

        $existingAnswer = AnswerDass::where('test_dass_id', $testDass->id)
            ->where('question_dass_id', $questionDass->id)
            ->first();

        if ($existingAnswer) {
            $existingAnswer->update([
                'answer' => $validateData['answer']
            ]);
        } else {
            AnswerDass::create([
                'test_dass_id' => $testDass->id,
                'question_dass_id' => $questionDass->id,
                'answer' => $validateData['answer'],
            ]);
        }

        if ($questionDass->question_order == QuestionDass::count()) {
            return redirect()->route('psikotest-paid.tool.Dass-42.summary', ['testDass' => $testDass->id]);
        } else {
            return redirect()->route('psikotest-paid.tool.Dass-42.showQuestion', ['testDass' => $testDass->id, 'questionDass' => $questionDass->id + 1]);
        }
    }

    public function summary(TestDass $testDass)
    {
        $psikotestPaidTest = PsikotestPaidTest::where('id', $testDass->psikotestPaidTest->id)->first();
        $psikotestPaidTest->update(['status_progress' => true]);

        return view('moduls.psikotes-paid.tools.DASS.summary');
    }
}
