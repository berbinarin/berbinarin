<?php

namespace App\Http\Controllers\Dashboard\PTPM\Psikotest\Psikotest\VAK;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\VAK\AnswerVak;
use App\Models\PsikotestPaid\VAK\QuestionVak;
use App\Models\PsikotestPaid\VAK\ResultVak;
use App\Models\PsikotestPaid\VAK\TestVak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VakController extends Controller
{
    public function showLanding()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'VAK')->firstOrFail();
        return view('moduls.psikotes-paid.tools.VAK.landing', ['user' => $user, 'tool' => $tool]);
    }

    public function startTest(Request $request)
    {
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'VAK')->firstOrFail();

        $psikotestPaidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $user->id,
            'psikotest_tool_id' => $tool->id,
            'status_progress' => false,
        ]);

        $testPapiKostick = TestVak::create([
            'psikotest_paid_test_id' => $psikotestPaidTest->id,
        ]);

        $request->session()->put('VAK', $testPapiKostick->id);

        return redirect()->route('psikotest-paid.VAK.questions', ['id' => $testPapiKostick->id, 'question_order' => 1]);
    }

    public function showQuestions($id, $question_order)
    {
        if (!session()->has('VAK') || session('VAK') != $id) {
            return redirect()->route('psikotest-paid.tool.VAK.showLanding');
        }

        $question = QuestionVak::where('id', $question_order)->firstOrFail();

        $totalQuestions = QuestionVak::count();
        $progress = round(($question_order / $totalQuestions) * 100);

        return view('moduls.psikotes-paid.tools.VAK.question', compact('question', 'id', 'question_order', 'progress'));
    }

    public function submitAnswers(Request $request, $id, $question_order)
    {
        if (!session()->has('VAK') || session('VAK') != $id) {
            return redirect()->route('psikotest-paid.tool.VAK.showLanding');
        }

        $question = QuestionVak::where('id', $question_order)->firstOrFail();

        $existingAnswer = AnswerVak::where('test_vak_id', $id)
            ->where('question_vak_id', $question->id)
            ->first();

        if ($existingAnswer) {
            $existingAnswer->update([
                'answer' => $request->input('answer'),
            ]);
        } else {
            AnswerVak::create([
                'test_vak_id' => $id,
                'question_vak_id' => $question->id,
                'answer' => $request->input('answer')??null,
            ]);
        }

        $next_question_order = $question_order + 1;
        $timeout = $request->input('timeout');
        if ($next_question_order < 30 && $timeout == "false") {
            return redirect()->route('psikotest-paid.VAK.questions', ['id' => $id, 'question_order' => $next_question_order]);
        } else {
            $this->calculateAndStoreResult($id);

            $psikotestPaidTest = PsikotestPaidTest::where('id', $id)->first();
            if ($psikotestPaidTest) {
                $psikotestPaidTest->update(['status_progress' => true]);
            }
            return redirect()->route('psikotest-paid.VAK.complete', ['id' => $id]);
        }
    }

    public function calculateAndStoreResult($id)
    {
        $answers = AnswerVak::where('test_vak_id', $id)->get();

        $visualScore = 0;
        $auditoriScore = 0;
        $kinestetikScore = 0;

        foreach ($answers as $answer) {
            $question = QuestionVak::find($answer->question_vak_id);

            $score = $answer->answer;

            switch ($question->category_question_vak_id) {
                case 1:
                    $visualScore += $score;
                    break;
                case 2:
                    $auditoriScore += $score;
                    break;
                case 3:
                    $kinestetikScore += $score;
                    break;
            }
        }

        ResultVak::create([
            'test_vak_id' => $id,
            'visual' => $visualScore,
            'auditori' => $auditoriScore,
            'kinestetik' => $kinestetikScore,
        ]);
    }

    public function completeTest($id)
    {
        if (!session()->has('VAK') || session('VAK') != $id) {
            return redirect()->route('psikotest-paid.tool.VAK.showLanding');
        }

        $result = ResultVak::where('test_vak_id', $id)->firstOrFail();

        session()->forget('VAK');

        return view('moduls.psikotes-paid.tools.VAK.complete', compact('result'));
    }
}
