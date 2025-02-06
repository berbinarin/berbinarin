<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\HTP;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HTPController extends Controller
{
  public function showLanding(){
    $user = Auth::guard('psikotestpaid')->user();
    $tool = PsikotestTool::where('name', 'HTP')->firstOrFail();
    return view('moduls.psikotes-paid.tools.HTP.landing', ['user' => $user, 'tool' => $tool]);
  }

  public function instruksi_b()
  {
    return view('moduls.psikotes-paid.tools.htp.instruksi-b');
  }

  public function instruksi_c()
  {
    return view('moduls.psikotes-paid.tools.htp.instruksi-c');
  }

  public function instruksi_d()
  {
    return view('moduls.psikotes-paid.tools.htp.instruksi-d');
  }

  public function summary()
  {
    return view('moduls.psikotes-paid.tools.htp.summary');
  }
}
