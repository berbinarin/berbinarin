<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        // return view('moduls.berbinar-plus.auth.registrasi');
        return view('moduls.berbinar-plus.auth.HomeBerbinarPlus');
    }

    public function success(){
        return view('moduls.berbinar-plus.success');
    }

    // buat testing form selanjutnya tanpa tailwindcss
    public function html(){
        return view('moduls.landing.berbinar-plus-daftar-I');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'age' => 'required|integer',
            'wa_number' => 'required|string|max:15',
            'email' => 'required|string|email|max:255',
            'education' => 'required|string|max:255',
        ]);

        // Simpan data atau proses lebih lanjut
        // ...

         return redirect()->back()->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Registrasi Berhasil',
                'icon'    => asset('assets/images/dashboard/success.webp'),
            ]);
    }
}
