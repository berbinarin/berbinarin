<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Test;
use App\Models\UserPsikotest;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    // Menampilkan halaman hasil tes
    public function show($test_id, $user_id)
    {
        // Ambil objek Test dan UserPsikotest berdasarkan ID
        $test = Test::findOrFail($test_id);
        $user = UserPsikotest::findOrFail($user_id);

        // Ambil hasil tes berdasarkan test_id dan user_id
        $result = Result::where('test_id', $test_id)
            // ->where('user_id', $user_id)
            ->firstOrFail();

        // Tampilkan view result/show.blade.php dengan data yang diperlukan
        return view('result.show', compact('test', 'user', 'result'));
    }

    // Mengarahkan ke halaman feedback
    public function redirectToFeedback($test_id, $user_id)
    {
        return redirect()->route('feedback.show', ['test_id' => $test_id, 'user_id' => $user_id]);
    }
}
