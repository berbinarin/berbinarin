<?php

namespace App\Http\Controllers\Dashboard\PTPM;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\UserPsikotestPaid;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PsikotestToolController extends Controller
{
  public function index()
  {
      $tools = PsikotestTool::all();
      $users = UserPsikotestPaid::all();
      return view('moduls.psikotes-paid.admin.admin', compact('tools', 'users'));
  }

  public function viewTests($userId)
  {
      $user = UserPsikotestPaid::findOrFail($userId);
      $tests = PsikotestPaidTest::where('user_psikotest_paid_id', $userId)->get();
      $tests->load('psikotestTool');
      return view('moduls.psikotes-paid.admin.tests', compact('user', 'tests'));
  }


  public function generateToken($id)
  {
      $tool = PsikotestTool::findOrFail($id);
      $tool->token = Str::random(8);
      $tool->save();

      return redirect()->back()->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Token berhasil digenerate',
                'icon'    => asset('assets/images/dashboard/success.webp'),
            ]);
  }

  public function deleteToken($id)
  {
      $tool = PsikotestTool::findOrFail($id);
      $tool->token = null;
      $tool->save();

      return redirect()->back()->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Token berhasil dihapus',
                'icon'    => asset('assets/images/dashboard/success.webp'),
            ]);
  }

  public function verifyToken(Request $request)
  {
      $toolId = $request->input('tool_id');
      $token = $request->input('token');

      $tool = PsikotestTool::findOrFail($toolId);

      if ($tool->token === $token) {
          $path = 'psikotest-paid.tool.' . $tool->name . '.showLanding';
          return redirect()->route($path)->with([
                'alert' => true,
                'type' => 'success',
                'title' => 'Berhasil!',
                'message' =>'Token Valid!',
                'icon' => asset('assets/images/dashboard/success.webp'),
            ]);
      }
      return redirect()->back()->with([
                'alert' => true,
                'type' => 'error',
                'title' => 'Gagal!',
                'message' =>'Token Salah!',
                'icon' => asset('assets/images/dashboard/error.webp'),
            ]);
  }
}
