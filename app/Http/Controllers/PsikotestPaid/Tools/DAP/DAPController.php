<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\DAP;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DAPController extends Controller
{
  public function showLanding(){
    $user = Auth::guard('psikotestpaid')->user();
    $tool = PsikotestTool::where('name', 'DAP')->firstOrFail();
    return view('moduls.psikotes-paid.tools.DAP.landing', ['user' => $user, 'tool' => $tool]);
  }
}
