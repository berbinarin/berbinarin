<?php

namespace App\Http\Controllers\Berbinarplus\Auth;

use App\Http\Controllers\Controller;
use App\Models\Berbinarp_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('berbinar-plus.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:berbinarp_users',
            'password' => 'required|string|min:8|confirmed',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'age' => 'required|integer',
            'wa_number' => 'required|string|max:255',
            'last_education' => 'required|string|max:255',
            'knowing_source' => 'required|string|max:255',
        ]);

        try {
            $user = Berbinarp_user::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'gender' => $request->gender,
                'age' => $request->age,
                'wa_number' => $request->wa_number,
                'last_education' => $request->last_education,
                'knowing_source' => $request->knowing_source,
            ]);
            Alert::toast('Formulir Pendaftaran Berhasil', 'success')->autoClose(5000);;
            //Auth::login($user);
            return redirect()->route('berbinarplus.login');
        }catch(\Exception $e){
            Alert::toast('Terjadi kesalahan saat menyimpan data' .$e->getMessage(), 'error')->autoClose(5000);
            return redirect()->back();
        }
    }
}
