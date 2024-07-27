<?php

namespace App\Http\Controllers\PsikotestPaid\PapiKostick;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\PapiKostick\TestPapiKostick;

class TestController extends Controller
{
    public function instruksi($tool_id)
    {
        $tool = PsikotestTool::findOrFail($tool_id);

        // Logic to handle different instructions based on tool ID
        switch ($tool->name) {
            case 'Papi Kostick':
                return view('moduls.psikotes-paid.papi-kostick.instruksi');
                // Add cases for other tools
            default:
                abort(404);
        }
    }

    public function store(Request $request)
    {
        $test = new TestPapiKostick();
        // dd($test->id);
        $test->save();

        $request->session()->put('papikostick', $test->id);

        return redirect()->route('psikotest-paid.papi-kostick.instruksi', ['test_id' => $test->id]);
    }
}
