<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\DAP;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\DAP\AnswerDap;
use App\Models\PsikotestPaid\DAP\QuestionDap;
use App\Models\PsikotestPaid\DAP\TestDap;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DAPController extends Controller
{
    public function showLanding()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $psikotestTool = PsikotestTool::where('name', 'DAP')->firstOrFail();
        return view('moduls.psikotes-paid.tools.DAP.landing', compact('user', 'psikotestTool'));
    }
    public function start()
    {

        $user = Auth::guard('psikotestpaid')->user();
        $psikotestTool = PsikotestTool::where('name', 'DAP')->firstOrFail();

        // Create a new entry in the psikotest_paid_tests table
        $paidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $user->id,
            'psikotest_tool_id' => $psikotestTool->id
        ]);

        $testDap = TestDap::create([
            'psikotest_paid_test_id' => $paidTest->id,
        ]);

        // Redirect to the test page
        return redirect()->route('psikotest-paid.tool.DAP.showQuestion', ['testDap' => $testDap, 'questionDap' => 1]);
    }

    public function showQuestion(TestDap $testDap, QuestionDap $questionDap)
    {
        return view('moduls.psikotes-paid.tools.DAP.question', compact('testDap', 'questionDap'));
    }

    public function submit(Request $request, TestDap $testDap, QuestionDap $questionDap)
    {
        $validatedData = $request->validate([
            'answer_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG|max:2048'
        ]);

        if ($request->hasFile('answer_image')) {
            $image = $request->file('answer_image');
            $path = $image->store('res/DAP', 'public');

            AnswerDap::create([
                'test_dap_id' => $testDap->id,
                'question_dap_id' => $questionDap->id,
                'answer' => $path,
            ]);
        }
        if ($questionDap->id < 2) {
            return redirect()->route('psikotest-paid.tool.DAP.showQuestion', ['testDap' => $testDap->id, 'questionDap' => $questionDap->id + 1])
                ->with('current_question_number', $questionDap->id + 1);
        } else {
            return redirect()->route('psikotest-paid.tool.DAP.summary', ['testDap' => $testDap->id]);
        }
    }

    public function summary(TestDap $testDap)
    {
        $psikotestPaidTest = PsikotestPaidTest::where('id', $testDap->psikotestPaidTest->id)->first();
        $psikotestPaidTest->update(['status_progress' => true]);

        return view('moduls.psikotes-paid.tools.DAP.summary');
    }
}
