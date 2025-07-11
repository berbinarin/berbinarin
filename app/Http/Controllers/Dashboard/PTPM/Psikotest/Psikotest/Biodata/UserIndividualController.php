<?php

namespace App\Http\Controllers\Dashboard\PTPM\Psikotest\Psikotest\Biodata;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\Biodata\AnswerEssay;
use App\Models\PsikotestPaid\Biodata\Education;
use App\Models\PsikotestPaid\Biodata\Identity;
use App\Models\PsikotestPaid\Biodata\QuestionCategory;
use App\Models\PsikotestPaid\Biodata\UserIndividual;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserIndividualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(200);
    }

    public function showLanding()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'BIODATA_INDIVIDUAL')->firstOrFail();
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.instruksi-bio', ['user' => $user, 'tool' => $tool]);
    }

    public function showPage($page)
    {
        switch ($page) {
            case '0':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.dataDiri-bio');
            case '1':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.dataLanjutan-bio');
            case '2':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.riwayatPend-bio');
            case '3':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.riwayatPend2-bio');
            case '4':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.riwayatPend3-bio');
            case '5':
                $questionCategory = QuestionCategory::find(4);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[0]->id,
                    'question' => $questionCategory->question_essays[0]->question,
                    'page' => 6,
                    'index' => 0
                ]);
            case '6':
                $questionCategory = QuestionCategory::find(4);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[1]->id,
                    'question' => $questionCategory->question_essays[1]->question,
                    'page' => 7,
                    'index' => 1
                ]);
            case '7':
                $questionCategory = QuestionCategory::find(4);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[2]->id,
                    'question' => $questionCategory->question_essays[2]->question,
                    'page' => 8,
                    'index' => 2
                ]);
            case '8':
                $questionCategory = QuestionCategory::find(4);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[3]->id,
                    'question' => $questionCategory->question_essays[3]->question,
                    'page' => 9,
                    'index' => 3
                ]);
            case '9':
                $questionCategory = QuestionCategory::find(4);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[4]->id,
                    'question' => $questionCategory->question_essays[4]->question,
                    'page' => 10,
                    'index' => 4
                ]);
            case '10':
                $questionCategory = QuestionCategory::find(4);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[5]->id,
                    'question' => $questionCategory->question_essays[5]->question,
                    'page' => 11,
                    'index' => 5
                ]);
            case '11':
                $questionCategory = QuestionCategory::find(4);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[6]->id,
                    'question' => $questionCategory->question_essays[6]->question,
                    'page' => 12,
                    'index' => 6
                ]);
            case '12':
                $questionCategory = QuestionCategory::find(4);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[7]->id,
                    'question' => $questionCategory->question_essays[7]->question,
                    'page' => 13,
                    'index' => 7
                ]);
            case '13':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.individual.end-bio');
            default:
                abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function postIndividualPage(Request $request)
    {
        if (!$request->session()->has('psikotest-paid-individual')) {
            $request->session()->put('psikotest-paid-individual', []);
        }
        $page = $request->input('page');
        $data = [];
        switch ($page) {
            case 1:
                $data = $request->validate([
                    'fullname' => 'required',
                    'no_ktp' => 'required',
                    'place_of_birth' => 'required',
                    'date_of_birth' => 'required',
                    'gender' => 'required',
                    'marriage_status' => 'required',
                    'no_hp' => 'required',
                    'address' => 'required',
                ]);
                break;

            case 2:
                $data = $request->validate([
                    'email' => 'required|email',
                    'work_unit' => 'required',
                    'current_position' => 'required',
                    'desired_position' => 'required',
                    'instagram' => 'required',
                    'facebook' => 'required',
                    'x' => 'required',
                ]);
                break;

            case 3:
                $data = $request->validate([
                    'level_education_id.*' => 'nullable',
                    'school_name.*' => 'nullable',
                    'start_year.*' => 'nullable',
                    'end_year.*' => 'nullable',
                    'major.*' => 'nullable'
                ]);
                $this->yearData($data);
                $data['major'][0] = null;
                $data['major'][1] = null;
                $data['educationable_type'] = UserIndividual::class;
                break;

            case 4:
                $data = $request->validate([
                    'level_education_id.*' => 'nullable',
                    'school_name.*' => 'nullable',
                    'start_year.*' => 'nullable',
                    'end_year.*' => 'nullable',
                    'year.*' => 'nullable',
                    'major.*' => 'nullable'
                ]);
                $this->yearData($data);
                $startingIndex = 3;
                $data['level_education_id'] = array_combine(
                    range($startingIndex, $startingIndex + count($data['level_education_id']) - 1),
                    $data['level_education_id']
                );

                $data['school_name'] = array_combine(
                    range($startingIndex, $startingIndex + count($data['school_name']) - 1),
                    $data['school_name']
                );

                $data['year'] = array_combine(
                    range($startingIndex, $startingIndex + count($data['year']) - 1),
                    $data['year']
                );

                $data['major'] = array_combine(
                    range($startingIndex, $startingIndex + count($data['major']) - 1),
                    $data['major']
                );
                $data['educationable_type'] = UserIndividual::class;
                break;

            case 5:
                $data = $request->validate([
                    'level_education_id.*' => 'nullable',
                    'school_name.*' => 'nullable',
                    'start_year.*' => 'nullable',
                    'end_year.*' => 'nullable',
                    'year.*' => 'nullable',
                    'major.*' => 'nullable'
                ]);
                $this->yearData($data);
                $startingIndex = 20;
                $data['level_education_id'] = array_combine(
                    range($startingIndex, $startingIndex + count($data['level_education_id']) - 1),
                    $data['level_education_id']
                );

                $data['school_name'] = array_combine(
                    range($startingIndex, $startingIndex + count($data['school_name']) - 1),
                    $data['school_name']
                );

                $data['year'] = array_combine(
                    range($startingIndex, $startingIndex + count($data['year']) - 1),
                    $data['year']
                );

                $data['major'] = array_combine(
                    range($startingIndex, $startingIndex + count($data['major']) - 1),
                    $data['major']
                );
                $data['educationable_type'] = UserIndividual::class;
                break;

            case 6:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserIndividual::class;
                break;

            case 7:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserIndividual::class;
                break;

            case 8:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserIndividual::class;
                break;

            case 9:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserIndividual::class;
                break;

            case 10:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserIndividual::class;
                break;

            case 11:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserIndividual::class;
                break;

            case 12:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserIndividual::class;
                break;

            case 13:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserIndividual::class;
                break;

                //Tambahkan case tambahan untuk halaman berikutnya
            default:
                return response()->json([
                    'message' => 'Invalid page number',
                ], 400);
        }

        // Ambil data session yang ada dan gabungkan dengan data baru
        $getSessionData = $request->session()->get('psikotest-paid-individual', []);
        $sessionData = array_merge_recursive_distinct($getSessionData, $data);
        $request->session()->put('psikotest-paid-individual', $sessionData);

        if ($page == 13) {
            $this->saveData($sessionData);
            $request->session()->forget('psikotest-paid');
        }

        // return response()->json([
        //     'message' => "Success store to session for page {$page}",
        //     'data' => $sessionData,
        // ]);
        return redirect()->route('psikotest-paid.tool.BIODATA_INDIVIDUAL.showPage', ['page' => $page]);
    }

    private function yearData(&$data)
    {
        if (isset($data['start_year'])) {
            $data['year'] = [];
            foreach ($data['start_year'] as $key => $start_year) {
                $end_year = $data['end_year'][$key] ?? '';
                $data['year'][$key] = "$start_year - $end_year";
            }
            unset($data['start_year']);
            unset($data['end_year']);
        }
    }

    private function saveData($data)
    {
        DB::transaction(function () use ($data, &$userIndividual, &$identity, &$education, &$answerEssay) {
            // Simpan data ke tabel identities
            $identity = Identity::create([
                'fullname' => $data['fullname'],
                'no_ktp' => $data['no_ktp'],
                'place_of_birth' => $data['place_of_birth'],
                'date_of_birth' => $data['date_of_birth'],
                'gender' => $data['gender'],
                'marriage_status' => $data['marriage_status'],
                'no_hp' => $data['no_hp'],
                'address' => $data['address'],
                'email' => $data['email'],
                'work_unit' => $data['work_unit'],
                'current_position' => $data['current_position'],
                'desired_position' => $data['desired_position'],
                'x' => $data['x'],
                'facebook' => $data['facebook'],
                'instagram' => $data['instagram'],
            ]);

            $userIndividual = UserIndividual::create([
                'user_psikotest_paid_id' => Auth::guard('psikotestpaid')->user()->id,
                'identity_id' => $identity->id,
            ]);

            foreach ($data['school_name'] as $key => $value) {
                $education[] = Education::create([
                    'level_education_id' => $data['level_education_id'][$key],
                    'educationable_id' => $userIndividual->id,
                    'educationable_type' => $data['educationable_type'],
                    'school_name' => $value,
                    'major' => $data['major'][$key] ?? null,
                    'year' => $data['year'][$key],
                ]);
            }

            foreach ($data['answer'] as $key => $value) {
                $answerEssay[] = AnswerEssay::create([
                    'question_essay_id' => $data['question_essay_id'][$key],
                    'answer_essayable_id' => $userIndividual->id,
                    'answer_essayable_type' => $data['answer_essayable_type'],
                    'answer' => $value,
                ]);
            }
        });
        return response()->json([
            'message' => 'Going saveData',
            'data userIndividual' => $userIndividual,
            'data identity' => $identity,
            'data education' => $education,
            'data answerEssay' => $answerEssay,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserIndividual $userIndividual)
    {
        $userIndividual->identity;
        $userIndividual->educations;
        $userIndividual->answer_essays;
        return response()->json([
            'data'=> $userIndividual
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserIndividual $userIndividual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserIndividual $userIndividual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserIndividual $userIndividual)
    {
        //
    }
}
