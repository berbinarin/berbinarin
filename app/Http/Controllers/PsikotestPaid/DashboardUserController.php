<?php

namespace App\Http\Controllers\PsikotestPaid;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\UserPsikotestPaid;

class DashboardUserController extends Controller
{
    public function userRegister()
    {
        // getAll user yang sudah register
        $users = UserPsikotestPaid::all();

        return view('moduls.psikotes-paid.dashboard.user-register', compact('users'));
    }

    public function userDetail($id)
    {
        // get user by id
        $user = UserPsikotestPaid::find($id);

        return view('moduls.psikotes-paid.dashboard.user-detail', compact('user'));
    }
}
