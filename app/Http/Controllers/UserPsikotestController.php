<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\UserPsikotest;
use Illuminate\Http\Request;

class UserPsikotestController extends Controller
{
    // Menampilkan formulir untuk mengisi biodata
    public function show($test_id)
    {
        // Ambil data tes berdasarkan `test_id`
        $test = Test::findOrFail($test_id);

        // Kirimkan `test_date` ke view
        return view('biodata.show', compact('test', 'test_id'));
    }

    // Menyimpan biodata ke dalam database
    public function store(Request $request, $test_id)
    {
        // Validasi data biodata
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'date_of_birth' => 'required|date',
            'email' => 'required|email',
        ]);

        // Simpan biodata
        $userPsikotest = UserPsikotest::create([
            'name' => $request->input('name'),
            'gender' => $request->input('gender'),
            'date_of_birth' => $request->input('date_of_birth'),
            'email' => $request->input('email'),
            'test_id' => $test_id,
        ]);

        // Ambil ID user yang baru saja dibuat
        $user_id = $userPsikotest->id;

        // Arahkan ke halaman hasil dengan menyertakan ID tes dan ID user
        return redirect()->route('question.show', ['test_id' => $test_id, 'user_id' => $user_id, 'question_order' => 1]);
    }
}
