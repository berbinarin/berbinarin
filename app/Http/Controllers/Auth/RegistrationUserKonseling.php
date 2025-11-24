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

            return redirect()->route('dashboard.index')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Pendaftaran berhasil dimasukkan.',
                'icon'    => asset('assets/images/dashboard/success.webp'),
            ]);
        } catch (\Exception $e) {
           return redirect()->back()->with([
                'alert'   => true,
                'type'    => 'error',
                'title'   => 'Gagal!',
                'message' => 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage(),
                'icon'    => asset('assets/images/dashboard/error.webp'),
            ]);
        }
    }
}
