<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    // Menampilkan pertanyaan berdasarkan urutan dan ID tes
    public function show($test_id, $question_order)
    {
        // Ambil pertanyaan berdasarkan urutan
        $question = Question::where('id', $question_order)->firstOrFail();

        return view('question.show', compact('question', 'test_id', 'question_order'));
    }

    // Menyimpan jawaban dan mengarahkan ke pertanyaan berikutnya
    public function storeAnswer(Request $request, $test_id, $question_order)
    {
        // Validasi jawaban (antara 1 dan 5)
        $request->validate([
            'answer' => 'required|integer|min:1|max:5',
        ]);

        // Simpan jawaban ke dalam database
        $question = Question::where('id', $question_order)->firstOrFail();
        Answer::create([
            'answer' => $request->input('answer'),
            'question_id' => $question->id,
            'test_id' => $test_id,
        ]);

        // Arahkan ke pertanyaan berikutnya atau halaman lain
        $next_question_order = $question_order + 1;

        if ($next_question_order > 44) { // Jika sudah pertanyaan terakhir
            // Arahkan ke halaman hasil atau halaman lain yang sesuai
            return redirect()->route('biodata.show', ['test_id' => $test_id]);
        }

        // Arahkan ke pertanyaan berikutnya
        return redirect()->route('question.show', ['test_id' => $test_id, 'question_order' => $next_question_order]);
    }
}
