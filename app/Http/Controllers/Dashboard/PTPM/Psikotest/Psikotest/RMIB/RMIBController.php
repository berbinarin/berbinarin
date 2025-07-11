<?php

namespace App\Http\Controllers\Dashboard\PTPM\Psikotest\Psikotest\RMIB;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\RMIB\AnswerRmib;
use App\Models\PsikotestPaid\RMIB\QuestionRmib;
use App\Models\PsikotestPaid\RMIB\TestRmib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RMIBController extends Controller
{
    public function showLanding()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'RMIB')->firstOrFail();
        return view('moduls.psikotes-paid.tools.RMIB.landing', compact('user', 'tool'));
    }

    public function startTest()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'RMIB')->firstOrFail();

        $paidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $user->id,
            'psikotest_tool_id' => $tool->id,
            'status_progress' => false,
        ]);

        $testRmib = TestRmib::create([
            'psikotest_paid_test_id' => $paidTest->id,
        ]);

        return redirect()->route('psikotest-paid.tool.RMIB.showTest', ['testRmib' => $testRmib->id])
        ->with('current_question_number', 1);
    }

    public function showTest(Request $request, TestRmib $testRmib)
    {
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'RMIB')->firstOrFail();

        $psikotestPaidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $user->id,
            'psikotest_tool_id' => $tool->id,
            'status_progress' => false,
        ]);

        $questions = QuestionRmib::all();
        $statements = $questions;

        return view('moduls.psikotes-paid.tools.RMIB.test', compact('questions', 'statements', 'user', 'testRmib'));
    }

    public function submitAnswer(Request $request, TestRmib $testRmib)
    {
        $ordered = json_decode($request->ordered_statements);

        $categoryOrder = [];

        foreach ($ordered as $index => $category) {
            $categoryOrder[$category] = $index + 1;
        }

        AnswerRmib::create([
            'test_rmib_id' => $testRmib->id,
            'question_rmib_id' => $request->question_rmib_id,
            'outdoor' => $categoryOrder['outdoor'],
            'mechanical' => $categoryOrder['mechanical'],
            'computational' => $categoryOrder['computational'],
            'science' => $categoryOrder['science'],
            'personal_contact' => $categoryOrder['personal contact'],
            'aesthetic' => $categoryOrder['aesthetic'],
            'musical' => $categoryOrder['musical'],
            'literacy' => $categoryOrder['literacy'],
            'social_service' => $categoryOrder['social service'],
            'clerical' => $categoryOrder['clerical'],
            'practical' => $categoryOrder['practical'],
            'medical' => $categoryOrder['medical'],
        ]);

        if ($request->current_question_number >= 8) {
            return redirect()->route('psikotest-paid.tool.RMIB.summary', $testRmib);
        } else {
            return redirect()->route('psikotest-paid.tool.RMIB.showTest', $testRmib)->with('current_question_number', $request->current_question_number + 1);
        }

    }

    public function summary()
    {
        return view('moduls.psikotes-paid.tools.rmib.summary');
    }
}
