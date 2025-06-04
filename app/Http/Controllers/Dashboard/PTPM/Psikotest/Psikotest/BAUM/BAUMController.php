<?php
namespace App\Http\Controllers\Dashboard\PsikotestTestProductManagement\Psikotest\Psikotest\BAUM;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\BAUM\AnswerBaum;
use App\Models\PsikotestPaid\BAUM\QuestionBaum;
use App\Models\PsikotestPaid\BAUM\TestBaum;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BAUMController extends Controller
{
    public function showLanding(){
        $user = Auth::guard('psikotestpaid')->user();
        $psikotestTool = PsikotestTool::where('name', 'BAUM')->firstOrFail();

        return view('moduls.psikotes-paid.tools.BAUM.landing', compact('user', 'psikotestTool'));
    }

    public function start(PsikotestTool $psikotestTool)
    {
        $user = Auth::guard('psikotestpaid')->user();
        $psikotestTool = PsikotestTool::where('name', 'BAUM')->firstOrFail();

        // Create a new entry in the psikotest_paid_tests table
        $paidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $user->id,
            'psikotest_tool_id' => $psikotestTool->id
        ]);


        // Create a new entry in the test_baum table
        $testBaum = TestBaum::create([
            'psikotest_paid_test_id' => $paidTest->id,
        ]);

        // Redirect to the test page
        return redirect()->route('psikotest-paid.tool.BAUM.showQuestion', ['testBaum' => $testBaum->id, 'questionBaum' => 1]);
    }

    public function showQuestion(TestBaum $testBaum, QuestionBaum $questionBaum)
    {
        return view('moduls.psikotes-paid.tools.BAUM.question', compact('testBaum', 'questionBaum'));
    }

    public function submit(Request $request, TestBaum $testBaum, QuestionBaum $questionBaum)
    {
        $validatedData = $request->validate([
            'answer_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG|max:2048'
        ]);

        if ($request->hasFile('answer_image')) {
            $image = $request->file('answer_image');
            $path = $image->store('res/BAUM', 'public');

            AnswerBaum::create([
                'test_baum_id' => $testBaum->id,
                'question_baum_id' => $questionBaum->id,
                'answer' => $path,
            ]);
        }

        return redirect()->route('psikotest-paid.tool.BAUM.summary', ['testBaum' => $testBaum->id]);
    }

    public function summary(TestBaum $testBaum)
    {
        $psikotestPaidTest = PsikotestPaidTest::where('id', $testBaum->psikotestPaidTest->id)->first();
        $psikotestPaidTest->update(['status_progress' => true]);

        return view('moduls.psikotes-paid.tools.BAUM.summary', ['testId' => $testBaum->id]);
    }
}
