<?php

namespace App\Http\Controllers\Dashboard\PTPM\Psikotest\Psikotest\HTP;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\HTP\AnswerHtp;
use App\Models\PsikotestPaid\HTP\QuestionHtp;
use App\Models\PsikotestPaid\HTP\TestHtp;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HTPController extends Controller
{
    public function showLanding()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $psikotestTool = PsikotestTool::where('name', 'HTP')->firstOrFail();

        $questionHtp = QuestionHtp::first();

        return view('moduls.psikotes-paid.tools.HTP.landing', compact('user', 'psikotestTool', 'questionHtp'));
    }

    public function start()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $psikotestTool = PsikotestTool::where('name', 'HTP')->firstOrFail();

        // Create a new entry in the psikotest_paid_tests table
        $paidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $user->id,
            'psikotest_tool_id' => $psikotestTool->id
        ]);

        // Create a new entry in the test_baum table
        $testHtp = TestHtp::create([
            'psikotest_paid_test_id' => $paidTest->id,
        ]);

        // Redirect to the test page
        return redirect()->route('psikotest-paid.tool.HTP.showQuestion', ['testHtp' => $testHtp->id, 'questionHtp' => 1]);
    }

    public function showQuestion(TestHtp $testHtp, QuestionHtp $questionHtp)
    {

        return view('moduls.psikotes-paid.tools.HTP.question', compact('testHtp', 'questionHtp'));
    }

    public function submitAnswer(Request $request, TestHtp $testHtp, QuestionHtp $questionHtp)
    {
        if ($request->answer_image) {
            $validatedData = $request->validate([
                'answer_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG|max:2048'
            ]);
        }

        if ($questionHtp->id >= 4) {
            if ($request->hasFile('answer_image')) {
                $image = $request->file('answer_image');
                $path = $image->store('res/HTP', 'public');

                AnswerHtp::create([
                    'test_htp_id' => $testHtp->id,
                    'question_htp_id' => $questionHtp->id,
                    'answer' => $path
                ]);
            }
            return redirect()->route('psikotest-paid.tool.HTP.summary', ['testHtp' => $testHtp->id]);
        } else {
            return redirect()->route('psikotest-paid.tool.HTP.showQuestion', ['testHtp' => $testHtp->id, 'questionHtp' => $questionHtp->id + 1]);
        }
    }


    public function summary(TestHtp $testHtp)
    {
        $psikotestPaidTest = PsikotestPaidTest::where('id', $testHtp->psikotestPaidTest->id)->first();
        $psikotestPaidTest->update([
            'status_progress' => true,
        ]);

        return view('moduls.psikotes-paid.tools.HTP.summary');
    }
}
