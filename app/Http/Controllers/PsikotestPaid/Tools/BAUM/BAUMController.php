<?php
namespace App\Http\Controllers\PsikotestPaid\Tools\BAUM;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\BAUM\AnswerBaum;
use App\Models\PsikotestPaid\BAUM\QuestionBaum;
use App\Models\PsikotestPaid\BAUM\TestBaum;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BAUMController extends Controller
{
    public function showLanding(){
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'BAUM')->firstOrFail();
        return view('moduls.psikotes-paid.tools.BAUM.landing', ['user' => $user, 'tool' => $tool]);
    }

    public function startTest(Request $request)
    {
        $userId = $request->user_id;
        $toolId = $request->tool_id;

        // Create a new entry in the psikotest_paid_tests table
        $paidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $userId,
            'psikotest_tool_id' => $toolId
        ]);

        // Create a new entry in the test_baum table
        $test = TestBaum::create([
            'psikotest_paid_test_id' => $paidTest->id,
            'tool' => 'Tes Esai',
            'user_id' => $userId
        ]);

        // Redirect to the test page
        return redirect()->route('psikotest-paid.tool.BAUM.showTest', ['testId' => $test->id]);
    }

    public function showTest($testId)
    {
        $test = TestBaum::where('id', $testId)->firstOrFail();
        $questions = QuestionBaum::all();

        return view('moduls.psikotes-paid.tools.BAUM.test', ['test' => $test, 'questions' => $questions]);
    }

    public function submitAnswer(Request $request)
    {
        $validatedData = $request->validate([
            'test_id' => 'required|exists:test_baum,id',
            'question_id' => 'required|exists:question_baum,id',
            'answer_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,JPG,PNG,JPEG|max:2048'
        ]);

        $testId = $validatedData['test_id'];
        $questionId = $validatedData['question_id'];
        $userId = Auth::guard('psikotestpaid')->id();

        if ($request->hasFile('answer_image')) {
            $image = $request->file('answer_image');
            $path = $image->store('res/BAUM', 'public');

            AnswerBaum::create([
                'test_baum_id' => $testId,
                'question_baum_id' => $questionId,
                'answer' => $path,
                'user_id' => $userId
            ]);
        }

        return redirect()->route('psikotest-paid.tool.BAUM.summary', ['testId' => $testId]);
    }

    public function showSummary($testId)
    {
        return view('moduls.psikotes-paid.tools.BAUM.summary', ['testId' => $testId]);
    }
}
