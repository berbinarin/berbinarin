<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PsikotestPaid\BAUM\TestBaum;
use App\Models\PsikotestPaid\Biodata\UserClinical;
use App\Models\PsikotestPaid\Biodata\UserCommunity;
use App\Models\PsikotestPaid\Biodata\UserCompany;
use App\Models\PsikotestPaid\Biodata\UserEducation;
use App\Models\PsikotestPaid\Biodata\UserIndividual;
use App\Models\PsikotestPaid\CategoryPsikotestType;
use App\Models\PsikotestPaid\DAP\TestDap;
use App\Models\PsikotestPaid\EPI\EpiAnswer;
use App\Models\PsikotestPaid\HTP\TestHtp;
use App\Models\PsikotestPaid\OCEAN\ResultOcean;
use App\Models\PsikotestPaid\OCEAN\TestOcean;
use App\Models\PsikotestPaid\PsikotestPaidTest;
use App\Models\PsikotestPaid\PsikotestPaidTestimonial;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\PsikotestType;
use App\Models\PsikotestPaid\RMIB\CategoryStatementRmib;
use App\Models\PsikotestPaid\RMIB\TestRmib;
use App\Models\PsikotestPaid\TesEsai\AnswerTesEsai;
use App\Models\PsikotestPaid\TesEsai\TestTesEsai;
use App\Models\PsikotestPaid\UserPsikotestPaid;
use App\Models\PsikotestPaid\VAK\AnswerVak;
use App\Models\PsikotestPaid\VAK\ResultVak;
use App\Models\PsikotestPaid\VAK\TestVak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DashboardUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['login']);
        $this->middleware('role:Admin,HR,Konselling,PsikotestFree,psikotestpaid')->except(['login']);
    }

    public function addUserRegister(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'domicile' => 'required',
            'age' => 'required',
            'phone_number' => 'required',
            'service' => 'required',
            'psikotest_type_id' => 'required',
            'preference_schedule' => 'required',
            'reason' => 'required',
        ]);

        $firstName = explode(' ', trim($request->fullname))[0];

        $password = $firstName . 'berbinar123!';
        $hashedPassword = Hash::make($password);

        UserPsikotestPaid::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'gender' => $request->gender,
            'domicile' => $request->domicile,
            'age' => $request->age,
            'phone_number' => $request->phone_number,
            'service' => $request->service,
            'psikotest_type_id' => $request->psikotest_type_id,
            'preference_schedule' => $request->preference_schedule,
            'reason' => $request->reason,
            'password' => $hashedPassword,
        ]);

        return redirect()->back()->with('success', 'Data user berhasil ditambahkan.');
    }

    public function userRegister()
    {
        $users = UserPsikotestPaid::with('psikotestType.categoryPsikotestType')->get();
        return view('moduls.dashboard.psikotes-paid.data', compact('users'));
    }

    // Dashboard Papikostick
    public function dashboardPapikostick()
    {
        return view('moduls.dashboard.psikotes-paid.tools.papikostick.dashboardPapikostick');
    }
    public function papikostick()
    {
        return view('moduls.dashboard.psikotes-paid.tools.papikostick.papikostick');
    }
    public function psikotestData()
    {
        return view('moduls.dashboard.psikotes-paid.tools.papikostick.psikotestData');
    }
    public function psikotestSoal()
    {
        return view('moduls.dashboard.psikotes-paid.tools.papikostick.psikotestSoal');
    }

    public function userDetail($id)
    {
        $user = UserPsikotestPaid::with('psikotestType.categoryPsikotestType')->find($id);
        $categories = CategoryPsikotestType::all();
        $psikotestTypes = PsikotestType::all();

        return view('moduls.dashboard.psikotes-paid.data-detail', compact('user', 'categories', 'psikotestTypes'));
    }

    public function editUserRegister(Request $request, $id)
    {
        $user = UserPsikotestPaid::findOrFail($id);

        $request->validate([
            'fullname' => 'sometimes',
            'email' => 'sometimes|email',
            'password' => 'sometimes|min:8',
            'gender' => 'sometimes',
            'age' => 'sometimes|integer',
            'domicile' => 'sometimes',
            'phone_number' => 'sometimes',
            'service' => 'sometimes',
            'reason' => 'sometimes',
            'preference_schedule' => 'sometimes',
            'psikotest_type_id' => 'sometimes',
        ]);

        $user->update(array_filter($request->only([
            'fullname',
            'email',
            'password',
            'gender',
            'age',
            'domicile',
            'phone_number',
            'service',
            'reason',
            'preference_schedule',
            'psikotest_type_id',
        ])));

        return redirect()->back()->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Data berhasil diupdate',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }


    public function deleteUserRegister($id)
    {
        $user = UserPsikotestPaid::findOrFail($id);
        $user->delete();

        return redirect()->route('dashboard.psikotespaid.data')->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Data user berhasil dihapus',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }

    // public function deletePriceList($id)
    // {
    //     $priceList = PsikotestType::findOrFail($id);
    //     $priceList->delete();

    //     return redirect()->back()->with('success', 'Pricelist berhasil dihapus.');
    // }

    public function psikotestTool()
    {
        $tools = PsikotestTool::all();

        return view('moduls.dashboard.psikotes-paid.data-test', compact('tools'));
    }

    public function generateToken($id)
    {
        $tool = PsikotestTool::findOrFail($id);
        $tool->token = Str::random(8);
        $tool->save();

        return redirect()->back()->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Token berhasil digenerate',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }

    public function deleteToken($id)
    {
        $tool = PsikotestTool::findOrFail($id);
        $tool->token = null;
        $tool->save();

        return redirect()->back()->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Token berhasil dihapus',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }

    public function priceList()
    {
        $priceList = PsikotestType::with('categoryPsikotestType')->get();
        $categories = CategoryPsikotestType::all();

        return view('moduls.dashboard.psikotes-paid.price-list', compact('priceList', 'categories'));
    }


    public function storePriceList(Request $request)
    {
        $request->validate([
            'category_psikotest_type_id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        PsikotestType::create([
            'name' => $request->name,
            'price' => str_replace('.', '', $request->price),
            'category_psikotest_type_id' => $request->category_psikotest_type_id,
        ]);

        return redirect()->back()->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Pricelist berhasil ditambahkan.',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }

    public function editPriceList(Request $request, $id)
    {
        $request->validate([
            'category_psikotest_type_id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        $psikotestType = PsikotestType::findOrFail($id);
        $psikotestType->update([
            'category_psikotest_type_id' => $request->category_psikotest_type_id,
            'name' => $request->name,
            'price' => str_replace('.', '', $request->price),
        ]);

        return redirect()->back()->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Pricelist berhasil diupdate',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }

    public function deletePriceList($id)
    {
        $priceList = PsikotestType::findOrFail($id);
        $priceList->delete();

        return redirect()->back()->with([
                'alert'   => true,
                'type'    => 'success',
                'title'   => 'Berhasil!',
                'message' => 'Pricelist berhasil dihapus',
                'icon'    => asset('assets/images/dashboard/success.png'),
            ]);
    }


    // public function updatePriceList(Request $request, $id)
    // {
    //     $request->validate([
    //         'psikotest_category_id' => 'required',
    //         'psikotest_type_id' => 'required',
    //         'price' => 'required|numeric',
    //     ]);

    //     $psikotestType = PsikotestType::findOrFail($id);
    //     $psikotestType->update([
    //         'category_psikotest_type_id' => $request->psikotest_category_id,
    //         'name' => $request->psikotest_type_id,
    //         'price' => str_replace('.', '', $request->price), // Menghilangkan titik pada harga sebelum disimpan
    //     ]);

    //     return redirect()->route('psikotes.index')->with('success', 'Data berhasil diupdate.');
    // }

    public function testimoni()
    {
        $testimoni = PsikotestPaidTestimonial::with('userPsikotestPaid')->get();

        return view('moduls.dashboard.psikotes-paid.testi', compact('testimoni'));
    }

    public function testimoniShow($id)
    {
        $testimoni = PsikotestPaidTestimonial::with('userPsikotestPaid')->findOrFail($id);

        return view('moduls.dashboard.psikotes-paid.testi-detail', compact('testimoni'));
    }

    public function psikotesPaidBAUM()
    {
        $test_baum = TestBaum::with('PsikotestPaidTest.userPsikotestPaid', 'answerBaum.questionBaum');
        return view('moduls.dashboard.psikotes-paid.alat-tes-gambar.baum', [
            'test_baum' => $test_baum->latest()->get(),
        ]);
    }

    public function psikotesPaidHTP()
    {
        $test_htp = TestHtp::with('PsikotestPaidTest.userPsikotestPaid', 'answerHtp.questionHtp');
        return view('moduls.dashboard.psikotes-paid.alat-tes-gambar.htp', [
            'test_htp' => $test_htp->latest()->get(),
        ]);
    }

    public function psikotesPaidDAP()
    {
        $test_dap = TestDap::with('PsikotestPaidTest.userPsikotestPaid', 'answerDap.questionDap');
        return view('moduls.dashboard.psikotes-paid.alat-tes-gambar.dap', [
            'test_dap' => $test_dap->latest()->get(),
        ]);
    }

    public function psikotesPaidDashboardTes()
    {
        return view('moduls.dashboard.psikotes-paid.alat-tes-gambar.dashboardtes', [
            'test_baum' => TestBaum::count(),
            'test_htp' => TestHtp::count(),
            'test_dap' => TestDap::count(),
        ]);
    }

    public function psikotesPaidDashboardEsai()
    {
        $totalJumlahPengguna = TestTesEsai::whereHas('answerTesEsai')
            ->distinct('psikotest_paid_test_id')
            ->count('psikotest_paid_test_id');
        $totalJawaban = TestTesEsai::withCount('answerTesEsai')->get()->sum('answer_tes_esai_count');
        return view('moduls.dashboard.psikotes-paid.dashboardesai', compact('totalJumlahPengguna', 'totalJawaban'));
    }

    public function psikotesPaidPengumpulan()
    {
        // Data jawaban esai beserta pengguna terkait
        $answers = AnswerTesEsai::with([
            'testTesEsai.psikotestPaidTest.userPsikotestPaid',
            'questionTesEsai'
        ])->get();

        return view('moduls.dashboard.psikotes-paid.pengumpulan', compact('answers'));
    }

    public function dashboardVAK()
    {
        $respondens = PsikotestPaidTest::where('psikotest_tool_id', 13)
            ->count();

        $testVakIds = TestVak::whereIn('psikotest_paid_test_id', function ($query) {
            $query->select('id')
                ->from('psikotest_paid_tests')
                ->where('psikotest_tool_id', 13);
        })->pluck('id');

        // Hitung total semua jawaban
        $totalJawaban = AnswerVak::whereIn('test_vak_id', $testVakIds)->count();

        return view('moduls.dashboard.psikotes-paid.tools.vak.dashboardVAK', compact('respondens', 'totalJawaban'));
    }

    public function jawabanVAK()
    {
        $respondens = PsikotestPaidTest::with('userPsikotestPaid')
            ->where('psikotest_tool_id', 13)
            ->get();
        return view('moduls.dashboard.psikotes-paid.tools.vak.jawabanVAK', compact('respondens'));
    }

    public function detailVAK($id)
    {
        $responden = PsikotestPaidTest::with('userPsikotestPaid')->findOrFail($id);
        $testVak = TestVak::where('psikotest_paid_test_id', $responden->id)->first();
        $result = $testVak ? ResultVak::where('test_vak_id', $testVak->id)->first() : null;

        $visual = $result ? $result->visual : 0;
        $auditory = $result ? $result->auditori : 0;
        $kinestetik = $result ? $result->kinestetik : 0;

        // Menentukan kecenderungan belajar
        if ($visual >= $auditory) {
            $terpilih = 'visual';
        } else {
            $terpilih = 'auditory';
        }

        if ($terpilih === 'visual' && $visual >= $kinestetik) {
            $description = 'Kecenderungan siswa untuk menerima informasi dalam belajar dengan menggunakan indera penglihatan. Gaya belajar ini mengakses citra visual seperti warna, gambar, dan video.';
        } elseif ($terpilih === 'auditory' && $auditory >= $kinestetik) {
            $description = 'Kecenderungan siswa untuk menerima informasi dalam belajar dengan melibatkan indera pendengaran.';
        } else {
            $description = 'Kecenderungan siswa untuk menerima informasi dalam belajar dengan melibatkan gerakan/psikomotorik.';
        }

        // Ambil jawaban berdasarkan kategori dari database dan format jawaban
        $answers = $testVak ? [
            1 => AnswerVak::whereHas('questionVak', function ($query) {
                $query->where('category_question_vak_id', 1);
            })->with('questionVak')->where('test_vak_id', $testVak->id)->get()->map(function ($answer) {
                $answer->formatted_answer = $this->formatAnswer($answer->answer);
                return $answer;
            }),
            2 => AnswerVak::whereHas('questionVak', function ($query) {
                $query->where('category_question_vak_id', 2);
            })->with('questionVak')->where('test_vak_id', $testVak->id)->get()->map(function ($answer) {
                $answer->formatted_answer = $this->formatAnswer($answer->answer);
                return $answer;
            }),
            3 => AnswerVak::whereHas('questionVak', function ($query) {
                $query->where('category_question_vak_id', 3);
            })->with('questionVak')->where('test_vak_id', $testVak->id)->get()->map(function ($answer) {
                $answer->formatted_answer = $this->formatAnswer($answer->answer);
                return $answer;
            }),
        ] : [];


        $userName = $responden->userPsikotestPaid->fullname;

        return view('moduls.dashboard.psikotes-paid.tools.vak.detailVAK', compact('responden', 'result', 'description', 'answers', 'userName', 'visual', 'auditory', 'kinestetik'));
    }

    // Format jawaban
    private function formatAnswer($answer)
    {
        switch ($answer) {
            case 1:
                return 'Kurang Sesuai';
            case 2:
                return 'Cukup Sesuai';
            case 3:
                return 'Sangat Sesuai';
            default:
                return 'Tidak Valid';
        }
    }

    public function dashboardSSCT()
    {
        return view('moduls.dashboard.psikotes-paid.tools.ssct.dashboardSSCT');
    }

    public function jawabanSSCT()
    {
        return view('moduls.dashboard.psikotes-paid.tools.ssct.jawabanSSCT');
    }

    public function psikotesPaidDashboardBiodata()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.dashboardbiodata', [
            'count_company_users' => UserCompany::count(),
            'count_education_users' => UserEducation::count(),
            'count_individual_users' => UserIndividual::count(),
            'count_community_users' => UserCommunity::count(),
            'count_clinical_users' => UserClinical::count(),
        ]);
    }

    public function BiodataPerusahaan()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan', [
            'user_companies' => UserCompany::latest()->get(),
        ]);
    }

    public function TablePerusahaan($id)
    {
        $user_company = UserCompany::with('educations.level_education', 'answer_essays.question_essay');
        $user_company = $user_company->find($id);
        $educations = $user_company->educations;
        $answers = $user_company->answer_essays;
        return view('moduls.dashboard.psikotes-paid.tools.biodata.tableperusahaan', [
            'user_company' => $user_company,
            'educations' => $educations,
            'answers' => $answers
        ]);
    }

    public function BiodataPendidikan()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.pendidikan', [
            'user_educations' => UserEducation::latest()->get(),
        ]);
    }

    public function TablePendidikan($id)
    {
        $user_education = UserEducation::with('educations.level_education', 'answer_essays.question_essay');
        $user_education = $user_education->find($id);
        $educations = $user_education->educations;
        $answers = $user_education->answer_essays;
        return view('moduls.dashboard.psikotes-paid.tools.biodata.tablependidikan', [
            'user_education' => $user_education,
            'educations' => $educations,
            'answers' => $answers
        ]);
    }

    public function BiodataKomunitas()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas', [
            'user_communities' => UserCommunity::latest()->get(),
        ]);
    }

    public function TableKomunitas($id)
    {
        $user_community = UserCommunity::with('educations.level_education', 'answer_essays.question_essay', 'courses', 'experiences');
        $user_community = $user_community->find($id);
        $educations = $user_community->educations;
        $answers = $user_community->answer_essays;
        $courses = $user_community->courses;
        $experiences = $user_community->experiences;
        return view('moduls.dashboard.psikotes-paid.tools.biodata.tablekomunitas', [
            'user_community' => $user_community,
            'educations' => $educations,
            'answers' => $answers,
            'courses' => $courses,
            'experiences' => $experiences,
        ]);
    }

    public function BiodataIndividual()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual', [
            'user_individuals' => UserIndividual::latest()->get(),
        ]);
    }

    public function TableIndividual($id)
    {
        $user_individual = UserIndividual::with('educations.level_education', 'answer_essays.question_essay');
        $user_individual = $user_individual->find($id);
        $educations = $user_individual->educations;
        $answers = $user_individual->answer_essays;
        return view('moduls.dashboard.psikotes-paid.tools.biodata.tableindividual', [
            'user_individual' => $user_individual,
            'educations' => $educations,
            'answers' => $answers
        ]);
    }

    public function BiodataKlinis()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis', [
            'user_clinicals' => UserClinical::latest()->get(),
        ]);
    }

    public function TableKlinis($id)
    {
        $user_clinical = UserClinical::with('educations.level_education', 'answer_essays.question_essay', 'families.family_status');
        $user_clinical = $user_clinical->find($id);
        $educations = $user_clinical->educations;
        $answers = $user_clinical->answer_essays;
        $partner = $user_clinical->families->whereIn('family_status_id', [2, 3])->first();
        $father = $user_clinical->families->where('gender', 'Laki-laki')->whereIn('family_status_id', [1, 4, 5, 6, 7, 8])->first();
        $mother = $user_clinical->families->where('gender', 'Perempuan')->whereIn('family_status_id', [1, 4, 5, 6, 7, 8])->first();
        return view('moduls.dashboard.psikotes-paid.tools.biodata.tableklinis', [
            'user_clinical' => $user_clinical,
            'educations' => $educations,
            'answers' => $answers,
            'partner' => $partner,
            'father' => $father,
            'mother' => $mother
        ]);
    }

    public function OCEAN()
    {
        return view('moduls.dashboard.psikotes-paid.tools.ocean.dashboardOCEAN', [
            'tool_id' => PsikotestTool::where('name', 'OCEAN')->first()->id,
            'numb_user' => TestOcean::count(),
        ]);
    }

    public function dataOCEAN()
    {
        $test_ocean = TestOcean::with('PsikotestPaidTest.userPsikotestPaid', 'answerOcean');
        // dd($test_ocean->latest()->get()[0]->PsikotestPaidTest->userPsikotestPaid);
        return view('moduls.dashboard.psikotes-paid.tools.ocean.jawabanOCEAN', [
            'test_ocean' => $test_ocean->latest()->get(),

        ]);
    }

    public function detailOCEAN($id)
    {
        $test_ocean = TestOcean::with('PsikotestPaidTest.userPsikotestPaid', 'answerOcean.questionOcean.dimensionOcean')->find($id); //Find id test
        $user_psikotest_paid = $test_ocean->psikotestPaidTest->userPsikotestPaid(); //User Psikotest Paid
        $answer_ocean = $test_ocean->answerOcean();
        $agreeableness = $test_ocean->answerOcean()->whereHas('questionOcean.dimensionOcean', function ($query) {
            $query->where('name', 'agreeableness');
        })->get();
        $conscientiousness = $test_ocean->answerOcean()->whereHas('questionOcean.dimensionOcean', function ($query) {
            $query->where('name', 'conscientiousness');
        })->get();
        $extraversion = $test_ocean->answerOcean()->whereHas('questionOcean.dimensionOcean', function ($query) {
            $query->where('name', 'extraversion');
        })->get();
        $neuroticism = $test_ocean->answerOcean()->whereHas('questionOcean.dimensionOcean', function ($query) {
            $query->where('name', 'neuroticism');
        })->get();
        $openness = $test_ocean->answerOcean()->whereHas('questionOcean.dimensionOcean', function ($query) {
            $query->where('name', 'openness');
        })->get();
        $percent_ext = ResultOcean::where('test_ocean_id', $id)->first()->extraversion;
        $percent_agr = ResultOcean::where('test_ocean_id', $id)->first()->agreeableness;
        $percent_neu = ResultOcean::where('test_ocean_id', $id)->first()->neuroticism;
        $percent_con = ResultOcean::where('test_ocean_id', $id)->first()->conscientiousness;
        $percent_ope = ResultOcean::where('test_ocean_id', $id)->first()->openness;
        // dd($extraversion->where('answer', 4)->count());
        return view('moduls.dashboard.psikotes-paid.tools.ocean.detailOCEAN', [
            'name' => $test_ocean->PsikotestPaidTest->UserPsikotestPaid->fullname,
            'ext_1' => round($extraversion->where('answer', 1)->count() / 8 * 100, 1),
            'ext_2' => round($extraversion->where('answer', 2)->count() / 8 * 100, 1),
            'ext_3' => round($extraversion->where('answer', 3)->count() / 8 * 100, 1),
            'ext_4' => round($extraversion->where('answer', 4)->count() / 8 * 100, 1),
            'ext_5' => round($extraversion->where('answer', 5)->count() / 8 * 100, 1),
            'perc_ext' => $percent_ext,
            'avg_ext' => $percent_ext * 5 / 100,
            'sum_ext' => round($percent_ext * 5 / 100 * 8, 0),
            'agr_1' => round($agreeableness->where('answer', 1)->count() / 9 * 100, 1),
            'agr_2' => round($agreeableness->where('answer', 2)->count() / 9 * 100, 1),
            'agr_3' => round($agreeableness->where('answer', 3)->count() / 9 * 100, 1),
            'agr_4' => round($agreeableness->where('answer', 4)->count() / 9 * 100, 1),
            'agr_5' => round($agreeableness->where('answer', 5)->count() / 9 * 100, 1),
            'perc_agr' => $percent_agr,
            'avg_agr' => $percent_agr * 5 / 100,
            'sum_agr' => round($percent_agr * 5 / 100 * 9, 0),
            'neu_1' => round($neuroticism->where('answer', 1)->count() / 8 * 100, 1),
            'neu_2' => round($neuroticism->where('answer', 2)->count() / 8 * 100, 1),
            'neu_3' => round($neuroticism->where('answer', 3)->count() / 8 * 100, 1),
            'neu_4' => round($neuroticism->where('answer', 4)->count() / 8 * 100, 1),
            'neu_5' => round($neuroticism->where('answer', 5)->count() / 8 * 100, 1),
            'perc_neu' => $percent_neu,
            'avg_neu' => $percent_neu * 5 / 100,
            'sum_neu' => round($percent_neu * 5 / 100 * 8, 0),
            'con_1' => round($conscientiousness->where('answer', 1)->count() / 9 * 100, 1),
            'con_2' => round($conscientiousness->where('answer', 2)->count() / 9 * 100, 1),
            'con_3' => round($conscientiousness->where('answer', 3)->count() / 9 * 100, 1),
            'con_4' => round($conscientiousness->where('answer', 4)->count() / 9 * 100, 1),
            'con_5' => round($conscientiousness->where('answer', 5)->count() / 9 * 100, 1),
            'perc_con' => $percent_con,
            'avg_con' => $percent_con * 5 / 100,
            'sum_con' => round($percent_con * 5 / 100 * 9, 0),
            'ope_1' => round($openness->where('answer', 1)->count() / 10 * 100, 1),
            'ope_2' => round($openness->where('answer', 2)->count() / 10 * 100, 1),
            'ope_3' => round($openness->where('answer', 3)->count() / 10 * 100, 1),
            'ope_4' => round($openness->where('answer', 4)->count() / 10 * 100, 1),
            'ope_5' => round($openness->where('answer', 5)->count() / 10 * 100, 1),
            'perc_ope' => $percent_ope,
            'avg_ope' => $percent_ope * 5 / 100,
            'sum_ope' => round($percent_ope * 5 / 100 * 10, 0),
            'ext_detail' => $extraversion,
            'agr_detail' => $agreeableness,
            'neu_detail' => $neuroticism,
            'con_detail' => $conscientiousness,
            'ope_detail' => $openness,
        ]);
    }

    public function BDI()
    {
        return view('moduls.dashboard.psikotes-paid.tools.bdi.dashboardBDI');
    }

    public function dataBDI()
    {
        return view('moduls.dashboard.psikotes-paid.tools.bdi.jawabanBDI');
    }

    public function detailBDI()
    {
        return view('moduls.dashboard.psikotes-paid.tools.bdi.detailBDI');
    }

    public function dashboardDass42()
    {
        return view('moduls.dashboard.psikotes-paid.tools.dass42.dashboardDASS');
    }

    public function dataDass42()
    {
        $psikotestToolDass = PsikotestTool::where('name', 'Dass-42')->first();
        $psikotestPaidTestDass = PsikotestPaidTest::where('psikotest_tool_id', $psikotestToolDass->id)->get();
        return view('moduls.dashboard.psikotes-paid.tools.dass42.jawabanDASS', compact('psikotestPaidTestDass'));
    }

    public function detailDass42(PsikotestPaidTest $psikotest_paid_test_id)
    {
        $dassDataAnswer = $psikotest_paid_test_id->answerDass;
        $depressionPoint = $dassDataAnswer->filter(function ($item) {
            return $item->questionDass->category === 'depression';
        })->sum('answer');
        $anxietyPoint = $dassDataAnswer->filter(function ($item) {
            return $item->questionDass->category === 'anxiety';
        })->sum('answer');
        $stressPoint = $dassDataAnswer->filter(function ($item) {
            return $item->questionDass->category === 'stress';
        })->sum('answer');

        $categoryResult = function ($category) use ($depressionPoint, $anxietyPoint, $stressPoint) {
            switch ($category) {
                case 'depression':
                    switch (true) {
                        case ($depressionPoint >= 28):
                            return 'Extremely Severe';
                        case ($depressionPoint >= 21):
                            return 'Severe';
                        case ($depressionPoint >= 14):
                            return 'Moderate';
                        case ($depressionPoint >= 10):
                            return 'Mild';
                        default:
                            return 'Normal';
                    }
                    break;

                case 'anxiety':
                    switch (true) {
                        case ($anxietyPoint >= 20):
                            return 'Extremely Severe';
                        case ($anxietyPoint >= 15):
                            return 'Severe';
                        case ($anxietyPoint >= 10):
                            return 'Moderate';
                        case ($anxietyPoint >= 8):
                            return 'Mild';
                        default:
                            return 'Normal';
                    }
                    break;

                case 'stress':
                    switch (true) {
                        case ($stressPoint >= 34):
                            return 'Extremely Severe';
                        case ($stressPoint >= 26):
                            return 'Severe';
                        case ($stressPoint >= 19):
                            return 'Moderate';
                        case ($stressPoint >= 15):
                            return 'Mild';
                        default:
                            return 'Normal';
                    }
                    break;

                default:
                    return '';
            }
        };

        return view('moduls.dashboard.psikotes-paid.tools.dass42.detailDASS', compact(
            'psikotest_paid_test_id',
            'dassDataAnswer',
            'depressionPoint',
            'anxietyPoint',
            'stressPoint',
            'categoryResult'
        ));
    }

    public function dashboardEPI()
    {
        // Jumlah semua user yang sudah mengerjakan EPI
        $totalCompletedTests = PsikotestPaidTest::where('psikotest_tool_id', 27)
            ->whereHas('epiAnswers')
            ->count();

        $totalAnswers = EpiAnswer::count();

        return view('moduls.dashboard.psikotes-paid.tools.epi.dashboardEPI', [
            'totalUsers' => $totalCompletedTests,
            'totalAnswers' => $totalAnswers,
        ]);
    }

    public function dataEPI()
    {
        // Data jawaban EPI beserta pengguna terkait
        $tests = PsikotestPaidTest::where('psikotest_tool_id', 27)
            ->with(['userPsikotestPaid', 'epiAnswers'])
            ->get();

        return view('moduls.dashboard.psikotes-paid.tools.epi.jawabanEPI', compact('tests'));
    }

    public function detailEPI($testId)
    {
        $test = PsikotestPaidTest::findOrFail($testId);
        $user = $test->userPsikotestPaid;

        $answers = EpiAnswer::with('question')
            ->where('psikotest_paid_test_id', $testId)
            ->get();

        $categoryScores = [
            'Lie' => 0,
            'Extraversion' => 0,
            'Neuroticism' => 0,
        ];

        // Hitung poin per kategori
        foreach ($answers as $answer) {
            $category = $answer->question->category;
            if (isset($categoryScores[$category])) {
                $categoryScores[$category] += $answer->points;
            }
        }

        // Hitung kesimpulan per kategori
        $conclusions = [
            'Lie' => $this->getLieConclusion($categoryScores['Lie']),
            'Extraversion' => $this->getExtraversionConclusion($categoryScores['Extraversion']),
            'Neuroticism' => $this->getNeuroticismConclusion($categoryScores['Neuroticism']),
        ];

        // Hitung kategori tertinggi
        $highestCategory = collect($categoryScores)->sortDesc()->keys()->first();
        $highestScore = $categoryScores[$highestCategory];
        $overallConclusion = $this->getConclusionForHighestCategory($highestCategory, $highestScore);

        $categoryColors = [
            'Lie' => 'red',
            'Extraversion' => 'blue',
            'Neuroticism' => 'green',
        ];

        return view('moduls.dashboard.psikotes-paid.tools.epi.detailEPI', compact(
            'user',
            'answers',
            'categoryScores',
            'conclusions',
            'highestCategory',
            'highestScore',
            'overallConclusion',
            'categoryColors'
        ));
    }


    // Kesimpulan berdasarkan kategori tertinggi
    private function getConclusionForHighestCategory($category, $score)
    {
        switch ($category) {
            case 'Lie':
                return $this->getLieConclusion($score);
            case 'Extraversion':
                return $this->getExtraversionConclusion($score);
            case 'Neuroticism':
                return $this->getNeuroticismConclusion($score);
            default:
                return 'Unknown';
        }
    }

    // Kesimpulan berdasarkan total poin LIE
    private function getLieConclusion($totalPoints)
    {
        if ($totalPoints <= 3) return 'Saint';
        elseif ($totalPoints == 4) return 'Mean';
        else return 'Taking';
    }

    // Kesimpulan berdasarkan total poin EXTRAVERSION
    private function getExtraversionConclusion($totalPoints)
    {
        if ($totalPoints <= 12) return 'Introversi';
        elseif ($totalPoints == 13) return 'Mean';
        else return 'Ekstraversi';
    }

    // Kesimpulan berdasarkan total poin NEUROTICISM
    private function getNeuroticismConclusion($totalPoints)
    {
        if ($totalPoints <= 9) return 'Stabilitas';
        elseif ($totalPoints <= 13) return 'Mean';
        else return 'Neurotisisme';
    }

    public function dashboardRMIB()
    {
        return view('moduls.dashboard.psikotes-paid.tools.rmib.dashboardRMIB');
    }

    public function dataRMIB()
    {
        $testRmib = TestRmib::all();

        return view('moduls.dashboard.psikotes-paid.tools.rmib.jawabanRMIB', compact('testRmib'));
    }

    public function detailRMIB(TestRmib $testRmib)
    {
        $categories = CategoryStatementRmib::all();

        $answers = $testRmib->answerRmib;
        $answerCategories = collect(['outdoor', 'mechanical', 'computational', 'science', 'personal_contact', 'aesthetic', 'musical', 'literacy', 'social_service', 'clerical', 'practical', 'medical'])
            ->mapWithKeys(function ($category) use ($answers) {
                return [$category => $answers->sum($category)];
            })->sort();

        $lowestCategories = collect();
        $uniqueValues = $answerCategories->unique()->take(3)->toArray();

        foreach ($uniqueValues as $value) {
            $categoriesWithValue = $answerCategories->filter(function ($item) use ($value) {
                return $item === $value;
            })->keys()->toArray();

            foreach ($categoriesWithValue as $category) {
                $lowestCategories->put($category, $value);
            }
        }

        return view('moduls.dashboard.psikotes-paid.tools.rmib.detailRMIB', compact('categories', 'lowestCategories', 'testRmib'));
    }
}
