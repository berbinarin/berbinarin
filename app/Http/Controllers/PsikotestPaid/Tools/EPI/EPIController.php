<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\EPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PsikotestPaid\EPI\EpiQuestion;
use App\Models\PsikotestPaid\EPI\EpiAnswer;
use Illuminate\Support\Facades\Auth;

class EPIController extends Controller
{
    public function showLanding()
    {
        return view('moduls.psikotes-paid.tools.epi.landing');
    }

    public function test()
    {
        $questions = EpiQuestion::all();
        return view('moduls.psikotes-paid.tools.epi.test', compact('questions'));
    }

    public function submitTest(Request $request)
    {
        $user = Auth::user();
        $userId = $user->id;
        $fullname = $user->fullname;
        $answers = $request->input('answers');
        $totalPoints = 0;

        foreach ($answers as $questionId => $answer) {
            $question = EpiQuestion::find($questionId);
            $points = 0;

            // poin berdasarkan kategori dan jawaban
            if ($answer == 'yes') {
                switch ($question->category) {
                    case 'Extroversion':
                        $points = 3;
                        break;
                    case 'Neuroticism':
                        $points = 2;
                        break;
                    case 'Lie':
                        $points = 1;
                        break;
                }
            }

            EpiAnswer::create([
                'user_id' => $userId,
                'question_id' => $questionId,
                'fullname' => $fullname,
                'answer' => $answer,
                'points' => $points,
            ]);

            $totalPoints += $points;
        }

        return redirect()->route('psikotest-paid.tool.EPI.summary');
    }

    public function summary()
    {
        return view('moduls.psikotes-paid.tools.epi.summary');
    }
}
