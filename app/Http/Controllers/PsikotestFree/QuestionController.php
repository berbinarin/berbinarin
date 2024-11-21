<?php

namespace App\Http\Controllers\PsikotestFree;

use App\Models\Answer;
use App\Models\Result;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\UserPsikotest;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class QuestionController extends Controller
{
    public function show($test_id, $question_order)
    {
        // Verifikasi sesi untuk test_id
        if (!session()->has('test_id') || session('test_id') != $test_id) {
            return redirect()->route('test.index');
        }

        $question = Question::where('id', $question_order)->firstOrFail();

        // Hitung progressbar soal
        $totalQuestions = Question::count();
        $progress = ($question_order / $totalQuestions) * 100;

        return view('moduls.psikotes.freetest', compact('question', 'test_id', 'question_order', 'progress'));
    }

    // Menyimpan jawaban dan mengarahkan ke pertanyaan berikutnya
    public function storeAnswer(Request $request, $test_id, $question_order)
    {
        $request->validate([
            'answer' => 'required|integer|min:1|max:5',
        ]);

        $question = Question::where('id', $question_order)->firstOrFail();

        // Cek apakah jawaban untuk pertanyaan ini sudah ada
        $existingAnswer = Answer::where('test_id', $test_id)
            ->where('question_id', $question->id)
            ->first();

        if ($existingAnswer) {
            // Update jawaban yang sudah ada
            $existingAnswer->update([
                'answer' => $request->input('answer'),
            ]);
        } else {
            // Simpan jawaban baru
            Answer::create([
                'answer' => $request->input('answer'),
                'question_id' => $question->id,
                'test_id' => $test_id,
            ]);
        }

        // Arahkan ke pertanyaan berikutnya atau halaman lain
        $next_question_order = $question_order + 1;

        if ($next_question_order > 44) {
            // Hitung hasil tes dan simpan ke dalam tabel results
            $this->calculateAndStoreResult($test_id);

            $user_id = UserPsikotest::where('test_id', $test_id)->firstOrFail()->id;

            return redirect()->route('result.show', ['test_id' => $test_id, 'user_id' => $user_id]);
        }

        // Arahkan ke pertanyaan berikutnya
        return redirect()->route('question.show', ['test_id' => $test_id, 'question_order' => $next_question_order]);
    }

    // Method untuk menghitung hasil dan menyimpan ke dalam tabel results
    private function calculateAndStoreResult($test_id)
    {
        $answers = Answer::where('test_id', $test_id)->get();

        $agreeablenessScore = 0;
        $conscientiousnessScore = 0;
        $extraversionScore = 0;
        $neuroticismScore = 0;
        $opennessScore = 0;

        foreach ($answers as $answer) {
            $question = Question::find($answer->question_id);

            $score = $this->isReversedQuestion($question->id)
                ? $this->reverseScore($answer->answer)
                : $answer->answer;

            switch ($question->dimension_id) {
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

        Result::create([
            'test_id' => $test_id,
            'agreeableness' => $percentageAgreeableness,
            'conscientiousness' => $percentageConscientiousness,
            'extraversion' => $percentageExtraversion,
            'neuroticism' => $percentageNeuroticism,
            'openness' => $percentageOpenness,
        ]);
    }

    // Method untuk mengecek apakah nomor pertanyaan termasuk dalam pengecualian
    private function isReversedQuestion($questionId)
    {
        $reversedQuestions = [2, 6, 7, 8, 9, 12, 18, 21, 23, 27, 31, 35, 37, 41];
        return in_array($questionId, $reversedQuestions);
    }

    // Method untuk menghitung nilai terbalik
    private function reverseScore($score)
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

    public function destroy(string $id)
    {
        //
        try {

            $question = Question::find($id);
            if (!$question) {
                throw new \Exception('Data tidak ditemukan.'); // Atau gunakan jenis Exception yang sesuai
            }
            $question->delete();

            Alert::success('Success ', 'Data Berhasil Delete');


            return redirect("/dashboard/admin/question");
        } catch (\Exception $e) {
            Alert::error('Error', 'Terjadi kesalahan saat menghapus data: ' . $e->getMessage());


            return redirect("/dashboard/admin/question");
        }
    }

    public function edit($id)
    {
        $question = Question::find($id);
        if (!$question) {
            return response()->json(['error' => 'Data tidak ditemukan.'], 404);
        }
        return response()->json($question);
    }

    // Method to update question data
    public function update(Request $request, $id)
    {
        $request->validate([
            'question_text' => 'required|string',
            'dimension_id' => 'required|integer',
            // Add other validation rules as necessary
        ]);

        try {
            $question = Question::find($id);
            if (!$question) {
                return response()->json(['error' => 'Data tidak ditemukan.'], 404);
            }

            $question->update($request->all());

            return response()->json(['success' => 'Data berhasil diperbarui.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat memperbarui data: ' . $e->getMessage()], 500);
        }
    }
}
