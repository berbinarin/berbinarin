<?php

namespace App\Http\Controllers\Dashboard\PTPM\Psikotest\PsikotestFree;

use App\Http\Controllers\Controller;
use App\Models\Test;
use App\Models\UserPsikotest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserPsikotestFreeController extends Controller
{
    // Menampilkan formulir untuk mengisi biodata
    public function show()
    {
        // // Verifikasi sesi untuk test_id
        // if (!session()->has('test_id') || session('test_id') != $test_id) {
        //     return redirect()->route('test.index');
        // }

        // // Ambil data tes berdasarkan `test_id`
        // $test = Test::findOrFail($test_id);

        return view('moduls.psikotes.biodata');
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

        // Simpan user_id ke dalam session
        session()->put('user_id', $user_id);

        // Arahkan ke halaman hasil dengan menyertakan ID tes dan ID user
        return redirect()->route('question.show', ['test_id' => $test_id, 'user_id' => $user_id, 'question_order' => 1]);
    }

    public function destroy(string $id)
    {
        //
        try {

            $userPsikotes = UserPsikotest::find($id);
            if (!$userPsikotes) {
                throw new \Exception('Data tidak ditemukan.'); // Atau gunakan jenis Exception yang sesuai
            }
            $userPsikotes->delete();

            Alert::success('Success ', 'Data Berhasil Delete');


            return redirect("/dashboard/admin/data");
        } catch (\Exception $e) {
            return redirect()->route("/dashboard/admin/data")->with([
                'alert'   => true,
                'type'    => 'error',
                'title'   => 'Gagal!',
                'message' => 'Terjadi kesalahan saat menghapus data: ' . $e->getMessage(),
                'icon'    => asset('assets/images/dashboard/error.png'),
            ]);
        }
    }

    public function edit($id)
    {
        $userPsikotes = UserPsikotest::find($id);
        if (!$userPsikotes) {
            return response()->json(['error' => 'Data tidak ditemukan.'], 404);
        }
        return response()->json($userPsikotes);
    }

    // Method to update question data
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'gender' => 'required|string',
            'date_of_birth' => 'required|timestamp',
            'email' => 'required|string',
            'test_date' => 'required|timestamp',
            // Add other validation rules as necessary
        ]);

        try {
            $userPsikotes = UserPsikotest::find($id);
            if (!$userPsikotes) {
                return response()->json([
                'alert'   => true,
                'type'    => 'error',
                'title'   => 'Gagal!',
                'message' => 'Data tidak ditemukan.',
                'icon'    => asset('assets/images/dashboard/error.png'),
            ], 404);
            }

            $userPsikotes->update($request->all());

            return response()->json([
            'alert'   => true,
            'type'    => 'success',
            'title'   => 'Berhasil!',
            'message' => 'Data berhasil diperbarui.',
            'icon'    => asset('assets/images/dashboard/success.png'),
        ]);
        } catch (\Exception $e) {
            return response()->json([
            'alert'   => true,
            'type'    => 'error',
            'title'   => 'Gagal!',
            'message' => 'Terjadi kesalahan saat memperbarui data: ' . $e->getMessage(),
            'icon'    => asset('assets/images/dashboard/error.png'),
        ], 500);
        }
    }
}
