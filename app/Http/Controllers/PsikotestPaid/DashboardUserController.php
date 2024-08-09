<?php

namespace App\Http\Controllers\PsikotestPaid;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestType;
use App\Models\PsikotestPaid\UserPsikotestPaid;

class DashboardUserController extends Controller
{
    public function userRegister()
    {
        $users = UserPsikotestPaid::all();

        return view('moduls.psikotes-paid.dashboard.user-register', compact('users'));
    }

    public function userDetail($id)
    {
        $user = UserPsikotestPaid::find($id);

        return view('moduls.psikotes-paid.dashboard.user-detail', compact('user'));
    }

    public function priceListIndividu()
    {
        $psikotestIndividu = PsikotestType::where('category_psikotest_type_id', 2)->get();

        return view('moduls.psikotes-paid.dashboard.price-list-individu', compact('psikotestIndividu'));
    }

    public function priceListCommunity()
    {
        $psikotestCommunity = PsikotestType::where('category_psikotest_type_id', 1)->get();

        return view('moduls.psikotes-paid.dashboard.price-list-community', compact('psikotestCommunity'));
    }

    public function priceListCorporate()
    {
        $psikotestCorporate = PsikotestType::where('category_psikotest_type_id', 4)->get();

        return view('moduls.psikotes-paid.dashboard.price-list-corporate', compact('psikotestCorporate'));
    }

    public function priceListEducationalInstitution()
    {
        $psikotestSchool = PsikotestType::where('category_psikotest_type_id', 3)->get();

        return view('moduls.psikotes-paid.dashboard.price-list-school', compact('psikotestSchool'));
    }
}
