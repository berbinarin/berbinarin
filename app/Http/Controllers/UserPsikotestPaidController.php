<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\UserPsikotestPaid;
use Illuminate\Support\Facades\Hash;

class PsikotestPaidController extends Controller
{
    public function index()
    {
        return view('user-psikotest-paid-page-1');
    }

    public function regPage1(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'domicile' => 'required',
            'age' => 'required',
            'phone_number' => 'required',
        ]);

        $data = $request->all();

        $request->session()->put('psikotest-paid', $data);

        return view('user-psikotest-paid.reg-page-2', compact('data'));
    }

    public function regPage2(Request $request)
    {
        $request->validate([
            'service' => 'required',
            'psikotest_type_id' => 'required',
            'preference_schedule' => 'required',
        ]);

        $data = $request->all();

        $request->session()->put('psikotest-paid', $data);

        return view('user-psikotest-paid.reg-page-3', compact('data'));
    }

    public function regPage3(Request $request)
    {
        $request->validate([
            'reason' => 'required',
        ]);

        $data = $request->all();

        $sessionData = array_merge($request->session()->get('psikotest-paid'), $data);

        $password = $this->generatePassword();
        $hashedPassword = Hash::make($password);

        $this->saveUserData($sessionData, $hashedPassword);

        $request->session()->forget('psikotest-paid');

        return view('user-psikotest-paid.reg-page-4', compact('data', 'password'));
    }

    /**
     * Generate a random password.
     *
     * @return string
     */
    private function generatePassword()
    {
        return Str::random(8);
    }

    /**
     * Save the user data into the database.
     *
     * @param array $data
     * @param string $hashedPassword
     * @return void
     */
    private function saveUserData(array $data, string $hashedPassword)
    {
        UserPsikotestPaid::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'domicile' => $data['domicile'],
            'age' => $data['age'],
            'phone_number' => $data['phone_number'],
            'service' => $data['service'],
            'psikotest_type_id' => $data['psikotest_type_id'],
            'preference_schedule' => $data['preference_schedule'],
            'reason' => $data['reason'],
            'password' => $hashedPassword, // store the hashed password
        ]);
    }
}
