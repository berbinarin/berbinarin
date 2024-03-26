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
            
            Alert::toast('Formulir Pendaftaran Berhasil', 'success')->autoClose(5000);;
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan saat menyimpan data' .$e->getMessage(), 'error')->autoClose(5000);
            return redirect()->back();
        }
    }

    public function Login(LoginRequest $request){
        $credentials = $request->only('username', 'password');
    
        if (Auth::attempt($credentials) ) {
            // Authenticated and role matches
              if (auth()->user()->role == 'Admin' || auth()->user()->role == 'HR' || auth()->user()->role == 'Konselling') {

                Alert::toast('Login Sucessfully!', 'success')->autoClose(5000);;
                return redirect()->route('dashboard');
            
            }else{

                Alert::toast('Login Sucessfully', 'success')->autoClose(5000);;
                return redirect()->route('home');
            }
        }
    
        // Authentication failed
        Alert::toast('Invalid Email-Address And Password', 'error')->autoClose(5000);;

        return redirect()->route('dashboard.login');
    
    }
    public function Logout(){

        Auth::logout();
        Alert::toast('Logout Sucessfully!', 'success')->autoClose(5000);;

        return redirect()->route('dashboard.login');
    }

}
