<?php

namespace App\Http\Controllers\Arteri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArteriController extends Controller
{
    public function index(){
        return view('moduls.landing-new.arteri');
    }
}
