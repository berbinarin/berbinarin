<?php

namespace App\Http\Controllers\Dashboard\ClassPM;

use App\Http\Controllers\Controller;
use App\Models\Berbinarp_enrollments;
use App\Models\Berbinarp_user;
use App\Models\Berbinarp_class;
use Illuminate\Http\Request;

class BerbinarPlusController extends Controller
{
    // BERBINARPLUS
    public function index()
    {
        $berbinarpEnrollments = Berbinarp_enrollments::with('user')->get();
        $berbinarpUsers = Berbinarp_user::all();
        $berbinarpClasses = Berbinarp_class::all();
        return view('dashboard.class-pm.berbinar-plus.index', compact('berbinarpEnrollments', 'berbinarpUsers', 'berbinarpClasses'));
    }

    public function users()
    {
        $berbinarpEnrollments = Berbinarp_enrollments::with('user')->get();
        $berbinarpUsers = Berbinarp_user::all();
        $berbinarpClasses = Berbinarp_class::all();
        return view('dashboard.class-pm.berbinar-plus.user.index', compact('berbinarpEnrollments', 'berbinarpUsers', 'berbinarpClasses'));
    }
}
