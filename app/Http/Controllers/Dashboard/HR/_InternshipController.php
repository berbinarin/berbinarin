<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Hiring_Positions;

class InternshipController extends Controller
{
    public function register($id){
        $position = Hiring_Positions::where('id', $id)->first();
        return view('moduls.internship.RegistrasiInternshipBerbinar', ['position' => $position]);
    }
}
