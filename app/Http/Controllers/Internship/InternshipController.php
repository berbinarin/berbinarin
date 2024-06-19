<?php

namespace App\Http\Controllers\Internship;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InternshipController extends Controller
{
    public function register(){
        return view('moduls.internship.RegistrasiInternshipBerbinar');
    }
}