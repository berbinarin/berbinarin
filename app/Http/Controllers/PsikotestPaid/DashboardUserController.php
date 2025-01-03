<?php

namespace App\Http\Controllers\PsikotestPaid;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\PsikotestPaid\PsikotestTool;
use App\Models\PsikotestPaid\PsikotestType;
use App\Models\PsikotestPaid\UserPsikotestPaid;
use App\Models\PsikotestPaid\CategoryPsikotestType;
use App\Models\PsikotestPaid\PsikotestPaidTestimonial;
use App\Models\PsikotestPaid\Biodata\UserClinical;
use App\Models\PsikotestPaid\Biodata\UserCompany;
use App\Models\PsikotestPaid\Biodata\UserCommunity;
use App\Models\PsikotestPaid\Biodata\UserIndividual;
use App\Models\PsikotestPaid\Biodata\UserEducation;

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
        return view('moduls.dashboard.psikotes-paid.dashboardPapikostick');
    }
    public function papikostick()
    {
        return view('moduls.dashboard.psikotes-paid.papikostick');
    }
    public function psikotestData()
    {
        return view('moduls.dashboard.psikotes-paid.psikotestData');
    }
    public function psikotestSoal()
    {
        return view('moduls.dashboard.psikotes-paid.psikotestSoal');
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

        return redirect()->back()->with('success', 'Data berhasil diupdate.');
    }


    public function deleteUserRegister($id)
    {
        $user = UserPsikotestPaid::findOrFail($id);
        $user->delete();

        return redirect()->route('dashboard.psikotespaid.data')->with('success', 'Data user berhasil dihapus.');
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

        return redirect()->back()->with('success', 'Token generated successfully!');
    }

    public function deleteToken($id)
    {
        $tool = PsikotestTool::findOrFail($id);
        $tool->token = null;
        $tool->save();

        return redirect()->back()->with('success', 'Token deleted successfully!');
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

        return redirect()->back()->with('success', 'Pricelist berhasil ditambahkan.');
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

        return redirect()->back()->with('success', 'Pricelist berhasil diupdate.');
    }

    public function deletePriceList($id)
    {
        $priceList = PsikotestType::findOrFail($id);
        $priceList->delete();

        return redirect()->back()->with('success', 'Pricelist berhasil dihapus.');
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
        return view('moduls.dashboard.psikotes-paid.alat-tes-gambar.baum');
    }

    public function psikotesPaidHTP()
    {
        return view('moduls.dashboard.psikotes-paid.alat-tes-gambar.htp');
    }

    public function psikotesPaidDAP()
    {
        return view('moduls.dashboard.psikotes-paid.alat-tes-gambar.dap');
    }

    public function psikotesPaidDashboardTes()
    {
        return view('moduls.dashboard.psikotes-paid.alat-tes-gambar.dashboardtes');
    }

    public function psikotesPaidDashboardEsai()
    {
        return view('moduls.dashboard.psikotes-paid.dashboardesai');
    }

    public function psikotesPaidPengumpulan()
    {
        return view('moduls.dashboard.psikotes-paid.pengumpulan');
    }

    public function dashboardVAK()
    {
        return view('moduls.dashboard.psikotes-paid.tools.vak.dashboardVAK');
    }

    public function jawabanVAK()
    {
        return view('moduls.dashboard.psikotes-paid.tools.vak.jawabanVAK');
    }

    public function detailVAK()
    {
        return view('moduls.dashboard.psikotes-paid.tools.vak.detailVAK');
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
        return view('moduls.dashboard.psikotes-paid.tools.biodata.dashboardbiodata',[
            'count_company_users' => UserCompany::count(),
            'count_education_users' => UserEducation::count(),
            'count_individual_users' => UserIndividual::count(),
            'count_community_users' => UserCommunity::count(),
            'count_clinical_users' => UserClinical::count(),
        ]);
    }

    public function BiodataPerusahaan()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.perusahaan',[
            'user_companies' => UserCompany::latest()->get(),
        ]);
    }

    public function TablePerusahaan($id)
    {
        $user_company = UserCompany::with('educations.level_education','answer_essays.question_essay');
        $user_company = $user_company->find($id);
        $educations = $user_company->educations;
        $answers = $user_company->answer_essays;
        return view('moduls.dashboard.psikotes-paid.tools.biodata.tableperusahaan',[
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
        $user_education = UserEducation::with('educations.level_education','answer_essays.question_essay');
        $user_education = $user_education->find($id);
        $educations = $user_education->educations;
        $answers = $user_education->answer_essays;
        return view('moduls.dashboard.psikotes-paid.tools.biodata.tablependidikan',[
            'user_education' => $user_education,
            'educations' => $educations,
            'answers' => $answers
        ]);
    }

    public function BiodataKomunitas()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.komunitas',[
            'user_communities' => UserCommunity::latest()->get(),
        ]);
    }

    public function TableKomunitas($id)
    {
        $user_community = UserCommunity::with('educations.level_education','answer_essays.question_essay', 'courses', 'experiences');
        $user_community = $user_community->find($id);
        $educations = $user_community->educations;
        $answers = $user_community->answer_essays;
        $courses = $user_community->courses;
        $experiences = $user_community->experiences;
        return view('moduls.dashboard.psikotes-paid.tools.biodata.tablekomunitas',[
            'user_community' => $user_community,
            'educations' => $educations,
            'answers' => $answers,
            'courses' => $courses,
            'experiences' => $experiences,
        ]);
    }

    public function BiodataIndividual()
    {
        return view('moduls.dashboard.psikotes-paid.tools.biodata.individual',[
            'user_individuals' => UserIndividual::latest()->get(),
        ]);
    }

    public function TableIndividual($id)
    {
        $user_individual = UserIndividual::with('educations.level_education','answer_essays.question_essay');
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
        return view('moduls.dashboard.psikotes-paid.tools.biodata.klinis',[
            'user_clinicals' => UserClinical::latest()->get(),
        ]);
    }

    public function TableKlinis($id)
    {
        $user_clinical = UserClinical::with('educations.level_education','answer_essays.question_essay', 'families.family_status');
        $user_clinical = $user_clinical->find($id);
        $educations = $user_clinical->educations;
        $answers = $user_clinical->answer_essays;
        $partner = $user_clinical->families->whereIn('family_status_id', [2, 3])->first();
        $father = $user_clinical->families->where('gender','Laki-laki')->whereIn('family_status_id', [1, 4, 5, 6, 7, 8])->first();
        $mother = $user_clinical->families->where('gender','Perempuan')->whereIn('family_status_id', [1, 4, 5, 6, 7, 8])->first();
        return view('moduls.dashboard.psikotes-paid.tools.biodata.tableklinis',[
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
        return view('moduls.dashboard.psikotes-paid.tools.ocean.dashboardOCEAN');
    }
    
    public function dataOCEAN()
    {
        return view('moduls.dashboard.psikotes-paid.tools.ocean.jawabanOCEAN');
    }

    public function detailOCEAN()
    {
        return view('moduls.dashboard.psikotes-paid.tools.ocean.detailOCEAN');
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
}
