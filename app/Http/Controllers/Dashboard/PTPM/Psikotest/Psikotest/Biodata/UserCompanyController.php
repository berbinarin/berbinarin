<?php

namespace App\Http\Controllers\Dashboard\PsikotestTestProductManagement\Psikotest\Psikotest\Biodata;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\Biodata\AnswerEssay;
use App\Models\PsikotestPaid\Biodata\Education;
use App\Models\PsikotestPaid\Biodata\Identity;
use App\Models\PsikotestPaid\Biodata\QuestionCategory;
use App\Models\PsikotestPaid\Biodata\UserCompany;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $uc = UserCompany::find(3);
        return response()->json([
            'data' => $uc->answer_essays[0]->question_essay
        ], 200);
    }

    public function showLanding()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'BIODATA_PERUSAHAAN')->firstOrFail();
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.instruksi-bio', ['user' => $user, 'tool' => $tool]);
    }

    public function showPage($page)
    {
        switch ($page) {
            case '0':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.dataDiri-bio');
            case '1':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.dataLanjutan-bio');
            case '2':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.riwayatPend-bio');
            case '3':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.riwayatPend2-bio');
            case '4':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.riwayatPend3-bio');
            case '5':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.riwayatPend4-bio');
            case '6':
                $questionCategory = QuestionCategory::find(1);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[0]->id,
                    'question' => $questionCategory->question_essays[0]->question,
                    'page' => 7,
                    'index' => 0
                ]);
            case '7':
                $questionCategory = QuestionCategory::find(1);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[1]->id,
                    'question' => $questionCategory->question_essays[1]->question,
                    'page' => 8,
                    'index' => 1
                ]);
            case '8':
                $questionCategory = QuestionCategory::find(1);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[2]->id,
                    'question' => $questionCategory->question_essays[2]->question,
                    'page' => 9,
                    'index' => 2
                ]);
            case '9':
                $questionCategory = QuestionCategory::find(1);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[3]->id,
                    'question' => $questionCategory->question_essays[3]->question,
                    'page' => 10,
                    'index' => 3
                ]);
            case '10':
                $questionCategory = QuestionCategory::find(1);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[4]->id,
                    'question' => $questionCategory->question_essays[4]->question,
                    'page' => 11,
                    'index' => 4
                ]);
            case '11':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan.end-bio');
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

    /**
     * Make a post registration with more than a page.
     */
    public function postCompanyPage(Request $request)
    {
        if (!$request->session()->has('psikotest-paid-company')) {
            $request->session()->put('psikotest-paid-company', []);
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
                    'year.*' => 'nullable',
                    'major.*' => 'nullable'
                ]);
                $data['major'][0] = null;
                $data['major'][1] = null;
                $data['educationable_type'] = UserCompany::class;
                break;

            case 4:
                $data = $request->validate([
                    'level_education_id.*' => 'nullable',
                    'school_name.*' => 'nullable',
                    'year.*' => 'nullable',
                    'major.*' => 'nullable'
                ]);
                $data['major'][2] = null;
                $data['educationable_type'] = UserCompany::class;
                break;

            case 5:
                $data = $request->validate([
                    'level_education_id.*' => 'nullable',
                    'school_name.*' => 'nullable',
                    'year.*' => 'nullable',
                    'major.*' => 'nullable'
                ]);
                $startingIndex = 4;
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
                $data['educationable_type'] = UserCompany::class;
                break;

            case 6:
                $data = $request->validate([
                    'level_education_id.*' => 'nullable',
                    'school_name.*' => 'nullable',
                    'year.*' => 'nullable',
                    'major.*' => 'nullable'
                ]);
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
                $data['educationable_type'] = UserCompany::class;
                break;

            case 7:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserCompany::class;
                break;

            case 8:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserCompany::class;
                break;

            case 9:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserCompany::class;
                break;

            case 10:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserCompany::class;
                break;

            case 11:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserCompany::class;
                break;

                // Tambahkan case tambahan untuk halaman berikutnya
            default:
                return response()->json([
                    'message' => 'Invalid page number',
                ], 400);
        }

        // Ambil data session yang ada dan gabungkan dengan data baru
        $getSessionData = $request->session()->get('psikotest-paid-company', []);
        $sessionData = array_merge_recursive_distinct($getSessionData, $data);
        $request->session()->put('psikotest-paid-company', $sessionData);
        // dd($sessionData);

        if ($page == 11) {
            $this->saveData($sessionData);
            $request->session()->forget('psikotest-paid');
        }

        // return response()->json([
        //     'message' => "Success store to session for page {$page}",
        //     'data' => $sessionData,
        // ]);
        return redirect()->route('psikotest-paid.tool.BIODATA_PERUSAHAAN.showPage', ['page' => $page]);
    }

    private function saveData($data)
    {
        DB::transaction(function () use ($data, &$userCompany, &$identity, &$education, &$answerEssay) {
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

            $userCompany = UserCompany::create([
                'user_psikotest_paid_id' => Auth::guard('psikotestpaid')->user()->id,
                'identity_id' => $identity->id,
            ]);

            foreach ($data['school_name'] as $key => $value) {
                if ($value != null) {
                    $education[] = Education::create([
                        'level_education_id' => $data['level_education_id'][$key],
                        'educationable_id' => $userCompany->id,
                        'educationable_type' => $data['educationable_type'],
                        'school_name' => $value,
                        'major' => $data['major'][$key] ?? null,
                        'year' => $data['year'][$key],
                    ]);
                }
            }

            foreach ($data['answer'] as $key => $value) {
                $answerEssay[] = AnswerEssay::create([
                    'question_essay_id' => $data['question_essay_id'][$key],
                    'answer_essayable_id' => $userCompany->id,
                    'answer_essayable_type' => $data['answer_essayable_type'],
                    'answer' => $value,
                ]);
            }
        });
        return response()->json([
            'message' => 'Going saveData',
            'data userCompany' => $userCompany,
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
    public function show(UserCompany $userCompany)
    {
        return response()->json([
            'data' => $userCompany->educations
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserCompany $userCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserCompany $userCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserCompany $userCompany)
    {
        //
    }
}
