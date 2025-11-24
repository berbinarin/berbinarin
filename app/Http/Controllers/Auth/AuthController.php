<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Jenssegers\Agent\Agent;

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


             return redirect()->back()->with([
                'alert' => true,
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' =>'Pendaftaran Berhasil',
                'icon' => asset('assets/images/dashboard/success.webp'),
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'alert' => true,
                'type' => 'error',
                'title' => 'Gagal!',
                'message' =>'Terjadi kesalahan, silahkan coba lagi',
                'icon' => asset('assets/images/dashboard/error.webp'),
            ]);
        }
    }

    public function login()
    {
         $agent = new Agent();

        if ($agent->isMobile() && !$agent->isTablet()) {
            return view('auth.block-mobile');
        }
        return view('auth.login');
    }

    public function authenticated(LoginRequest $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
           return redirect()->route('dashboard.index')->with([
                'alert' => true,
                'type' => 'success',
                'title' => 'Login Berhasil',
                'message' =>'Silahkan masuk',
                'icon' => asset('assets/images/dashboard/success.webp'),
            ]);

        } else {
            return redirect()->route('auth.login')->with([
                'alert' => true,
                'type' => 'error',
                'title' => 'Gagal!',
                'message' =>'Username atau Password salah',
                'icon' => asset('assets/images/dashboard/error.webp'),
            ]);
        }
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('auth.login')->with([
                'alert' => true,
                'type' => 'success',
                'title' => 'Logout Berhasil',
                'message' =>'Sampai jumpa lagi 😘',
                'icon' => asset('assets/images/dashboard/success.webp'),
            ]);
    }
}
