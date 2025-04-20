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
        $psikotestTool = PsikotestTool::where('name', 'PAPI Kostick')->firstOrFail();
        return view('moduls.psikotes-paid.tools.papi-kostick.landing', compact('user', 'psikotestTool'));
    }

    public function startTest(PsikotestTool $psikotestTool)
    {
        $user = Auth::guard('psikotestpaid')->user();

        $psikotestPaidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $user->id,
            'psikotest_tool_id' => $psikotestTool->id,
            'status_progress' => false,
        ]);

        $testPapiKostick = TestPapiKostick::create([
            'psikotest_paid_test_id' => $psikotestPaidTest->id,
        ]);

        return redirect()->route('psikotest-paid.papi-kostick.showQuestion', ['psikotestTool' => $psikotestTool->id, 'testPapiKostick' => $testPapiKostick->id, 'questionPapiKostick' => 1]);
    }

    public function showQuestion(PsikotestTool $psikotestTool, TestPapiKostick $testPapiKostick, QuestionPapiKostick $questionPapiKostick)
    {
        $totalQuestions = $questionPapiKostick->count();
        $progress = round(($questionPapiKostick->id / $totalQuestions) * 100);

        $existingAnswer = AnswerPapiKostick::where('test_papi_kostick_id', $testPapiKostick->id)
            ->where('question_papi_kostick_id', $questionPapiKostick->id)->first();

        return view('moduls.psikotes-paid.tools.papi-kostick.question', compact('questionPapiKostick', 'psikotestTool', 'testPapiKostick', 'existingAnswer', 'progress'));
    }

    public function submitAnswers(Request $request, PsikotestTool $psikotestTool, TestPapiKostick $testPapiKostick, QuestionPapiKostick $questionPapiKostick)
    {

        // Cek apakah timeout terjadi
        if ($request->input('timeout') === "true") {
            $this->calculateAndStoreResult($testPapiKostick->id);
            return redirect()->route('psikotest-paid.papi-kostick.summary', []);
        }

        $existingAnswer = AnswerPapiKostick::where('test_papi_kostick_id', $testPapiKostick->id)
            ->where('question_papi_kostick_id', $questionPapiKostick->id)
            ->first();

        if ($existingAnswer) {
            $existingAnswer->update([
                'answer' => $request->answer,
            ]);
        } else {
            AnswerPapiKostick::create([
                'test_papi_kostick_id' => $testPapiKostick->id,
                'question_papi_kostick_id' => $questionPapiKostick->id,
                'answer' => $request->answer,
            ]);
        }

        if ($questionPapiKostick->id >= 90) {
            $this->calculateAndStoreResult($testPapiKostick->id);
            return redirect()->route('psikotest-paid.papi-kostick.summary', ['psikotestTool' => $psikotestTool->id, 'testPapiKostick' => $testPapiKostick->id]);
        }

        return redirect()->route('psikotest-paid.papi-kostick.showQuestion', ['psikotestTool' => $psikotestTool->id, 'testPapiKostick' => $testPapiKostick->id, 'questionPapiKostick' => $questionPapiKostick->id + 1]);
    }

    private function calculateAndStoreResult($testPapiKostickId)
    {
        $answers = AnswerPapiKostick::where('test_papi_kostick_id', $testPapiKostickId)->get();

        $scores = [
            'A' => 0,
            'N' => 0,
            'G' => 0,
            'C' => 0,
            'D' => 0,
            'R' => 0,
            'T' => 0,
            'V' => 0,
            'W' => 0,
            'F' => 0,
            'L' => 0,
            'P' => 0,
            'I' => 0,
            'S' => 0,
            'B' => 0,
            'O' => 0,
            'X' => 0,
            'E' => 0,
            'K' => 0,
            'Z' => 0,
        ];

        foreach ($answers as $answer) {
            $this->calculateScore($answer, $scores);
        }

        ResultPapiKostick::create(array_merge(['test_papi_kostick_id' => $testPapiKostickId], $scores));
    }

    private function calculateScore($answer, &$scores)
    {
        $question = QuestionPapiKostick::find($answer->question_papi_kostick_id);

        switch ($question->id) {
            case 1: // G E
                $answer->answer == 1 ? $scores['G']++ : $scores['E']++;
                break;
            case 2: // A N
                $answer->answer == 1 ? $scores['A']++ : $scores['N']++;
                break;
            case 3: // P A
                $answer->answer == 1 ? $scores['P']++ : $scores['A']++;
                break;
            case 4: // X P
                $answer->answer == 1 ? $scores['X']++ : $scores['P']++;
                break;
            case 5: //B X
                $answer->answer == 1 ? $scores['B']++ : $scores['X']++;
                break;
            case 6: // O B
                $answer->answer == 1 ? $scores['O']++ : $scores['B']++;
                break;
            case 7: // Z O
                $answer->answer == 1 ? $scores['Z']++ : $scores['O']++;
                break;
            case 8: // K Z
                $answer->answer == 1 ? $scores['K']++ : $scores['Z']++;
                break;
            case 9: // F K
                $answer->answer == 1 ? $scores['F']++ : $scores['K']++;
                break;
            case 10: // W F
                $answer->answer == 1 ? $scores['W']++ : $scores['F']++;
                break;
            case 11: // G C
                $answer->answer == 1 ? $scores['G']++ : $scores['C']++;
                break;
            case 12: // L E
                $answer->answer == 1 ? $scores['L']++ : $scores['E']++;
                break;
            case 13: // P N
                $answer->answer == 1 ? $scores['P']++ : $scores['N']++;
                break;
            case 14: // X A
                $answer->answer == 1 ? $scores['X']++ : $scores['A']++;
                break;
            case 15: // B P
                $answer->answer == 1 ? $scores['B']++ : $scores['P']++;
                break;
            case 16: // O X
                $answer->answer == 1 ? $scores['O']++ : $scores['X']++;
                break;
            case 17: // Z B
                $answer->answer == 1 ? $scores['Z']++ : $scores['B']++;
                break;
            case 18: // K O
                $answer->answer == 1 ? $scores['K']++ : $scores['O']++;
                break;
            case 19: // F Z
                $answer->answer == 1 ? $scores['F']++ : $scores['Z']++;
                break;
            case 20: // W K
                $answer->answer == 1 ? $scores['W']++ : $scores['K']++;
                break;
            case 21: // G D
                $answer->answer == 1 ? $scores['G']++ : $scores['D']++;
                break;
            case 22: // L C
                $answer->answer == 1 ? $scores['L']++ : $scores['C']++;
                break;
            case 23: // I E
                $answer->answer == 1 ? $scores['I']++ : $scores['E']++;
                break;
            case 24: // X N
                $answer->answer == 1 ? $scores['X']++ : $scores['N']++;
                break;
            case 25: // B A
                $answer->answer == 1 ? $scores['B']++ : $scores['A']++;
                break;
            case 26: // O P
                $answer->answer == 1 ? $scores['O']++ : $scores['P']++;
                break;
            case 27: // Z X
                $answer->answer == 1 ? $scores['Z']++ : $scores['X']++;
                break;
            case 28: // K B
                $answer->answer == 1 ? $scores['K']++ : $scores['B']++;
                break;
            case 29: // F O
                $answer->answer == 1 ? $scores['F']++ : $scores['O']++;
                break;
            case 30: // W Z
                $answer->answer == 1 ? $scores['W']++ : $scores['Z']++;
                break;
            case 31: // G R
                $answer->answer == 1 ? $scores['G']++ : $scores['R']++;
                break;
            case 32: // L D
                $answer->answer == 1 ? $scores['L']++ : $scores['D']++;
                break;
            case 33: // I C
                $answer->answer == 1 ? $scores['I']++ : $scores['C']++;
                break;
            case 34: // T E
                $answer->answer == 1 ? $scores['T']++ : $scores['E']++;
                break;
            case 35: // B N
                $answer->answer == 1 ? $scores['B']++ : $scores['N']++;
                break;
            case 36: // O A
                $answer->answer == 1 ? $scores['O']++ : $scores['A']++;
                break;
            case 37: // Z P
                $answer->answer == 1 ? $scores['Z']++ : $scores['P']++;
                break;
            case 38: // K X
                $answer->answer == 1 ? $scores['K']++ : $scores['X']++;
                break;
            case 39: // F B
                $answer->answer == 1 ? $scores['F']++ : $scores['B']++;
                break;
            case 40: // W O
                $answer->answer == 1 ? $scores['W']++ : $scores['O']++;
                break;
            case 41: // G S
                $answer->answer == 1 ? $scores['G']++ : $scores['S']++;
                break;
            case 42: // L R
                $answer->answer == 1 ? $scores['L']++ : $scores['R']++;
                break;
            case 43: // I D
                $answer->answer == 1 ? $scores['I']++ : $scores['D']++;
                break;
            case 44: // T C
                $answer->answer == 1 ? $scores['T']++ : $scores['C']++;
                break;
            case 45: // V E
                $answer->answer == 1 ? $scores['V']++ : $scores['E']++;
                break;
            case 46: // O N
                $answer->answer == 1 ? $scores['O']++ : $scores['N']++;
                break;
            case 47: // Z A
                $answer->answer == 1 ? $scores['Z']++ : $scores['A']++;
                break;
            case 48: // K P
                $answer->answer == 1 ? $scores['K']++ : $scores['P']++;
                break;
            case 49: // F X
                $answer->answer == 1 ? $scores['F']++ : $scores['X']++;
                break;
            case 50: // W B
                $answer->answer == 1 ? $scores['W']++ : $scores['B']++;
                break;
            case 51: // G V
                $answer->answer == 1 ? $scores['G']++ : $scores['V']++;
                break;
            case 52: // L S
                $answer->answer == 1 ? $scores['L']++ : $scores['S']++;
                break;
            case 53: // I R
                $answer->answer == 1 ? $scores['I']++ : $scores['R']++;
                break;
            case 54: // T D
                $answer->answer == 1 ? $scores['T']++ : $scores['D']++;
                break;
            case 55: // V C
                $answer->answer == 1 ? $scores['V']++ : $scores['C']++;
                break;
            case 56: // S E
                $answer->answer == 1 ? $scores['S']++ : $scores['E']++;
                break;
            case 57: // Z N
                $answer->answer == 1 ? $scores['Z']++ : $scores['N']++;
                break;
            case 58: // K A
                $answer->answer == 1 ? $scores['K']++ : $scores['A']++;
                break;
            case 59: // F P
                $answer->answer == 1 ? $scores['F']++ : $scores['P']++;
                break;
            case 60: // W X
                $answer->answer == 1 ? $scores['W']++ : $scores['X']++;
                break;
            case 61: // G T
                $answer->answer == 1 ? $scores['G']++ : $scores['T']++;
                break;
            case 62: // L V
                $answer->answer == 1 ? $scores['L']++ : $scores['V']++;
                break;
            case 63: // I S
                $answer->answer == 1 ? $scores['I']++ : $scores['S']++;
                break;
            case 64: // T R
                $answer->answer == 1 ? $scores['T']++ : $scores['R']++;
                break;
            case 65: // V D
                $answer->answer == 1 ? $scores['V']++ : $scores['D']++;
                break;
            case 66: // S C
                $answer->answer == 1 ? $scores['S']++ : $scores['C']++;
                break;
            case 67: // R E
                $answer->answer == 1 ? $scores['R']++ : $scores['E']++;
                break;
            case 68: // K N
                $answer->answer == 1 ? $scores['K']++ : $scores['N']++;
                break;
            case 69: // F A
                $answer->answer == 1 ? $scores['F']++ : $scores['A']++;
                break;
            case 70: // W P
                $answer->answer == 1 ? $scores['W']++ : $scores['P']++;
                break;
            case 71: // G I
                $answer->answer == 1 ? $scores['G']++ : $scores['I']++;
                break;
            case 72: // L T
                $answer->answer == 1 ? $scores['L']++ : $scores['T']++;
                break;
            case 73: // I V
                $answer->answer == 1 ? $scores['I']++ : $scores['V']++;
                break;
            case 74: // T S
                $answer->answer == 1 ? $scores['T']++ : $scores['S']++;
                break;
            case 75: // V R
                $answer->answer == 1 ? $scores['V']++ : $scores['R']++;
                break;
            case 76: // S D
                $answer->answer == 1 ? $scores['S']++ : $scores['D']++;
                break;
            case 77: // R C
                $answer->answer == 1 ? $scores['R']++ : $scores['C']++;
                break;
            case 78: // D E
                $answer->answer == 1 ? $scores['D']++ : $scores['E']++;
                break;
            case 79: // F N
                $answer->answer == 1 ? $scores['F']++ : $scores['N']++;
                break;
            case 80: // W A
                $answer->answer == 1 ? $scores['W']++ : $scores['A']++;
                break;
            case 81: // G L
                $answer->answer == 1 ? $scores['G']++ : $scores['L']++;
                break;
            case 82: // L I
                $answer->answer == 1 ? $scores['L']++ : $scores['I']++;
                break;
            case 83: // I T
                $answer->answer == 1 ? $scores['I']++ : $scores['T']++;
                break;
            case 84: // T V
                $answer->answer == 1 ? $scores['T']++ : $scores['V']++;
                break;
            case 85: // V S
                $answer->answer == 1 ? $scores['V']++ : $scores['S']++;
                break;
            case 86: // S R
                $answer->answer == 1 ? $scores['S']++ : $scores['R']++;
                break;
            case 87: // R D
                $answer->answer == 1 ? $scores['R']++ : $scores['D']++;
                break;
            case 88: // D C
                $answer->answer == 1 ? $scores['D']++ : $scores['C']++;
                break;
            case 89: // C E
                $answer->answer == 1 ? $scores['C']++ : $scores['E']++;
                break;
            case 90: // W N
                $answer->answer == 1 ? $scores['W']++ : $scores['N']++;
                break;
            default:
                break;
        }
    }

    public function summary(TestPapiKostick $testPapiKostick)
    {
        $psikotestPaidTest = PsikotestPaidTest::where('id', $testPapiKostick->psikotestPaidTest->id)->first();
        $psikotestPaidTest->update(['status_progress' => true]);

        return view('moduls.psikotes-paid.tools.papi-kostick.summary');
    }
}
