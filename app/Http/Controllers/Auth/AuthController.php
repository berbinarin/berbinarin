<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function register(UserRequest $request)
    {
        try {
            $validated = $request->validated();

            User::create([
                'username' => $validated["username"],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
                "role" => $validated["role"]
            ]);


            Alert::toast('Formulir Pendaftaran Berhasil', 'success')->autoClose(5000);;
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan saat menyimpan data' . $e->getMessage(), 'error')->autoClose(5000);
            return redirect()->back();
        }
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticated(LoginRequest $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication success
            Alert::toast('Login Sucessfully!', 'success')->autoClose(5000);;
            return redirect()->route('dashboard.index');

        } else {
            // Authentication failed
            Alert::toast('Invalid Email-Address And Password', 'error')->autoClose(5000);;
            return redirect()->route('auth.login');
        }
    }

    public function Logout()
    {
        Auth::logout();
        Alert::toast('Logout Sucessfully!', 'success')->autoClose(5000);;

        return redirect()->route('auth.login');
    }
}
