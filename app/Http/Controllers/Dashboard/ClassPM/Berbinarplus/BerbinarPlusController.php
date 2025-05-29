<?php

namespace App\Http\Controllers\Dashboard\BerbinarPlus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerbinarPlusController extends Controller
{
        // BERBINARPLUS
    public function berbinarplusUserData()
    {
        $berbinarpUser = Berbinarp_user::all();
        $berbinarpEnrollments = Berbinarp_enrollment::all();

        return view('moduls.dashboard.berbinar-plus.berbinarplususer', ["berbinarpUser" => $berbinarpUser, 'berbinarpEnrollments' => $berbinarpEnrollments]);
    }
}
