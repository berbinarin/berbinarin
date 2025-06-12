<?php

namespace App\Http\Controllers\Dashboard\HR;

use App\Http\Controllers\Controller;
use App\Models\Hiring_Positions;

class _InternshipController extends Controller
{
    public function register($id){
        $position = Hiring_Positions::where('id', $id)->first();
        return view('moduls.internship.RegistrasiInternshipBerbinar', ['position' => $position]);
    }

    public function store(){}
}
