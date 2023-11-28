<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    //

    public function HalamanRegister()
    {
        //
        return view ("RegisterUser");
    }

    public function Register(UserRequest $request)
    {
        try {
            $validated = $request->validated();
    
            User::create([
                'username' => $validated["username"],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
                "role" => $validated["role"]
            ]);
            
            Alert::toast('Formulir Pendaftaran Berhasil', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan saat menyimpan data', 'error');
            return redirect()->back();
        }
    }

    public function Login(LoginRequest $request){
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials) ) {
            // Authenticated and role matches
              if (auth()->user()->role == 'Admin' && auth()->user()->role == 'HR') {

                Alert::toast('Welcome!', 'success');
                return redirect()->route('dashboard');
            
            }else{

                Alert::toast('Welcome!', 'success');
                return redirect()->route('home');
            }
        }
    
        // Authentication failed
        Alert::toast('Invalid Email-Address And Password', 'error');

        return redirect()->route('login');
    
    }
    public function Logout(){

        Auth::logout();
        return redirect()->route('home');
    }

}
