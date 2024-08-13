<?php

namespace App\Http\Controllers\PsikotestPaid;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\PsikotestType;
use App\Models\PsikotestPaid\UserPsikotestPaid;

class DashboardUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['login']);
        $this->middleware('role:Admin,HR,Konselling,PsikotestFree,psikotestpaid')->except(['login']);
    }

    public function userRegister()
    {
        // $users = UserPsikotestPaid::all();
        $users = UserPsikotestPaid::with('psikotestType.categoryPsikotestType')->get();
        return view('moduls.dashboard.psikotes-paid.data', compact('users'));
    }

    public function userDetail($id)
    {
        $user = UserPsikotestPaid::with('psikotestType.categoryPsikotestType')->find($id);

        return view('moduls.dashboard.psikotes-paid.data-detail', compact('user'));
    }

    public function psikotestTool()
    {
        $tools = PsikotestTool::all();

        return view('moduls.dashboard.psikotes-paid.data-test', compact('tools'));
    }

    public function generateToken($id)
    {
        $tool = PsikotestTool::findOrFail($id);
        $tool->token = Str::random(8);
        $tool->save();

        return redirect()->back()->with('success', 'Token generated successfully!');
    }

    public function deleteToken($id)
    {
        $tool = PsikotestTool::findOrFail($id);
        $tool->token = null;
        $tool->save();

        return redirect()->back()->with('success', 'Token deleted successfully!');
    }

    public function priceListIndividu()
    {
        $psikotestIndividu = PsikotestType::where('category_psikotest_type_id', 2)->get();

        return view('moduls.dashboard.psikotes-paid.individu', compact('psikotestIndividu'));
    }

    public function priceListCommunity()
    {
        $psikotestCommunity = PsikotestType::where('category_psikotest_type_id', 1)->get();

        return view('moduls.dashboard.psikotes-paid.komunitas', compact('psikotestCommunity'));
    }

    public function priceListCorporate()
    {
        $psikotestCorporate = PsikotestType::where('category_psikotest_type_id', 4)->get();

        return view('moduls.dashboard.psikotes-paid.perusahaan', compact('psikotestCorporate'));
    }

    public function priceListEducationalInstitution()
    {
        $psikotestSchool = PsikotestType::where('category_psikotest_type_id', 3)->get();

        return view('moduls.dashboard.psikotes-paid.pendidikan', compact('psikotestSchool'));
    }
}
