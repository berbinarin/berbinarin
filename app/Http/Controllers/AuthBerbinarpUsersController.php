<?php

namespace App\Http\Controllers;

use App\Models\Berbinarp_users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthBerbinarpUsersController extends Controller
{
    public function index()
    {
        return view('berbinar-plus.auth.login');
    }

    public function RegisterView()
    {
        return view('berbinar-plus.auth.register');
    }

    public function RegisterPost(Request $request)
    {
        dd($request->all());
    }


    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Buat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'User successfully registered'], 201);
    }
}
