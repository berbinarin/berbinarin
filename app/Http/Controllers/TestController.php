<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TestController extends Controller
{
    // Menampilkan halaman daftar tes
    public function index()
    {
        return view('test.index'); // Pastikan file view ini ada
    }

    // Membuat entri tes baru dengan tanggal saat ini dan mengarahkan ke halaman soal pertama
    public function store(Request $request)
    {
        $test = new Test();
        $test->test_date = Carbon::now(); // Menggunakan Carbon untuk waktu sekarang
        $test->save();

        // Arahkan ke halaman soal pertama (misalkan /tests/{id}/questions/1)
        return redirect()->route('question.show', ['test_id' => $test->id, 'question_order' => 1]);
    }
}
