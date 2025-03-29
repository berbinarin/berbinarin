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
        $userId = Auth::id(); 
        $answers = $request->input('answers');

        // Inisialisasi total poin per kategori
        $categoryPoints = [
            'Lie' => 0,
            'Extraversion' => 0,
            'Neuroticism' => 0,
        ];

        // Simpan jawaban dan hitung poin per kategori
        foreach ($answers as $questionId => $answer) {
            $question = EpiQuestion::find($questionId);
            $points = $this->calculatePoints($questionId, $answer);

            // Tambahkan poin ke kategori terkait
            $categoryPoints[$question->category] += $points;
            $conclusion = $this->getConclusionForCategory($question->category, $categoryPoints[$question->category]);

            // Simpan jawaban ke database
            EpiAnswer::create([
                'user_id' => $userId,
                'fullname' => Auth::user()->fullname, 
                'question_id' => $questionId,
                'answer' => $answer,
                'points' => $points,
                'conclusion' => $conclusion, // Kesimpulan akan dihitung di bawah
            ]);
        }


        // Redirect ke halaman summary
        return redirect()->route('psikotest-paid.tool.EPI.summary');
    }


    private function getConclusionForCategory($category, $totalPoints)
    {
        switch ($category) {
            case 'Lie':
                return $this->getLieConclusion($totalPoints);
            case 'Extraversion':
                return $this->getExtraversionConclusion($totalPoints);
            case 'Neuroticism':
                return $this->getNeuroticismConclusion($totalPoints);
            default:
                return 'Unknown';
        }
    }

    private function calculatePoints($questionId, $answer)
    {
        $question = EpiQuestion::find($questionId);

        // Jika jawaban sesuai poin 1, jika tidak poin 0
        return $question->answer_key === $answer ? 1 : 0;
    }

    // Hitung kesimpulan untuk kategori Lie.
    private function getLieConclusion($totalPoints)
    {
        if ($totalPoints <= 3) {
            return 'Saint';
        } elseif ($totalPoints == 4) {
            return 'Mean';
        } else {
            return 'Taking';
        }
    }

    // Hitung kesimpulan untuk kategori Extraversion.
    private function getExtraversionConclusion($totalPoints)
    {
        if ($totalPoints <= 12) {
            return 'Introversi';
        } elseif ($totalPoints == 13) {
            return 'Mean';
        } else {
            return 'Extraversi';
        }
    }

    // Hitung kesimpulan untuk kategori Neuroticism.
    private function getNeuroticismConclusion($totalPoints)
    {
        if ($totalPoints <= 9) {
            return 'Stabilitas';
        } elseif ($totalPoints >= 10 && $totalPoints <= 13) {
            return 'Mean';
        } else {
            return 'Neurotisisme';
        }
    }

    public function summary()
    {
        return view('moduls.psikotes-paid.tools.epi.summary');
    }
}
