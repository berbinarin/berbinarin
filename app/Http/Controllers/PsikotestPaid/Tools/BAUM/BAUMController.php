<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\BAUM;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BAUMController extends Controller
{
  public function showLanding(){
    $user = Auth::guard('psikotestpaid')->user();
    $tool = PsikotestTool::where('name', 'BAUM')->firstOrFail();
    return view('moduls.psikotes-paid.tools.BAUM.landing', ['user' => $user, 'tool' => $tool]);
  }
}
