<?php

namespace App\Http\Controllers\PsikotestPaid\Tools\Biodata;

use Illuminate\Support\Facades\Auth;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\Biodata\QuestionCategory;
use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\Biodata\UserClinical;
use App\Models\PsikotestPaid\Biodata\Education;
use App\Models\PsikotestPaid\Biodata\Identity;
use App\Models\PsikotestPaid\Biodata\AnswerEssay;
use App\Models\PsikotestPaid\Biodata\Family;
use App\Models\PsikotestPaid\Biodata\FamilyStatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserClinicalController extends Controller
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
        $tool = PsikotestTool::where('name', 'BIODATA_KLINIS')->firstOrFail();
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.instruksi-bio', ['user' => $user, 'tool' => $tool]);
    }

    public function showPage($page)
    {
        switch ($page) {
            case '0':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataDiri-bio');
            case '1':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataLanjutan-bio');
            case '2':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.riwayatPend-bio');
            case '3':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.riwayatPend2-bio');
            case '4':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.riwayatPend3-bio');
            case '5':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataPasangan1-bio');
            case '6':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataPasangan2-bio');
            case '7':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataAyah1-bio',[
                    "family_statuses" => FamilyStatus::get()
                ]);
            case '8':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataAyah2-bio');
            case '9':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataIbu1-bio');
            case '10':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.dataIbu2-bio');
            case '11':
                $questionCategory = QuestionCategory::find(5);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[0]->id,
                    'question' => $questionCategory->question_essays[0]->question,
                    'page' => 12,
                    'index' => 0
                ]);
            case '12':
                $questionCategory = QuestionCategory::find(5);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[1]->id,
                    'question' => $questionCategory->question_essays[1]->question,
                    'page' => 13,
                    'index' => 1
                ]);
            case '13':
                $questionCategory = QuestionCategory::find(5);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[2]->id,
                    'question' => $questionCategory->question_essays[2]->question,
                    'page' => 14,
                    'index' => 2
                ]);
            case '14':
                $questionCategory = QuestionCategory::find(5);
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.isian1-bio', [
                    'question_essay_id' => $questionCategory->question_essays[3]->id,
                    'question' => $questionCategory->question_essays[3]->question,
                    'page' => 15,
                    'index' => 3
                ]);
            case '15':
                return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis.end-bio');
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

    public function postClinicalPage(Request $request)
    {
        if (!$request->session()->has('psikotest-paid-clinical')) {
            $request->session()->put('psikotest-paid-clinical', []);
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
                $data['educationable_type'] = UserClinical::class;
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
                $data['educationable_type'] = UserClinical::class;
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
                $data['educationable_type'] = UserClinical::class;
                break;

            case 6:
                $data = $request->validate([
                    'name_family.*' => 'nullable',
                    'gender_family.*' => 'nullable',
                    'age_family.*' => 'nullable',
                    'ethnic_family.*' => 'nullable',
                    'religion_family.*' => 'nullable',
                    'address_family.*' => 'nullable',
                ]);
                if (isset($data)) {
                    if($data['gender_family'][0] == 'Laki-laki')
                    {
                        $data['family_status_id'][0] = 2; //suami
                    }
                    else
                    {
                        $data['family_status_id'][0] = 3; //istri
                    }
                }
                break;

            case 7:
                $data = $request->validate([
                    'no_hp_family.*' => 'nullable',
                    'last_education_family.*' => 'nullable',
                    'job_family.*' => 'nullable',
                    'child_marriage.*' => 'nullable',
                ]);
                break;

            case 8:
                $data = $request->validate([
                    'name_family.*' => 'nullable',
                    'family_status_id.*' => 'nullable',
                    'gender_family.*' => 'nullable',
                    'age_family.*' => 'nullable',
                    'ethnic_family.*' => 'nullable',
                    'religion_family.*' => 'nullable',
                    'address_family.*' => 'nullable',
                ]);
                break;

            case 9:
                $data = $request->validate([
                    'no_hp_family.*' => 'nullable',
                    'last_education_family.*' => 'nullable',
                    'job_family.*' => 'nullable',
                    'child_marriage.*' => 'nullable',
                ]);
                break;

            case 10:
                $data = $request->validate([
                    'name_family.*' => 'nullable',
                    'gender_family.*' => 'nullable',
                    'age_family.*' => 'nullable',
                    'ethnic_family.*' => 'nullable',
                    'religion_family.*' => 'nullable',
                    'address_family.*' => 'nullable',
                ]);
                if (isset($data)) {
                    $data['family_status_id'][2] = 7;
                }
                break;

            case 11:
                $data = $request->validate([
                    'no_hp_family.*' => 'nullable',
                    'last_education_family.*' => 'nullable',
                    'job_family.*' => 'nullable',
                    'child_marriage.*' => 'nullable',
                ]);
                break;

            case 12:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserClinical::class;
                break;

            case 13:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserClinical::class;
                break;

            case 14:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserClinical::class;
                break;

            case 15:
                $data = $request->validate([
                    'question_essay_id.*' => 'required',
                    'answer.*' => 'required',
                ]);
                $data['answer_essayable_type'] = UserClinical::class;
                break;

                // Tambahkan case tambahan untuk halaman berikutnya
            default:
                return response()->json([
                    'message' => 'Invalid page number',
                ], 400);
        }

        // Ambil data session yang ada dan gabungkan dengan data baru
        $getSessionData = $request->session()->get('psikotest-paid-clinical', []);
        $sessionData = array_merge_recursive_distinct($getSessionData, $data);
        $request->session()->put('psikotest-paid-clinical', $sessionData);

        if ($page == 15) {
            $this->saveData($sessionData);
            $request->session()->forget('psikotest-paid');
        }

        // return response()->json([
        //     'message' => "Success store to session for page {$page}",
        //     'data' => $sessionData,
        // ]);
        return redirect()->route('psikotest-paid.tool.BIODATA_KLINIS.showPage', ['page' => $page]);
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
        DB::transaction(function () use ($data, &$userClinical, &$identity, &$education, &$answerEssay) {
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

            $userClinical = UserClinical::create([
                'user_psikotest_paid_id' => Auth::guard('psikotestpaid')->user()->id,
                'identity_id' => $identity->id,
            ]);

            foreach ($data['school_name'] as $key => $value) {
                if ($value != null)
                {
                    $education[] = Education::create([
                        'level_education_id' => $data['level_education_id'][$key],
                        'educationable_id' => $userClinical->id,
                        'educationable_type' => $data['educationable_type'],
                        'school_name' => $value,
                        'major' => $data['major'][$key] ?? null,
                        'year' => $data['year'][$key],
                    ]);
                }
            }

            foreach ($data['family_status_id'] as $key => $value) {
                if ($value != null)
                {
                    $family[] = Family::create([
                        'user_clinical_id' => $userClinical->id,
                        'family_status_id' => $value,
                        'name' => $data['name_family'][$key],
                        'gender' => $data['gender_family'][$key],
                        'age' => $data['age_family'][$key],
                        'ethnic' => $data['ethnic_family'][$key],
                        'religion' => $data['religion_family'][$key],
                        'address' => $data['address_family'][$key],
                        'no_hp' => $data['no_hp_family'][$key],
                        'last_education' => $data['last_education_family'][$key],
                        'job' => $data['job_family'][$key],
                        'child_marriage' => $data['child_marriage'][$key],
                    ]);
                }
            }

            foreach ($data['answer'] as $key => $value) {
                $answerEssay[] = AnswerEssay::create([
                    'question_essay_id' => $data['question_essay_id'][$key],
                    'answer_essayable_id' => $userClinical->id,
                    'answer_essayable_type' => $data['answer_essayable_type'],
                    'answer' => $value,
                ]);
            }
        });
        return response()->json([
            'message' => 'Going saveData',
            'data userEducation' => $userClinical,
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
    public function show(UserClinical $userClinical)
    {
        $userClinical->identity;
        $userClinical->educations;
        $userClinical->families;
        $userClinical->answer_essays;
        return response()->json([
            'data' => $userClinical
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserClinical $userClinical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserClinical $userClinical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserClinical $userClinical)
    {
        //
    }
}
