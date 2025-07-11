<?php

namespace App\Http\Controllers\Dashboard\PTPM\Psikotest\Psikotest\Biodata;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\Biodata\AnswerEssay;
use App\Models\PsikotestPaid\Biodata\Course;
use App\Models\PsikotestPaid\Biodata\Education;
use App\Models\PsikotestPaid\Biodata\Experience;
use App\Models\PsikotestPaid\Biodata\Identity;
use App\Models\PsikotestPaid\Biodata\QuestionCategory;
use App\Models\PsikotestPaid\Biodata\UserCommunity;
use App\Models\PsikotestPaid\PsikotestTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserCommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([200]);
    }

    public function showLanding()
    {
        $user = Auth::guard('psikotestpaid')->user();
        $tool = PsikotestTool::where('name', 'BIODATA_KOMUNITAS')->firstOrFail();
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.instruksi-bio', ['user' => $user, 'tool' => $tool]);
    }

    public function showPage($page)
    {
        switch ($page) {
            case '0':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.dataDiri-bio');
            case '1':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.dataLanjutan-bio');
            case '2':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.riwayatPend-bio');
            case '3':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.riwayatPend2-bio');
            case '4':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.riwayatPend3-bio');
            case '5':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.riwayatKeg1-bio');
            case '6':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.riwayatKeg2-bio');
            case '7':
                $questionCategory = QuestionCategory::find(3);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[0]->id,
                    'question' => $questionCategory->question_essays[0]->question,
                    'page' => 8,
                    'index' => 0
                ]);
            case '8':
                $questionCategory = QuestionCategory::find(3);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[1]->id,
                    'question' => $questionCategory->question_essays[1]->question,
                    'page' => 9,
                    'index' => 1
                ]);
            case '9':
                $questionCategory = QuestionCategory::find(3);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[2]->id,
                    'question' => $questionCategory->question_essays[2]->question,
                    'page' => 10,
                    'index' => 2
                ]);
            case '10':
                $questionCategory = QuestionCategory::find(3);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[3]->id,
                    'question' => $questionCategory->question_essays[3]->question,
                    'page' => 11,
                    'index' => 3
                ]);
            case '11':
                $questionCategory = QuestionCategory::find(3);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[4]->id,
                    'question' => $questionCategory->question_essays[4]->question,
                    'page' => 12,
                    'index' => 4
                ]);
            case '12':
                $questionCategory = QuestionCategory::find(3);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[5]->id,
                    'question' => $questionCategory->question_essays[5]->question,
                    'page' => 13,
                    'index' => 5
                ]);
            case '13':
                $questionCategory = QuestionCategory::find(3);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[6]->id,
                    'question' => $questionCategory->question_essays[6]->question,
                    'page' => 14,
                    'index' => 6
                ]);
            case '14':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas.end-bio');
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

    public function postCommunityPage(Request $request)
    {
        if (!$request->session()->has('psikotest-paid-community')) {
            $request->session()->put('psikotest-paid-community', []);
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
                $data['educationable_type'] = UserCommunity::class;
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
                $data['educationable_type'] = UserCommunity::class;
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
                $data['educationable_type'] = UserCommunity::class;
                break;

            case 6:
                $data = $request->validate([
                    'course_name.*' => 'nullable',
                    'organizer_course.*' => 'nullable',
                    'year_course.*' => 'nullable',
                ]);
                break;

            case 7:
                $data = $request->validate([
                    'company_name.*' => 'nullable',
                    'last_position.*' => 'nullable',
                ]);
                break;


            case 8:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserCommunity::class;
                break;

            case 9:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserCommunity::class;
                break;

            case 10:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserCommunity::class;
                break;

            case 11:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserCommunity::class;
                break;

            case 12:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserCommunity::class;
                break;

            case 13:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserCommunity::class;
                break;

            case 14:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserCommunity::class;
                break;

                // Tambahkan case tambahan untuk halaman berikutnya
            default:
                return response()->json([
                    'message' => 'Invalid page number',
                ], 400);
        }

        // Ambil data session yang ada dan gabungkan dengan data baru
        $getSessionData = $request->session()->get('psikotest-paid-community', []);
        $sessionData = array_merge_recursive_distinct($getSessionData, $data);
        $request->session()->put('psikotest-paid-community', $sessionData);
        // dd($sessionData);
        if ($page == 14) {
            $this->saveData($sessionData);
            $request->session()->forget('psikotest-paid');
        }

        // return response()->json([
        //     'message' => "Success store to session for page {$page}",
        //     'data' => $sessionData,
        // ]);

        return redirect()->route('psikotest-paid.tool.BIODATA_KOMUNITAS.showPage', ['page' => $page]);
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
        DB::transaction(function () use ($data, &$userCommunity, &$identity, &$education, &$answerEssay) {
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

            $userCommunity = UserCommunity::create([
                'user_psikotest_paid_id' => Auth::guard('psikotestpaid')->user()->id,
                'identity_id' => $identity->id,
            ]);

            foreach ($data['school_name'] as $key => $value) {
                if ($value != null)
                {
                    $education[] = Education::create([
                        'level_education_id' => $data['level_education_id'][$key],
                        'educationable_id' => $userCommunity->id,
                        'educationable_type' => $data['educationable_type'],
                        'school_name' => $value,
                        'major' => $data['major'][$key] ?? null,
                        'year' => $data['year'][$key],
                    ]);
                }

            }

            foreach ($data['course_name'] as $key => $value) {
                if ($value != null)
                {
                    $course[] = Course::create([
                        'user_community_id' => $userCommunity->id,
                        'course_name' => $value,
                        'organizer_course' => $data['organizer_course'][$key],
                        'year_course' => $data['year_course'][$key],
                    ]);
                }
            }

            foreach ($data['company_name'] as $key => $value) {
                if ($value != null)
                {
                    $experience[] = Experience::create([
                        'user_community_id' => $userCommunity->id,
                        'company_name' => $value,
                        'last_position' => $data['last_position'][$key],
                    ]);
                }

            }

            foreach ($data['answer'] as $key => $value) {
                $answerEssay[] = AnswerEssay::create([
                    'question_essay_id' => $data['question_essay_id'][$key],
                    'answer_essayable_id' => $userCommunity->id,
                    'answer_essayable_type' => $data['answer_essayable_type'],
                    'answer' => $value,
                ]);
            }
        });
        return response()->json([
            'message' => 'Going saveData',
            'data userEducation' => $userCommunity,
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
    public function show(UserCommunity $userCommunity)
    {
        $userCommunity->identity;
        $userCommunity->educations;
        $userCommunity->courses;
        $userCommunity->experiences;
        $userCommunity->answer_essays;
        return response()->json([
            'data' => $userCommunity
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserCommunity $userCommunity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserCommunity $userCommunity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserCommunity $userCommunity)
    {
        //
    }
}
