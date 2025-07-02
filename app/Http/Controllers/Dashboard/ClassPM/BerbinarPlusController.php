<?php

namespace App\Http\Controllers\Dashboard\ClassPM;

use App\Http\Controllers\Controller;
use App\Models\Berbinarp_enrollment;
use App\Models\Berbinarp_user;
use Illuminate\Http\Request;

class BerbinarPlusController extends Controller
{
    // BERBINARPLUS
    public function index()
    {
        $berbinarpUser = Berbinarp_user::all();
        $berbinarpEnrollments = Berbinarp_enrollment::all();

        return view('dashboard.class-pm.berbinar-plus.index', ["berbinarpUser" => $berbinarpUser, 'berbinarpEnrollments' => $berbinarpEnrollments]);
    }
}
