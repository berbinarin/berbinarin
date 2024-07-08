<?php

namespace App\Http\Controllers\PsikotestPaid;

use Illuminate\Http\Request;
use App\Models\PsikotestType;
use App\Models\UserPsikotestPaid;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserPsikotestPaidController extends Controller
{
    public function regPage1()
    {
        return view('moduls.psikotes-paid.reg-page-1');
    }

    public function postRegPage1(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'domicile' => 'required',
            'age' => 'required',
            'phone_number' => 'required',
        ]);

        $data = $request->all();

        $sessionData = $request->session()->get('psikotest-paid', []);
        $sessionData = array_merge($sessionData, $data);
        $request->session()->put('psikotest-paid', $sessionData);

        return redirect()->route('psikotest-paid.regPage2');
    }

    public function regPage2()
    {
        $psikotestTypes = PsikotestType::all();
        return view('moduls.psikotes-paid.reg-page-2', compact('psikotestTypes'));
    }

    public function postRegPage2(Request $request)
    {
        $request->validate([
            'service' => 'required',
            'psikotest_type_id' => 'required',
            'preference_schedule' => 'required',
        ]);

        $data = $request->all();

        $sessionData = $request->session()->get('psikotest-paid', []);
        $sessionData = array_merge($sessionData, $data);
        $request->session()->put('psikotest-paid', $sessionData);

        return redirect()->route('psikotest-paid.regPage3');
    }

    public function regPage3()
    {
        return view('moduls.psikotes-paid.reg-page-3');
    }

    public function postRegPage3(Request $request)
    {
        $request->validate([
            'reason' => 'required',
        ]);

        $data = $request->all();

        $sessionData = array_merge($request->session()->get('psikotest-paid'), $data);

        $password = $this->generatePassword($sessionData['fullname']);
        $hashedPassword = Hash::make($password);

        $this->saveUserData($sessionData, $hashedPassword);

        $request->session()->forget('psikotest-paid');

        return view('moduls.psikotes-paid.reg-page-4', compact('data', 'password'));
    }

    private function generatePassword($fullname)
    {
        $firstName = explode(' ', trim($fullname))[0];
        return $firstName . 'berbinar123!';
    }

    private function saveUserData(array $data, string $hashedPassword)
    {
        UserPsikotestPaid::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'domicile' => $data['domicile'],
            'age' => $data['age'],
            'phone_number' => $data['phone_number'],
            'service' => $data['service'],
            'psikotest_type_id' => $data['psikotest_type_id'],
            'preference_schedule' => $data['preference_schedule'],
            'reason' => $data['reason'],
            'password' => $hashedPassword,
        ]);
    }
}
