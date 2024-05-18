<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\UserPsikotest;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Menampilkan formulir untuk mengisi feedback
    public function show($test_id, $user_id)
    {
        // Ambil data user berdasarkan `user_id`
        $user = UserPsikotest::findOrFail($user_id);

        return view('feedback.show', compact('test_id', 'user_id', 'user'));
    }

    // Menyimpan feedback ke dalam database dan mengarahkan ke halaman hasil
    public function store(Request $request, $test_id, $user_id)
    {
        // Validasi data feedback
        $request->validate([
            'experience' => 'required|string',
            'opinion' => 'required|string',
            'suggestion' => 'required|string',
            'social_share' => 'required|string',
        ]);

        // Simpan feedback
        Feedback::create([
            'user_id' => $user_id,
            'experience' => $request->input('experience'),
            'opinion' => $request->input('opinion'),
            'suggestion' => $request->input('suggestion'),
            'social_share' => $request->input('social_share'),
        ]);

        // Redirect ke halaman hasil dengan menyertakan ID tes dan ID user
        return redirect()->route('test.index', ['test_id' => $test_id, 'user_id' => $user_id]);
    }
}
