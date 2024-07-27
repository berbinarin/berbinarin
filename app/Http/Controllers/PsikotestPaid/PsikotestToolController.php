<?php

namespace App\Http\Controllers\PsikotestPaid;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PsikotestToolController extends Controller
{
  public function index()
  {
      $tools = PsikotestTool::all();
      return view('moduls.psikotes-paid.admin.admin', compact('tools'));
  }

  public function generateToken($id)
  {
      $tool = PsikotestTool::findOrFail($id);
      $tool->token = Str::random(8);
      $tool->save();

      return redirect()->back()->with('success', 'Token generated successfully!');
  }

  public function deleteToken($id)
  {
      $tool = PsikotestTool::findOrFail($id);
      $tool->token = null;
      $tool->save();

      return redirect()->back()->with('success', 'Token deleted successfully!');
  }

  public function verifyToken(Request $request)
  {
      $toolId = $request->input('tool_id');
      $token = $request->input('token');

      $tool = PsikotestTool::findOrFail($toolId);

      if ($tool->token === $token) {
          $path = 'psikotest-paid.tool.' . $tool->name . '.showLanding';
          Alert::toast('Valid Token!', 'success')->autoClose(5000);
          return redirect()->route($path);
      }
      Alert::toast('Invalid Token!', 'error')->autoClose(5000);
      return back();
  }
}
