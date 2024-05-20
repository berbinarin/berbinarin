<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TestController extends Controller
{
    public function index()
    {
        return view('test.index');
    }

    // Membuat entri tes baru dengan tanggal saat ini dan mengarahkan ke halaman soal pertama
    public function store(Request $request)
    {
        $test = new Test();
        $test->test_date = Carbon::now();
        $test->save();

        // buatkan session untuk menyimpan ID tes
        $request->session()->put('test_id', $test->id);

        return redirect()->route('biodata.show', ['test_id' => $test->id]);
    }
}
