<?php

namespace App\Http\Controllers\PsikotestPaid;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\CategoryPsikotestType;
use App\Models\PsikotestPaid\PsikotestType;
use App\Models\PsikotestPaid\UserPsikotestPaid;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserPsikotestPaidController extends Controller
{
    public function showPage($page)
    {
        switch ($page) {
            case '1':
                return view('moduls.psikotes-paid.reg-page-1');
            case '2':
                $psikotestCategoryTypes = CategoryPsikotestType::all();
                $psikotestTypes = PsikotestType::all();
                return view('moduls.psikotes-paid.reg-page-2', compact('psikotestTypes', 'psikotestCategoryTypes'));
            case '3':
                return view('moduls.psikotes-paid.reg-page-3');
            case '4':
                return view('moduls.psikotes-paid.reg-page-4');
            default:
                abort(404);
        }
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
        $request->session()->put('psikotest-paid', $data);

        return redirect()->route('psikotest-paid.showPage', ['page' => '2']);
    }

    public function postRegPage2(Request $request)
    {
        $request->validate([
            'service' => 'required',
            'psikotest_type_id' => 'required',
            'preference_schedule' => 'required',
        ]);

        $data = $request->only('service', 'psikotest_type_id', 'preference_schedule');
        $sessionData = array_merge($request->session()->get('psikotest-paid'), $data);
        $request->session()->put('psikotest-paid', $sessionData);

        return redirect()->route('psikotest-paid.showPage', ['page' => '3']);
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

        return redirect()->route('psikotest-paid.showPage', ['page' => '4']);
    }

    public function showLogin()
    {
        return view('moduls.psikotes-paid.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('psikotestpaid')->attempt($credentials)) {
            Alert::toast('Login Sucessfully!', 'success')->autoClose(5000);
            return redirect()->route('psikotest-paid.showLanding');
        } else {
            Alert::toast('Invalid Email-Address And Password', 'error')->autoClose(5000);;
            return redirect()->route('psikotest-paid.login');
        }
    }

    public function logout()
    {
        Auth::guard('psikotestpaid')->logout();
        Alert::toast('Logout Sucessfully!', 'success')->autoClose(5000);

        return redirect()->route('psikotest-paid.login');
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

    // NANTI UNTUK LANDING/DASHBOARD PAKE FUNGSI DARI FILE LAIN AJA
    public function showLanding(){
        $user = Auth::guard('psikotestpaid')->user();
        return view('moduls.psikotes-paid.landing', ['user' => $user]);
    }
}
