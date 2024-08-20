<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\HTP;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HTPController extends Controller
{
  public function showLanding()
  {
    $user = Auth::guard('psikotestpaid')->user();
    $tool = PsikotestTool::where('name', 'HTP')->firstOrFail();
    return view('moduls.psikotes-paid.tools.HTP.landing', ['user' => $user, 'tool' => $tool]);
  }

  public function instruksi1()
  {
    return view('moduls.psikotes-paid.tools.HTP.instruksi-1');
  }

  public function instruksi2()
  {
    return view('moduls.psikotes-paid.tools.HTP.instruksi-2');
  }

  public function instruksi3()
  {
    return view('moduls.psikotes-paid.tools.HTP.instruksi-3');
  }

  public function instruksi4()
  {
    return view('moduls.psikotes-paid.tools.HTP.instruksi-4');
  }
}
