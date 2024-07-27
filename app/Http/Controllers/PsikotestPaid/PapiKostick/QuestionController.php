<?php

namespace App\Http\Controllers\PsikotestPaid\PapiKostick;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PapiKostick\AnswerPapiKostick;
use App\Models\PsikotestPaid\PapiKostick\QuestionPapiKostick;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function show($test_id, $question_order)
    {
        // Verifikasi sesi untuk test_id
        if (!session()->has('papikostick') || session('papikostick') != $test_id) {
            return redirect()->route('test.index');
        }

        $question = QuestionPapiKostick::findOrFail($question_order);

        // Hitung progressbar soal
        $totalQuestions = QuestionPapiKostick::count();
        $progress = ($question_order / $totalQuestions) * 100;

        return view('moduls.psikotes.papi-kostick.question', compact('question', 'test_id', 'question_order', 'progress', 'totalQuestions'));
    }

    public function answer(Request $request, $test_id, $question_order)
    {
        $validatedData = $request->validate([
            'answer' => 'required|in:a,b'
        ]);

        // Convert 'a' and 'b' to integer values if needed
        $answerValue = $validatedData['answer'] === 'a' ? 1 : 2;

        AnswerPapiKostick::create([
            'test_papi_kostick_id' => $test_id,
            'question_papi_kostick_id' => $question_order,
            'answer' => $answerValue
        ]);

        // Redirect to the next question or end of the test
        $nextQuestionOrder = $question_order + 1;
        if ($nextQuestionOrder <= QuestionPapiKostick::count()) {
            return redirect()->route('psikotest-paid.papi-kostick.question', ['test_id' => $test_id, 'question_order' => $nextQuestionOrder]);
        } else {
            return redirect()->route('psikotest-paid.papi-kostick.complete', ['test_id' => $test_id]);
        }
    }

    public function complete($test_id)
    {
        // Fetch all answers for the given test
        $answers = AnswerPapiKostick::where('test_papi_kostick_id', $test_id)->get();

        return view('moduls.psikotes.papi-kostick.complete', compact('test_id', 'answers'));
    }
}
