<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserKonselingRequest;
use App\Models\userKonseling;
use RealRashid\SweetAlert\Facades\Alert;


class RegistrationUserKonseling extends Controller
{
    //

    public function Register(UserKonselingRequest $request)
    {
        try {
            $validated = $request->validated();

            userKonseling::create([
                'nama_lengkap' => $validated["nama_lengkap"],
                'email' => $validated['email'],
                'tanggal' => $validated['tanggal'],
                'jenis_kelamin' => $validated['jenis_kelamin'],
                'tanggal_mengikuti_test' => $validated['tanggal_mengikuti_test'],
            ]);

            Alert::toast('Formulir Pendaftaran Berhasil', 'success')->autoClose(5000);;
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan saat menyimpan data' .$e->getMessage(), 'error')->autoClose(5000);
            return redirect()->back();
        }
    }
}
