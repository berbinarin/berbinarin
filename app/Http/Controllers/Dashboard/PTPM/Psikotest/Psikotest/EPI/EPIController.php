<?php

namespace App\Http\Controllers\Dashboard\PsikotestTestProductManagement\Psikotest\Psikotest\EPI;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\EPI\EpiAnswer;
use App\Models\PsikotestPaid\EPI\EpiQuestion;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EPIController extends Controller
{
    public function showLanding()
    {
        return view('moduls.psikotes-paid.tools.epi.landing');
    }

    public function startTest(Request $request)
    {
        $userId = Auth::id();
        $toolId = 27; // ID alat tes untuk EPI

        $paidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $userId,
            'psikotest_tool_id' => $toolId,
            'status_progress' => true,
        ]);

        // Redirect ke halaman tes
        return redirect()->route('psikotest-paid.tool.EPI.showTest', ['testId' => $paidTest->id]);
    }

    public function showTest($testId)
    {
        $test = PsikotestPaidTest::findOrFail($testId);
        $questions = EpiQuestion::all();

        return view('moduls.psikotes-paid.tools.epi.test', compact('test', 'questions'));
    }
    public function submitAnswer(Request $request)
    {
        $validatedData = $request->validate([
            'test_id' => 'required|exists:psikotest_paid_tests,id',
            'answers' => 'required|array',
            'answers.*' => 'required|in:yes,no',
        ]);

        $testId = $validatedData['test_id'];
        $answers = $validatedData['answers'];

        foreach ($answers as $questionId => $answer) {
            $question = EpiQuestion::findOrFail($questionId);

            $points = $question->answer_key === $answer ? 1 : 0;

            EpiAnswer::create([
                'psikotest_paid_test_id' => $testId,
                'question_id' => $questionId,
                'answer' => $answer,
                'points' => $points,
                'conclusion' => '-',
            ]);
        }

        return redirect()->route('psikotest-paid.tool.EPI.summary', ['testId' => $testId]);
    }

    public function summary()
    {
        return view('moduls.psikotes-paid.tools.epi.summary');
    }
}
