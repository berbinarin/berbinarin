<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\PapiKostick;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PapiKostick\AnswerPapiKostick;
use Illuminate\Support\Facades\Auth;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PapiKostick\TestPapiKostick;
use App\Models\PsikotestPaid\PapiKostick\QuestionPapiKostick;
use App\Models\PsikotestPaid\PapiKostick\ResultPapiKostick;

class PapiKostickController extends Controller
{
    public function showLanding()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'PAPI Kostick')->firstOrFail();
        return view('moduls.psikotes-paid.tools.papi-kostick.landing', ['user' => $user, 'tool' => $tool]);
    }

    public function startTest(Request $request)
    {
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'PAPI Kostick')->firstOrFail();

        $psikotestPaidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $user->id,
            'psikotest_tool_id' => $tool->id,
        ]);

        $testPapiKostick = TestPapiKostick::create([
            'psikotest_paid_test_id' => $psikotestPaidTest->id,
        ]);

        $request->session()->put('papikostick', $testPapiKostick->id);

        return redirect()->route('psikotest-paid.papi-kostick.questions', ['id' => $testPapiKostick->id, 'question_order' => 1]);
    }

    // menampilkan question dan mengambil dari session start test
    public function showQuestions($id, $question_order)
    {
        // Verify session for test_id
        if (!session()->has('papikostick') || session('papikostick') != $id) {
            return redirect()->route('psikotest-paid.papi-kostick.landing');
        }

        $question = QuestionPapiKostick::where('id', $question_order)->firstOrFail();

        $totalQuestions = QuestionPapiKostick::count();
        $progress = ($question_order / $totalQuestions) * 100;

        return view('moduls.psikotes-paid.tools.papi-kostick.question', compact('question', 'id', 'question_order', 'progress'));
    }

    public function submitAnswers(Request $request, $id, $question_order)
    {
        // Verify session for test_id
        if (!session()->has('papikostick') || session('papikostick') != $id) {
            return redirect()->route('psikotest-paid.papi-kostick.landing');
        }

        $question = QuestionPapiKostick::where('id', $question_order)->firstOrFail();

        $existingAnswer = AnswerPapiKostick::where('test_papi_kostick_id', $id)
            ->where('question_papi_kostick_id', $question->id)
            ->first();

        $answer = $request->input('answer');
        $answerValue = $answer === 'a' ? 1 : ($answer === 'b' ? 2 : 0);

        if ($existingAnswer) {
            $existingAnswer->update([
                'answer' => $answerValue,
            ]);
        } else {
            AnswerPapiKostick::create([
                'test_papi_kostick_id' => $id,
                'question_papi_kostick_id' => $question->id,
                'answer' => $answerValue,
            ]);
        }

        $next_question_order = $question_order + 1;

        if ($next_question_order > 90) {
            $this->calculateAndStoreResult($id);

            return redirect()->route('psikotest-paid.papi-kostick.complete', ['id' => $id]);
        }

        return redirect()->route('psikotest-paid.papi-kostick.questions', ['id' => $id, 'question_order' => $next_question_order]);
    }

    private function calculateAndStoreResult($id)
    {
        $answers = AnswerPapiKostick::where('test_papi_kostick_id', $id)->get();

        $scores = [
            'A' => 0, 'N' => 0, 'G' => 0, 'C' => 0, 'D' => 0,
            'R' => 0, 'T' => 0, 'V' => 0, 'W' => 0, 'F' => 0,
            'L' => 0, 'P' => 0, 'I' => 0, 'S' => 0, 'B' => 0,
            'O' => 0, 'X' => 0, 'E' => 0, 'K' => 0, 'Z' => 0,
        ];

        foreach ($answers as $answer) {
            $this->calculateScore($answer, $scores);
        }

        ResultPapiKostick::create(array_merge(['test_papi_kostick_id' => $id], $scores));
    }

    private function calculateScore($answer, &$scores)
    {
        $question = QuestionPapiKostick::find($answer->question_papi_kostick_id);

        switch ($question->id) {
            case 1:
                $answer->answer == 1 ? $scores['G']++ : $scores['E']++;
                break;
            case 2:
                $answer->answer == 1 ? $scores['A']++ : $scores['N']++;
                break;
            case 3:
                $answer->answer == 1 ? $scores['P']++ : $scores['A']++;
                break;
            case 4:
                $answer->answer == 1 ? $scores['N']++ : $scores['P']++;
                break;
            case 5:
                $answer->answer == 1 ? $scores['B']++ : $scores['X']++;
                break;
            case 6:
                $answer->answer == 1 ? $scores['O']++ : $scores['B']++;
                break;
            case 7:
                $answer->answer == 1 ? $scores['Z']++ : $scores['O']++;
                break;
            case 8:
                if ($answer->answer == 1) {
                    $scores['K']++;
                } else {
                    $scores['Z']++;
                    $scores['E']++;
                }
                break;
            case 9:
                $answer->answer == 1 ? $scores['F']++ : $scores['K']++;
                break;
            case 10:
                $answer->answer == 1 ? $scores['W']++ : $scores['F']++;
                break;
            case 11:
                $answer->answer == 1 ? $scores['G']++ : $scores['C']++;
                break;
            case 12:
                if ($answer->answer == 1) {
                    $scores['L']++;
                }
                break;
            case 13:
                $answer->answer == 1 ? $scores['P']++ : $scores['N']++;
                break;
            case 14:
                $answer->answer == 1 ? $scores['X']++ : $scores['A']++;
                break;
            case 15:
                $answer->answer == 1 ? $scores['B']++ : $scores['P']++;
                break;
            case 16:
                $answer->answer == 1 ? $scores['O']++ : $scores['X']++;
                break;
            case 17:
                $answer->answer == 1 ? $scores['Z']++ : $scores['B']++;
                break;
            case 18:
                $answer->answer == 1 ? $scores['K']++ : $scores['O']++;
                break;
            case 19:
                $answer->answer == 1 ? $scores['F']++ : $scores['Z']++;
                break;
            case 20:
                $answer->answer == 1 ? $scores['W']++ : $scores['K']++;
                break;
            case 21:
                $answer->answer == 1 ? $scores['G']++ : $scores['D']++;
                break;
            case 22:
                $answer->answer == 1 ? $scores['L']++ : $scores['C']++;
                break;
            case 23:
                $answer->answer == 1 ? $scores['I']++ : $scores['E']++;
                break;
            case 24:
                $answer->answer == 1 ? $scores['X']++ : $scores['N']++;
                break;
            case 25:
                $answer->answer == 1 ? $scores['B']++ : $scores['A']++;
                break;
            case 26:
                $answer->answer == 1 ? $scores['O']++ : $scores['P']++;
                break;
            case 27:
                $answer->answer == 1 ? $scores['Z']++ : $scores['X']++;
                break;
            case 28:
                $answer->answer == 1 ? $scores['K']++ : $scores['B']++;
                break;
            case 29:
                $answer->answer == 1 ? $scores['F']++ : $scores['O']++;
                break;
            case 30:
                $answer->answer == 1 ? $scores['W']++ : $scores['Z']++;
                break;
            case 31:
                $answer->answer == 1 ? $scores['G']++ : $scores['R']++;
                break;
            case 32:
                $answer->answer == 1 ? $scores['L']++ : $scores['D']++;
                break;
            case 33:
                $answer->answer == 1 ? $scores['I']++ : $scores['C']++;
                break;
            case 34:
                $answer->answer == 1 ? $scores['T']++ : $scores['E']++;
                break;
            case 35:
                $answer->answer == 1 ? $scores['B']++ : $scores['N']++;
                break;
            case 36:
                $answer->answer == 1 ? $scores['O']++ : $scores['A']++;
                break;
            case 37:
                if ($answer->answer == 1) {
                    $scores['Z']++;
                    $scores['G']++;
                } else {
                    $scores['P']++;
                }
            case 38:
                $answer->answer == 1 ? $scores['K']++ : $scores['X']++;
                break;
            case 39:
                $answer->answer == 1 ? $scores['F']++ : $scores['B']++;
                break;
            case 40:
                $answer->answer == 1 ? $scores['W']++ : $scores['O']++;
                break;
            case 41:
                if ($answer->answer == 2) {
                    $scores['S']++;
                }
                break;
            case 42:
                $answer->answer == 1 ? $scores['L']++ : $scores['R']++;
                break;
            case 43:
                $answer->answer == 1 ? $scores['I']++ : $scores['D']++;
                break;
            case 44:
                $answer->answer == 1 ? $scores['T']++ : $scores['C']++;
                break;
            case 45:
                $answer->answer == 1 ? $scores['V']++ : $scores['E']++;
                break;
            case 46:
                $answer->answer == 1 ? $scores['O']++ : $scores['N']++;
                break;
            case 47:
                $answer->answer == 1 ? $scores['Z']++ : $scores['A']++;
                break;
            case 48:
                $answer->answer == 1 ? $scores['K']++ : $scores['P']++;
                break;
            case 49:
                $answer->answer == 1 ? $scores['F']++ : $scores['X']++;
                break;
            case 50:
                $answer->answer == 1 ? $scores['W']++ : $scores['B']++;
                break;
            case 51:
                $answer->answer == 1 ? $scores['G']++ : $scores['V']++;
                break;
            case 52:
                if ($answer->answer == 1) {
                    $scores['L']++;
                } else {
                    $scores['E']++;
                    $scores['S']++;
                }
                break;
            case 53:
                if ($answer->answer == 1) {
                    $scores['I']++;
                } else {
                    $scores['N']++;
                    $scores['R']++;
                }
                break;
            case 54:
                $answer->answer == 1 ? $scores['T']++ : $scores['D']++;
                break;
            case 55:
                $answer->answer == 1 ? $scores['V']++ : $scores['C']++;
                break;
            case 56:
                $answer->answer == 1 ? $scores['S']++ : $scores['P']++;
                break;
            case 57:
                if ($answer->answer == 1) {
                    $scores['Z']++;
                }
                break;
            case 58:
                $answer->answer == 1 ? $scores['K']++ : $scores['A']++;
                break;
            case 59:
                if ($answer->answer == 1) {
                    $scores['F']++;
                }
                break;
            case 60:
                $answer->answer == 1 ? $scores['W']++ : $scores['X']++;
                break;
            case 61:
                $answer->answer == 1 ? $scores['G']++ : $scores['T']++;
                break;
            case 62:
                $answer->answer == 1 ? $scores['L']++ : $scores['V']++;
                break;
            case 63:
                $answer->answer == 1 ? $scores['I']++ : $scores['S']++;
                break;
            case 64:
                $answer->answer == 1 ? $scores['T']++ : $scores['R']++;
                break;
            case 65:
                $answer->answer == 1 ? $scores['V']++ : $scores['D']++;
                break;
            case 66:
                $answer->answer == 1 ? $scores['S']++ : $scores['C']++;
                break;
            case 67:
                $answer->answer == 1 ? $scores['R']++ : $scores['E']++;
                break;
            case 68:
                $answer->answer == 1 ? $scores['K']++ : $scores['N']++;
                break;
            case 69:
                $answer->answer == 1 ? $scores['F']++ : $scores['A']++;
                break;
            case 70:
                $answer->answer == 1 ? $scores['W']++ : $scores['P']++;
                break;
            case 71:
                $answer->answer == 1 ? $scores['G']++ : $scores['I']++;
                break;
            case 72:
                $answer->answer == 1 ? $scores['L']++ : $scores['T']++;
                break;
            case 73:
                $answer->answer == 1 ? $scores['I']++ : $scores['V']++;
                break;
            case 74:
                $answer->answer == 1 ? $scores['T']++ : $scores['S']++;
                break;
            case 75:
                $answer->answer == 1 ? $scores['V']++ : $scores['R']++;
                break;
            case 76:
                $answer->answer == 1 ? $scores['S']++ : $scores['D']++;
                break;
            case 77:
                $answer->answer == 1 ? $scores['R']++ : $scores['C']++;
                break;
            case 78:
                $answer->answer == 1 ? $scores['D']++ : $scores['E']++;
                break;
            case 79:
                $answer->answer == 1 ? $scores['F']++ : $scores['N']++;
                break;
            case 80:
                $answer->answer == 1 ? $scores['W']++ : $scores['A']++;
                break;
            case 81:
                $answer->answer == 1 ? $scores['G']++ : $scores['L']++;
                break;
            case 82:
                $answer->answer == 1 ? $scores['L']++ : $scores['I']++;
                break;
            case 83:
                $answer->answer == 1 ? $scores['I']++ : $scores['T']++;
                break;
            case 84:
                $answer->answer == 1 ? $scores['T']++ : $scores['V']++;
                break;
            case 85:
                $answer->answer == 1 ? $scores['V']++ : $scores['S']++;
                break;
            case 86:
                $answer->answer == 1 ? $scores['S']++ : $scores['R']++;
                break;
            case 87:
                $answer->answer == 1 ? $scores['R']++ : $scores['D']++;
                break;
            case 88:
                $answer->answer == 1 ? $scores['D']++ : $scores['C']++;
                break;
            case 89:
                $answer->answer == 1 ? $scores['C']++ : $scores['E']++;
                break;
            case 90:
                $answer->answer == 1 ? $scores['W']++ : $scores['N']++;
                break;
            default:
                break;
        }

        // return $scores;
    }

    public function complete($id)
    {
        // Verify session for test_id
        if (!session()->has('papikostick') || session('papikostick') != $id) {
            return redirect()->route('psikotest-paid.papi-kostick.landing');
        }

        $result = ResultPapiKostick::where('test_papi_kostick_id', $id)->firstOrFail();

        // hapus sessionnya
        session()->forget('papikostick');

        return view('moduls.psikotes-paid.tools.papi-kostick.complete', compact('result'));
    }
}
