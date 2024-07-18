<?php

namespace App\Http\Controllers\PsikotestFree;

use App\Models\Test;
use App\Models\Result;
use Illuminate\Http\Request;
use App\Models\UserPsikotest;
use App\Http\Controllers\Controller;

class ResultController extends Controller
{
    public function show($test_id, $user_id)
    {
        if (!session()->has('test_id') || session('test_id') != $test_id) {
            return redirect()->route('test.index');
        }

        $test = Test::findOrFail($test_id);
        $user = UserPsikotest::findOrFail($user_id);
        $result = Result::where('test_id', $test_id)->firstOrFail();

        return view('moduls.psikotes.hasiltes', compact('test', 'user', 'result'));
    }

    public function finishTest($test_id, $user_id)
    {
        if (!session()->has('test_id') || session('test_id') != $test_id) {
            // Menampilkan notifikasi penyelesaian psikotes & mengarahkan ke halaman psikotes home
            // Simpan notifikasi ke dalam sesi
            session()->flash('notif', 'VerifPsikotes');

            // Redirect ke halaman psikotes home
            return redirect()->route('psikotestHome');
        }

        // Hapus session
        session()->forget('test_id');
        session()->forget('user_id');

        // Redirect ke halaman feedback
        session()->flash('notif', 'VerifPsikotes');
        return redirect()->route('psikotestHome');
    }
}
