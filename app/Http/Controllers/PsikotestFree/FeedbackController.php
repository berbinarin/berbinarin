<?php

namespace App\Http\Controllers\PsikotestFree;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Models\UserPsikotest;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    // Menampilkan formulir untuk mengisi feedback
    public function show($test_id, $user_id)
    {
        // Verifikasi session untuk test_id
        if (!session()->has('test_id') || session('test_id') != $test_id) {
            return redirect()->route('test.index');
        }

        // Ambil data user berdasarkan `user_id`
        $user = UserPsikotest::findOrFail($user_id);

        return view('moduls.psikotes.feedback', compact('test_id', 'user_id', 'user'));
    }

    // Menyimpan feedback ke dalam database dan mengarahkan ke halaman hasil
    public function store(Request $request, $test_id, $user_id)
    {
        // Verifikasi session untuk test_id
        if (!session()->has('test_id') || session('test_id') != $test_id) {
            return redirect()->route('test.index');
        }

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'experience' => 'required|string',
        ]);

        Feedback::create([
            'user_id' => $user_id,
            'rating' => $request->input('rating'),
            'experience' => $request->input('experience'),
        ]);

        return redirect()->route('result.show', ['test_id' => $test_id, 'user_id' => $user_id]);
    }
}
