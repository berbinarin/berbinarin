<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\PapiKostick;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PapiKostickController extends Controller
{
  public function showLanding(){
    $user = Auth::guard('psikotestpaid')->user();
    $tool = PsikotestTool::where('name', 'PAPI Kostick')->firstOrFail();
    return view('moduls.psikotes-paid.tools.papi-kostick.landing', ['user' => $user, 'tool' => $tool]);
  }
}
