<?php

namespace App\Http\Controllers\Dashboard\ClassPM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berbinarp_user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthUserController extends Controller
{
    // SHOW SUCCESS VIEW
    public function success()
    {
        return view('moduls.berbinar-plus.success');
    }

    // SHOW LOGIN FORM
    public function showLogin()
    {
        return view('moduls.berbinar-plus.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('berbinarplus')->attempt($credentials)) {
            return redirect()->route('berbinarplus.dashboard');
        } else {
            return redirect()->route('berbinarplus.login')->withErrors('Login details are not valid');
        }
    }

    public function logout()
    {
        Auth::guard('berbinarplus')->logout();
        Alert::toast('Logout Sucessfully!', 'success')->autoClose(5000);

        return redirect()->route('berbinarplus.login');
    }

    public function dashboard()
    {
        return view('moduls.berbinar-plus.dashboard');
    }
}
