<?php

namespace App\Http\Controllers\Dashboard\PsikotestFree;

use App\Http\Controllers\Controller;
use App\Models\Dimension;
use App\Models\Question;
use App\Models\Test;
use App\Models\UserPsikotest;
use Illuminate\Http\Request;

class PsikotestFreeController extends Controller
{
    public function psikotestData()
    {

        return view('moduls.psikotes.dashboard.psikotestData');
    }

    public function psikotestSoal()
    {
        return view('moduls.psikotes.dashboard.psikotestSoal');
    }

    public function adminDataPsikotesFree()
    {
        $testData = Test::with('users', 'results')->orderBy('created_at', 'desc')->get();

        return view('moduls.dashboard.psikotes.data', compact('testData'));
    }

    public function adminDataPsikotesFreeShow($test_id)
    {
        $testData = Test::with(['users.feedback', 'results', 'answers.question'])->findOrFail($test_id);

        return view('moduls.dashboard.psikotes.data-detail', compact('testData'));
    }

        public function psikotestFreeStart()
    {
        return view('moduls.psikotes.start');
    }

    // Menampilkan form edit user
    public function adminDataPsikotesFreeEdit($test_id)
    {
        $testData = Test::with('users', 'results')->findOrFail($test_id);
        return view('moduls.dashboard.psikotes.data-edit', compact('testData'));
    }

    // Update data user
    public function adminDataPsikotesFreeUpdate(Request $request, $test_id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:Male,Female',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|max:255',
            'test_date' => 'required|date',
        ]);

        $user = UserPsikotest::findOrFail($test_id);
        $user->update($request->only('name', 'gender', 'date_of_birth', 'email'));

        $user->test()->update(['test_date' => $request->input('test_date')]);

        return redirect()->route('dashboard.psikotestfree.data')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'User berhasil diupdate',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }

    // Menghapus data user
    public function adminDataPsikotesFreeDestroy($test_id)
    {
        $user = UserPsikotest::findOrFail($test_id);
        $user->delete();

        return redirect()->route('dashboard.psikotestfree.data')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'User berhasil dihapus',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }

    public function adminEditSoalPsikotesFree()
    {
        $questions = Question::with('dimension')->get();
        return view('moduls.dashboard.psikotes.question', compact('questions'));
    }

    // Menampilkan form tambah soal
    public function adminEditSoalPsikotestFreeCreate()
    {
        $dimensions = Dimension::all(); // Mengambil semua dimensi untuk dropdown
        return view('moduls.psikotes.dashboard-dev.admin-question-create', compact('dimensions'));
    }

    // Menyimpan soal baru
    public function adminEditSoalPsikotestFreeStore(Request $request)
    {
        $request->validate([
            'question_text' => 'required|string|max:255',
            'dimension_id' => 'required|exists:dimensions,id',
            'nr' => 'required|in:N,R',
        ]);

        Question::create([
            'question_text' => $request->input('question_text'),
            'dimension_id' => $request->input('dimension_id'),
            'nr' => $request->input('nr'),
        ]);

        return redirect()->route('dashboard.psikotestfree.question.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Pertanyaan berhasil ditambahkan',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }

    // Menampilkan form edit soal
    public function adminEditSoalPsikotestFreeEdit($id)
    {
        $question = Question::findOrFail($id);
        $dimensions = Dimension::all();
        return view('moduls.psikotes.dashboard-dev.admin-question-edit', compact('question', 'dimensions'));
    }

    // Memperbarui soal
    public function adminEditSoalPsikotestFreeUpdate(Request $request, $id)
    {
        $request->validate([
            'question_text' => 'required|string|max:255',
            // 'dimension_id' => 'required|exists:dimensions,id',
            // 'nr' => 'required|in:N,R',
        ]);

        $question = Question::findOrFail($id);
        $question->update([
            'question_text' => $request->input('question_text'),
            // 'dimension_id' => $request->input('dimension_id'),
            // 'nr' => $request->input('nr'),
        ]);

        return redirect()->route('dashboard.psikotestfree.question.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Pertanyaan berhasil diupdate',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }

    // Menghapus soal
    public function adminEditSoalPsikotestFreeDestroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('dashboard.psikotestfree.question.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Pertanyaan berhasil dihapus',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }
}
