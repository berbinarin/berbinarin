<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\SSCT;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SSCTController extends Controller
{
  public function showLanding(){
    $user = Auth::guard('psikotestpaid')->user();
    $tool = PsikotestTool::where('name', 'SSCT')->firstOrFail();
    return view('moduls.psikotes-paid.tools.SSCT.landing', ['user' => $user, 'tool' => $tool]);
  }
}
