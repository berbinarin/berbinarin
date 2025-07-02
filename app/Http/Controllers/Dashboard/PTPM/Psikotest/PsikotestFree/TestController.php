<?php

namespace App\Http\Controllers\Dashboard\PTPM\Psikotest\PsikotestFree;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TestController extends Controller
{
    public function index()
    {
        // return view('test.index');
        return view('moduls.psikotes.start');
    }

    public function store(Request $request)
    {
        // Buat entri tes baru dengan tanggal saat ini
        $test = new Test();
        $test->test_date = Carbon::now();
        $test->save();

        // Simpan ID tes ke dalam session
        $request->session()->put('test_id', $test->id);

        // Arahkan ke halaman biodata dengan menyertakan ID tes
        return redirect()->route('biodata.show', ['test_id' => $test->id]);
    }
}
