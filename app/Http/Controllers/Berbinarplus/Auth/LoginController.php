<?php

namespace App\Http\Controllers\Berbinarplus\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('berbinar-plus.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('berbinarplus')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            return redirect()->route('berbinarplus.dashboard');
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('berbinarplus')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('berbinarplus.login');
    }
}
