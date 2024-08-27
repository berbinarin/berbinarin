<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\OCEAN;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\OCEAN\AnswerOcean;
use App\Models\PsikotestPaid\OCEAN\QuestionOcean;
use App\Models\PsikotestPaid\OCEAN\ResultOcean;
use App\Models\PsikotestPaid\OCEAN\TestOcean;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\TesEsai\TestTesEsai;
use App\Models\PsikotestPaid\TesEsai\QuestionTesEsai;
use App\Models\PsikotestPaid\TesEsai\AnswerTesEsai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ResultOceanController extends Controller
{
    public function showResult($psikotestPaidTestId)
    {
        // Find the relevant test_tes_esai_id from the test_tes_esai table where the psikotest_paid_test id matches
        $testTesEsai = TestOcean::where('psikotest_paid_test_id', $psikotestPaidTestId)->first();
        if ($testTesEsai) {
            $testTesEsaiId = $testTesEsai->id;
            // $this->calculateAndStoreResult($testTesEsaiId);
            // Fetch all answers for the given test_tes_esai_id
            $answers = ResultOcean::where('test_ocean_id', $testTesEsaiId)->get();
                // ->with('questionOcean') // Ensure you load the related question
                // ->get();
                // dd($answers);
            // Pass answers to the view
            return view('moduls.psikotes-paid.admin.tools.ocean-result', ['answers' => $answers]);
        } else {
            // Handle the case where the test_tes_esai is not found
            return redirect()->back()->with('error', 'Test not found');
        }
    }

    public function calculateAndStoreResult($test_ocean_id)
    {
        $answers = AnswerOcean::where('test_ocean_id', $test_ocean_id)->with('questionOcean')->get();
        $agreeablenessScore = 0;
        $conscientiousnessScore = 0;
        $extraversionScore = 0;
        $neuroticismScore = 0;
        $opennessScore = 0;

        foreach ($answers as $answer) {
            $question = $answer->questionOcean;
            $score = $this->isReversedQuestion($question->id)
                ? $this->reverseScore($answer->answer)
                : $answer->answer;

            switch ($question->dimension_ocean_id) {
                case 1:
                    $agreeablenessScore += $score;
                    break;
                case 2:
                    $conscientiousnessScore += $score;
                    break;
                case 3:
                    $extraversionScore += $score;
                    break;
                case 4:
                    $neuroticismScore += $score;
                    break;
                case 5:
                    $opennessScore += $score;
                    break;
            }
        }

        // Hitung rata-rata skor
        $averageAgreeableness = $agreeablenessScore / 9;
        $averageConscientiousness = $conscientiousnessScore / 9;
        $averageExtraversion = $extraversionScore / 8;
        $averageNeuroticism = $neuroticismScore / 8;
        $averageOpenness = $opennessScore / 10;

        // Hitung persentase
        $percentageAgreeableness = $averageAgreeableness * 100 / 5;
        $percentageConscientiousness = $averageConscientiousness * 100 / 5;
        $percentageExtraversion = $averageExtraversion * 100 / 5;
        $percentageNeuroticism = $averageNeuroticism * 100 / 5;
        $percentageOpenness = $averageOpenness * 100 / 5;

        ResultOcean::create([
            'test_ocean_id' => $test_ocean_id,
            'agreeableness' => $percentageAgreeableness,
            'conscientiousness' => $percentageConscientiousness,
            'extraversion' => $percentageExtraversion,
            'neuroticism' => $percentageNeuroticism,
            'openness' => $percentageOpenness,
        ]);
    }

    // Method untuk mengecek apakah nomor pertanyaan termasuk dalam pengecualian
    public function isReversedQuestion($questionId)
    {
        $reversedQuestions = [2, 6, 7, 8, 9, 12, 18, 21, 23, 27, 31, 35, 37, 41];
        return in_array($questionId, $reversedQuestions);
    }

    // Method untuk menghitung nilai terbalik
    public function reverseScore($score)
    {
        switch ($score) {
            case 1:
                return 5;
            case 2:
                return 4;
            case 3:
                return 3;
            case 4:
                return 2;
            case 5:
                return 1;
            default:
                return 0;
        }
    }
}
