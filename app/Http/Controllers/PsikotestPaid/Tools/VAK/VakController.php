<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\VAK;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\PsikotestPaid\PsikotestTool;

class VakController extends Controller
{
    public function showLanding()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'VAK')->firstOrFail();
        return view('moduls.psikotes-paid.tools.VAK.landing', ['user' => $user, 'tool' => $tool]);
    }
}
