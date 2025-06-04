<?php

namespace App\Http\Controllers\Dashboard\PsikotestTestProductManagement\Psikotest\Psikotest\TesEsai;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\TesEsai\AnswerTesEsai;
use App\Models\PsikotestPaid\TesEsai\QuestionTesEsai;
use App\Models\PsikotestPaid\TesEsai\TestTesEsai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TesEsaiController extends Controller
{
    public function showLanding()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $psikotestTool = PsikotestTool::where('name', 'Tes Esai')->firstOrFail();
        return view('moduls.psikotes-paid.tools.tes-esai.landing', compact('user', 'psikotestTool'));
    }

    public function start()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $psikotestTool = PsikotestTool::where('name', 'Tes Esai')->firstOrFail();

        // Create a new entry in the psikotest_paid_tests table
        $paidTest = PsikotestPaidTest::create([
            'user_psikotest_paid_id' => $user->id,
            'psikotest_tool_id' => $psikotestTool->id
        ]);

        // Create a new entry in the test_tes_esai table
        $testTesEsai = TestTesEsai::create([
            'psikotest_paid_test_id' => $paidTest->id,
            'tool' => 'Tes Esai',
            'user_id' => $user->id
        ]);

        // Redirect to the test page
        return redirect()->route('psikotest-paid.tool.Tes Esai.showQuestion', ['testTesEsai' => $testTesEsai->id, 'questionTesEsai' => 1]);
    }

    public function showQuestion(TestTesEsai $testTesEsai, QuestionTesEsai $questionTesEsai)
    {
        $existingAnswer = AnswerTesEsai::where('test_tes_esai_id', $testTesEsai->id)
            ->where('question_tes_esai_id', $questionTesEsai->id)->first();

        return view('moduls.psikotes-paid.tools.tes-esai.question', compact('testTesEsai', 'questionTesEsai', 'existingAnswer'));
    }

    public function submit(Request $request, TestTesEsai $testTesEsai, QuestionTesEsai $questionTesEsai)
    {
        $validateData = $request->validate([
            'answer' => 'nullable|string'
        ]);

        $existingAnswer = AnswerTesEsai::where('test_tes_esai_id', $testTesEsai->id)
            ->where('question_tes_esai_id', $questionTesEsai->id)->first();

        if ($existingAnswer) {
            $existingAnswer->update([
                'answer' => $validateData['answer']
            ]);
        } else {
            AnswerTesEsai::create([
                'test_tes_esai_id' => $testTesEsai->id,
                'question_tes_esai_id' => $questionTesEsai->id,
                'answer' => $validateData['answer'],
            ]);
        }

        if ($questionTesEsai->id < 6) {
            return redirect()->route('psikotest-paid.tool.Tes Esai.showQuestion', ['testTesEsai' => $testTesEsai->id, 'questionTesEsai' => $questionTesEsai->id + 1]);
        } else {
            return redirect()->route('psikotest-paid.tool.Tes Esai.summary', ['testTesEsai' => $testTesEsai]);
        }
    }
    public function summary(TestTesEsai $testTesEsai)
    {
        $psikotestPaidTest = PsikotestPaidTest::where('id', $testTesEsai->psikotestPaidTest->id)->first();
        $psikotestPaidTest->update(['status_progress' => true]);

        return view('moduls.psikotes-paid.tools.tes-esai.summary');
    }
}
