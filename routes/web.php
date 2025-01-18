<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\testGratisController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HiringPositionsController;
use App\Http\Controllers\Internship\ajaxInternship;
use App\Http\Controllers\PsikotestFree\TestController;
use App\Http\Controllers\PsikotestFree\ResultController;
use App\Http\Controllers\Berbinarplus\AuthUserController;
use App\Http\Controllers\Internship\InternshipController;
use App\Http\Controllers\PsikotestFree\FeedbackController;
use App\Http\Controllers\PsikotestFree\QuestionController;
use App\Http\Controllers\HiringGeneralRequirementsController;
use App\Http\Controllers\Internship\UserInternshipController;
// use App\Http\Controllers\PsikotestPaid\RedirectToolController;
use App\Http\Controllers\HiringPositionsRequirementsController;
use App\Http\Controllers\PsikotestPaid\DashboardUserController;
use App\Http\Controllers\PsikotestPaid\PsikotestToolController;
use App\Http\Controllers\PsikotestPaid\Tools\DAP\DAPController;
use App\Http\Controllers\PsikotestPaid\Tools\HTP\HTPController;
use App\Http\Controllers\PsikotestPaid\Tools\VAK\VakController;
// use App\Http\Controllers\UserPsikotestController;
use App\Http\Controllers\HiringPositionsJobDescriptionController;
use App\Http\Controllers\PsikotestPaid\Tools\BAUM\BAUMController;
use App\Http\Controllers\PsikotestPaid\Tools\SSCT\SSCTController;
use App\Http\Controllers\PsikotestFree\UserPsikotestFreeController;
// use App\Http\Controllers\UserInternshipController;
// use App\Http\Controllers\PsikotestPaid\PsikotestPaidTestController;
use App\Http\Controllers\PsikotestPaid\Tools\OCEAN\OCEANController;
use App\Http\Controllers\PsikotestPaid\UserPsikotestPaidController;
use App\Http\Controllers\PsikotestPaid\Tools\DAP\ResultDapController;
use App\Http\Controllers\PsikotestPaid\Tools\Baum\ResultBaumController;
use App\Http\Controllers\PsikotestPaid\Tools\SSCT\ResultSsctController;
use App\Http\Controllers\PsikotestPaid\Tools\TesEsai\TesEsaiController;
use App\Http\Controllers\PsikotestPaid\Tools\VAK\DashboardVakController;
use App\Http\Controllers\PsikotestPaid\Tools\OCEAN\ResultOceanController;
use App\Http\Controllers\PsikotestPaid\Tools\TesEsai\ResultTesEsaiController;
use App\Http\Controllers\PsikotestPaid\tools\PapiKostick\PapiKostickController;
// use App\Http\Controllers\PsikotestPaid\Tools\PapiKostick\ResultPapiKostickController;
use App\Http\Controllers\PsikotestPaid\Tools\PapiKostick\DashboardPapiKostickController;
// use App\Http\Controllers\PsikotestPaid\PapiKostick\TestController as PapiKostickTestController;
// use App\Http\Controllers\PsikotestPaid\PapiKostick\QuestionController as PapiKostickQuestionController;
use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserCompanyController;
use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserEducationController;
use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserCommunityController;
use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserClinicalController;
use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserIndividualController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::get('/landing-new', [LandingController::class, 'landing_new'])->name('home-new');
Route::get('/produk-new', [LandingController::class, 'produk_new'])->name('produk-new');
Route::get('/karir-new', [LandingController::class, 'karir_new'])->name('karir-new');
Route::get('/konseling-new', [LandingController::class, 'konseling_new'])->name('konseling-new');
Route::get('/psikotest-new', [LandingController::class, 'psikotest_new'])->name('psikotest-new');
Route::get('/kelas-new', [LandingController::class, 'kelas_new'])->name('kelas-new');
Route::get('/tentang-new', [LandingController::class, 'tentang_new'])->name('tentang-new');


Route::get('/about-us', [LandingController::class, 'tentangKami'])->name('about');
Route::get('/products', [LandingController::class, 'products'])->name('products');
Route::get('/counseling', [LandingController::class, 'konseling'])->name('counseling');
Route::get('/counseling/pdf/{filename}', [PDFController::class, 'show'])->name('pdf.show');
Route::get('/psikotest', [LandingController::class, 'psikotest'])->name('psikotest');
Route::get('/psikotest/homepage', [LandingController::class, 'homepage'])->name('homepage');

Route::get('/artikel', [LandingController::class, 'artikel'])->name('artikel');

Route::get('/contact', [LandingController::class, 'contact'])->name('contact');

Route::get('/term-condition', [LandingController::class, 'termCondition'])->name('toc');
Route::get('/privacy-policy', [LandingController::class, 'privacyPolicy'])->name('pp');
Route::get('/credit-web', [LandingController::class, 'creditWeb'])->name('cw');

Route::get('/work-with-us', [LandingController::class, 'workWithUs'])->name('workWithUs');

Route::get('/class', [LandingController::class, 'class'])->name('class');
Route::get('/class/webinar', [LandingController::class, 'classWebinar'])->name('webinar');
Route::get('/class/bisikan', [LandingController::class, 'classBisikan'])->name('bisikan');

//DASHBOARD ADMIN E-LEARNING PSIKOTEST
Route::get('/psikotestData', [DashboardController::class, 'psikotestData'])->name('psikotes.dashboard.psikotestData');
Route::get('/psikotestData/papikostick', [DashboardController::class, 'papikostick'])->name('psikotes.dashboard.papikostick');
Route::get('/psikotestSoal', [DashboardController::class, 'psikotestSoal'])->name('psikotes.dashboard.psikotestSoal');


// MODULE BERBINAR PLUS
Route::get('/class/berbinar+', [LandingController::class, 'classBerbinarPlus'])->name('berbinarPlus');
Route::prefix('/class/berbinar+')->group(function () {

    Route::get('/register', [AuthUserController::class, 'showRegister'])->name('berbinarplus.register');
    Route::post('/register', [AuthUserController::class, 'register'])->name('berbinarplus.register.post');
    Route::get('/register/success', [AuthUserController::class, 'success'])->name('berbinarplus.register.success');

    Route::get('/login', [AuthUserController::class, 'showLogin'])->name('berbinarplus.login');
    Route::post('/login', [AuthUserController::class, 'login'])->name('berbinarplus.login.post');

    Route::post('/logout', [AuthUserController::class, 'logout'])->name('berbinarplus.logout.post');

    Route::group(['middleware' => ['auth.berbinarplus:berbinarplus']], function () {
        Route::get('/dashboard', [AuthUserController::class, 'dashboard'])->name('berbinarplus.dashboard');
    });
});

// buat testing form selanjutnya tapi belum pakai tailwindcss
// punya ka anggi kalau masih testing taruh disini dulu
// tolong pindahain ke controller Berbinarplus/AuthUser ya kak
Route::get('/class/berbinar+/html', [RegistrationController::class, 'html'])->name('berbinarPlusDaftar');
Route::get('/class/berbinar+/daftarI', [RegistrationController::class, 'indexx'])->name('berbinarPlusDaftarI');
Route::post('/class/berbinar+/daftar', [RegistrationController::class, 'store'])->name('register.store');
Route::get('/class/berbinar+/home', [RegistrationController::class, 'index'])->name('HomeBerbinarPlus'); //route home (dashboard)
// Rute pendaftaran internship berbinar
// Route::get('/internship/register', [InternshipController::class, 'register'])->name('RegistrasiInternshipBerbinar');


Route::get('/counseling/reg/layanan', [LandingController::class, 'layanan'])->name('layanan');
Route::get('/counseling/reg/peer/pilihjadwal', [LandingController::class, 'peerPilihJadwal'])->name('peer-jadwal');
Route::get('/counseling/reg/peer/data', [LandingController::class, 'peerRegData1'])->name('peer-regData1');
Route::get('/counseling/reg/peer/data2', [LandingController::class, 'peerRegData2'])->name('peer-regData2');
Route::get('/counseling/reg/peer/data3', [LandingController::class, 'peerRegData3'])->name('peer-regData3');
Route::get('/counseling/reg/peer/data4', [LandingController::class, 'peerRegData4'])->name('peer-regData4');
Route::get('/counseling/reg/psikolog/pilihjadwal', [LandingController::class, 'psiPilihJadwal'])->name('psi-jadwal');
Route::get('/counseling/reg/psikolog/data', [LandingController::class, 'psiRegData1'])->name('psi-regData1');
Route::get('/counseling/reg/psikolog/data2', [LandingController::class, 'psiRegData2'])->name('psi-regData2');
Route::get('/counseling/reg/psikolog/data3', [LandingController::class, 'psiRegData3'])->name('psi-regData3');
Route::get('/counseling/reg/psikolog/data4', [LandingController::class, 'psiRegData4'])->name('psi-regData4');

Route::post('/counseling/reg/peer/pilihjadwal', [LandingController::class, 'postPeerPilihJadwal'])->name('post-peer-jadwal');
Route::post('/counseling/reg/peer/data', [LandingController::class, 'postPeerRegData1'])->name('post-peer-regData1');
Route::post('/counseling/reg/peer/data2', [LandingController::class, 'postPeerRegData2'])->name('post-peer-regData2');
Route::post('/counseling/reg/peer/data3', [LandingController::class, 'postPeerRegData3'])->name('post-peer-regData3');
Route::post('/counseling/reg/peer/data4', [LandingController::class, 'postPeerRegData4'])->name('post-peer-regData4');
Route::post('/counseling/reg/psikolog/pilihjadwal', [LandingController::class, 'postPsiPilihJadwal'])->name('post-psi-jadwal');
Route::post('/counseling/reg/psikolog/data', [LandingController::class, 'postPsiRegData1'])->name('post-psi-regData1');
Route::post('/counseling/reg/psikolog/data2', [LandingController::class, 'postPsiRegData2'])->name('post-psi-regData2');
Route::post('/counseling/reg/psikolog/data3', [LandingController::class, 'postPsiRegData3'])->name('post-psi-regData3');
Route::post('/counseling/reg/psikolog/data4', [LandingController::class, 'postPsiRegData4'])->name('post-psi-regData4');

Route::get('/careers', [LandingController::class, 'hiring'])->name('hiring');
Route::get('/careers/positions', [LandingController::class, 'hiringPositions'])->name('hiringPositions');
Route::get('/careers/positions/{id}', [LandingController::class, 'positionsDetail'])->name('hiring.positions.detail');

Route::get('/careers/positions/{id}/apply', [InternshipController::class, 'register'])->name('hiring.position.detail');

Route::get('/HalamanRegister', [AuthController::class, 'HalamanRegister']);
Route::post("/register", [AuthController::class, 'Register']);
Route::post("/login", [AuthController::class, 'Login']);
Route::post("/logout", [AuthController::class, 'Logout']);
Route::resource('user', UserController::class);
Route::resource('HiringPositions', HiringPositionsController::class);
Route::patch('/dashboard/admin/positions/activate/{id}', [HiringPositionsController::class, 'setActivation'])->name('HiringPositions.setActivation');
Route::resource('JobDecription', HiringPositionsJobDescriptionController::class);
Route::resource('Position-Requirement', HiringPositionsRequirementsController::class);
Route::resource('General-Requirement', HiringGeneralRequirementsController::class);

Route::get('/dashboard/login', [DashboardController::class, 'login'])->name('dashboard.login');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard/admin', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/admin/faqs', [DashboardController::class, 'faqs'])->name('dashboard.faqs');

    //PSIKOTEST PAID
    Route::prefix('/dashboard/admin/psikotest-paid')->group(function () {
        // DASHBOARD PSIKOTEST PAID USER & TOOLS
        Route::post('/data', [DashboardUserController::class, 'addUserRegister'])->name('dashboard.psikotespaid.data-store');
        Route::get('/data', [DashboardUserController::class, 'userRegister'])->name('dashboard.psikotespaid.data');
        Route::get('/data/{id}', [DashboardUserController::class, 'userDetail'])->name('dashboard.psikotespaid.data-show');
        Route::patch('/data/{id}', [DashboardUserController::class, 'editUserRegister'])->name('dashboard.psikotespaid.data-edit');
        Route::delete('/data/{id}', [DashboardUserController::class, 'deleteUserRegister'])->name('dashboard.psikotespaid.data-destroy');
        Route::get('/data-test', [DashboardUserController::class, 'psikotestTool'])->name('dashboard.psikotespaid.data-test');

        // Dashboard Psikotest Paid
        Route::get('/data-test/dashboardPapikostick', [DashboardUserController::class, 'dashboardPapikostick'])->name('dashboard.psikotespaid.dashboardPapikostick');
        Route::get('/data-test/papikostick', [DashboardUserController::class, 'papikostick'])->name('dashboard.psikotespaid.papikostick');
        Route::get('/data-test/psikotestData', [DashboardUserController::class, 'psikotestData'])->name('dashboard.psikotespaid.psikotestData');
        Route::get('/data-test/psikotestSoal', [DashboardUserController::class, 'psikotestSoal'])->name('dashboard.psikotespaid.psikotestSoal');
        Route::get('/data-test/baum', [DashboardUserController::class, 'psikotesPaidBAUM'])->name('dashboard.psikotespaid.baum');
        Route::get('/data-test/htp', [DashboardUserController::class, 'psikotesPaidHTP'])->name('dashboard.psikotespaid.htp');
        Route::get('/data-test/dap', [DashboardUserController::class, 'psikotesPaidDAP'])->name('dashboard.psikotespaid.dap');
        Route::get('/data-test/dashboardtes', [DashboardUserController::class, 'psikotesPaidDashboardTes'])->name('dashboard.psikotespaid.dashboardtes');
        Route::get('/data-test/dashboardEsai', [DashboardUserController::class, 'psikotesPaidDashboardEsai'])->name('dashboard.psikotespaid.dashboardesai');
        Route::get('/data-test/pengumpulan', [DashboardUserController::class, 'psikotesPaidPengumpulan'])->name('dashboard.psikotespaid.pengumpulan');
        Route::get('/data-test/dashboardVAK', [DashboardUserController::class, 'dashboardVAK'])->name('dashboard.psikotespaid.dashboardVAK');
        Route::get('/data-test/dashboardVAK/jawaban', [DashboardUserController::class, 'jawabanVAK'])->name('dashboard.psikotespaid.jawabanVAK');
        Route::get('/data-test/dashboardVAK/jawaban/detail', [DashboardUserController::class, 'detailVAK'])->name('dashboard.psikotespaid.detailVAK');
        Route::get('/data-test/dashboardSSCT', [DashboardUserController::class, 'dashboardSSCT'])->name('dashboard.psikotespaid.dashboardSSCT');
        Route::get('/data-test/dashboardSSCT/jawaban', [DashboardUserController::class, 'jawabanSSCT'])->name('dashboard.psikotespaid.jawabanSSCT');
        Route::get('/data-test/dashboardbiodata', [DashboardUserController::class, 'psikotesPaidDashboardBiodata'])->name('dashboard.psikotespaid.dashboardbiodata');
        Route::get('/data-test/bioperusahaan', [DashboardUserController::class, 'BiodataPerusahaan'])->name('dashboard.psikotespaid.biodataperusahaan');
        Route::get('/data-test/tableperusahaan/{id}', [DashboardUserController::class, 'TablePerusahaan'])->name('dashboard.psikotespaid.tableperusahaan');
        Route::get('/data-test/biopendidikan', [DashboardUserController::class, 'BiodataPendidikan'])->name('dashboard.psikotespaid.biodatapendidikan');
        Route::get('/data-test/tablependidikan/{id}', [DashboardUserController::class, 'TablePendidikan'])->name('dashboard.psikotespaid.tablependidikan');
        Route::get('/data-test/biokomunitas', [DashboardUserController::class, 'BiodataKomunitas'])->name('dashboard.psikotespaid.biodatakomunitas');
        Route::get('/data-test/tablekomunitas/{id}', [DashboardUserController::class, 'TableKomunitas'])->name('dashboard.psikotespaid.tablekomunitas');
        Route::get('/data-test/bioindividual', [DashboardUserController::class, 'BiodataIndividual'])->name('dashboard.psikotespaid.biodataindividual');
        Route::get('/data-test/tableindividual/{id}', [DashboardUserController::class, 'TableIndividual'])->name('dashboard.psikotespaid.tableindividual');
        Route::get('/data-test/bioklinis', [DashboardUserController::class, 'BiodataKlinis'])->name('dashboard.psikotespaid.biodataklinis');
        Route::get('/data-test/tableklinis/{id}', [DashboardUserController::class, 'TableKlinis'])->name('dashboard.psikotespaid.tableklinis');
        Route::get('/data-test/OCEAN', [DashboardUserController::class, 'OCEAN'])->name('dashboard.psikotespaid.ocean');
        Route::get('/data-test/OCEAN/data', [DashboardUserController::class, 'dataOCEAN'])->name('dashboard.psikotespaid.dataocean');
        Route::get('/data-test/OCEAN/data/detail/{id}', [DashboardUserController::class, 'detailOCEAN'])->name('dashboard.psikotespaid.detailocean');
        Route::get('/data-test/BDI', [DashboardUserController::class, 'BDI'])->name('dashboard.psikotespaid.bdi');
        Route::get('/data-test/BDI/data', [DashboardUserController::class, 'dataBDI'])->name('dashboard.psikotespaid.databdi');
        Route::get('/data-test/BDI/data/detail', [DashboardUserController::class, 'detailBDI'])->name('dashboard.psikotespaid.detailbdi');


        Route::post('/data-test/{id}/generate-token', [DashboardUserController::class, 'generateToken'])->name('dashboard.psikotespaid.generate-token');
        Route::get('/price-list', [DashboardUserController::class, 'priceList'])->name('dashboard.psikotespaid.price-list');
        Route::post('/price-list', [DashboardUserController::class, 'storePriceList'])->name('dashboard.psikotespaid.add-price-list');
        Route::patch('/price-list/{id}  ', [DashboardUserController::class, 'editPriceList'])->name('dashboard.psikotespaid.edit-price-list');
        Route::delete('/price-list/{id}', [DashboardUserController::class, 'deletePriceList'])->name('dashboard.psikotespaid.delete-price-list');
        Route::get('/testimoni', [DashboardUserController::class, 'testimoni'])->name('dashboard.psikotespaid.testimoni');
        Route::get('/testimoni/{id}', [DashboardUserController::class, 'testimoniShow'])->name('dashboard.psikotespaid.testimoni-show');
    });

    // MODUL KONSELLING PSIKOLOG
    Route::get('/dashboard/admin/psikologData', [DashboardController::class, 'PsikologData'])->name('dashboard.PsikologData');
    Route::post('/dashboard/admin/psikologData/add', [DashboardController::class, 'addPsikologData'])->name('dashboard.add.PsikologData');
    Route::get('/dashboard/admin/psikologDataDetails/{id}', [DashboardController::class, 'PsikologDataDetails'])->name('dashboard.PsikologDataDetails');
    Route::put('/dashboard/admin/psikologDataDetails/edit/{id}', [DashboardController::class, 'editPsikologDataDetails'])->name('dashboard.edit.PsikologDataDetails');
    Route::get('/dashboard/admin/psikologDataDetails/delete/{id}', [DashboardController::class, 'deletePsikologDataDetails'])->name('dashboard.delete.PsikologDataDetails');
    Route::get('/dashboard/admin/counselorData', [DashboardController::class, 'PeerConsellorData'])->name('dashboard.PeerConsellorData');
    Route::post('/dashboard/admin/counselorData/add', [DashboardController::class, 'addPeerConsellorData'])->name('dashboard.add.PeerConsellorData');
    Route::get('/dashboard/admin/counselorDataDetails/{id}', [DashboardController::class, 'PeerConsellorDataDetails'])->name('dashboard.PeerConsellorDataDetails');
    Route::put('/dashboard/admin/counselorDataDetails/edit/{id}', [DashboardController::class, 'editPeerConsellorDataDetails'])->name('dashboard.edit.PeerConsellorDataDetails');
    Route::get('/dashboard/admin/counselorDataDetails/delete/{id}', [DashboardController::class, 'deletePeerConsellorDataDetails'])->name('dashboard.delete.PeerConsellorDataDetails');
    Route::get('/dashboard/admin/counselorSchedule', [DashboardController::class, 'PeerConsellorSchedule'])->name('dashboard.PeerConsellorSchedule');
    Route::post('/dashboard/admin/counselorSchedule/add', [DashboardController::class, 'addPeerConsellorSchedule'])->name('dashboard.add.PeerConsellorSchedule');
    Route::put('/dashboard/admin/counselorSchedule/edit/{id}', [DashboardController::class, 'editPeerConsellorSchedule'])->name('dashboard.edit.PeerConsellorSchedule');
    Route::get('/dashboard/admin/counselorSchedule/delete/{id}', [DashboardController::class, 'deletePeerConsellorSchedule'])->name('dashboard.delete.PeerConsellorSchedule');

    // MODUL POSITIONS
    Route::get('/dashboard/admin/positions', [DashboardController::class, 'positions'])->name('dashboard.positions');
    Route::get('/dashboard/admin/positions/edit/{id}', [DashboardController::class, 'editPositions']);

    // MODUL INTERNSHIP
    Route::get('/dashboard/admin/internship', [DashboardController::class, 'internship'])->name('dashboard.internship');
    Route::patch('/dashboard/admin/internship/setProcess/{id}', [UserInternshipController::class, 'SetProcess'])->name('dashboard.internship.setProcess');
    Route::get('/dashboard/admin/internshipDataDetails/{id}', [DashboardController::class, 'internshipDataDetails'])->name('dashboard.internshipDataDetails');
    Route::get('/dashboard/admin/internshipDataDetails/edit/{id}', [DashboardController::class, 'editInternship'])->name('dashboard.editInternship');
    Route::put('/dashboard/admin/internshipDataDetails/update/{id}', [DashboardController::class, 'updateInternship'])->name('dashboard.updateInternship');
    // INTERN AJAX
    Route::post('/dashboard/admin/internship/update-status', [ajaxInternship::class, 'updateStatus'])->name('updateStatus');


    // MODUL POSITIONS JOB DESCRIPTION
    Route::get('/dashboard/admin/positions/descriptions', [DashboardController::class, 'jobDescriptions'])->name('dashboard.positions.descriptions');
    Route::get('/dashboard/admin/positions/descriptions/edit/{id}', [DashboardController::class, 'editJobDescriptions']);

    // MODUL POSITIONS REQUIREMENTS
    Route::get('/dashboard/admin/positions/requirements', [DashboardController::class, 'requirements'])->name('dashboard.positions.requirements');
    Route::get('/dashboard/admin/positions/requirements/edit/{id}', [DashboardController::class, 'editRequirements']);
    Route::get('/psikotes', [testGratisController::class, 'hitungPoint'])->name('psikotes.testGratis');
    Route::get('/createSoalpsikotes', [testGratisController::class, 'simpanSoal'])->name('psikote.soal');

    // // MODUL ADMIN PSIKOTEST FREE
    // Route::get('/dashboard/admin/psikotest/free/home', [DashboardController::class, 'adminHomePsikotestFree'])->name('dashboard.psikotestfree.home');
    Route::get('/dashboard/admin/psikotest/free/data', [DashboardController::class, 'adminDataPsikotesFree'])->name('dashboard.psikotestfree.data');
    Route::get('/dashboard/admin/psikotest/free/data/{user_id}', [DashboardController::class, 'adminDataPsikotesFreeShow'])->name('dashboard.psikotestfree.data.show');
    Route::get('/dashboard/admin/psikotest/free/data/{user_id}/edit', [DashboardController::class, 'adminDataPsikotesFreeEdit'])->name('dashboard.psikotestfree.data.edit');
    Route::put('/dashboard/admin/psikotest/free/data/{user_id}/edit', [DashboardController::class, 'adminDataPsikotesFreeUpdate'])->name('dashboard.psikotestfree.data.update');
    Route::delete('/dashboard/admin/psikotest/free/data/{user_id}', [DashboardController::class, 'adminDataPsikotesFreeDestroy'])->name('dashboard.psikotestfree.data.destroy');
    Route::get('/dashboard/admin/psikotest/free/questions', [DashboardController::class, 'adminEditSoalPsikotesFree'])->name('dashboard.psikotestfree.question.index');
    Route::get('/dashboard/admin/psikotest/free/question/create', [DashboardController::class, 'adminEditSoalPsikotestFreeCreate'])->name('dashboard.psikotestfree.question.create');
    Route::post('/dashboard/admin/psikotest/free/question/store', [DashboardController::class, 'adminEditSoalPsikotestFreeStore'])->name('dashboard.psikotestfree.question.store');
    Route::get('/dashboard/admin/psikotest/free/question/edit/{id}', [DashboardController::class, 'adminEditSoalPsikotestFreeEdit'])->name('dashboard.psikotestfree.question.edit');
    Route::put('/dashboard/admin/psikotest/free/question/update/{id}', [DashboardController::class, 'adminEditSoalPsikotestFreeUpdate'])->name('dashboard.psikotestfree.question.update');
    Route::delete('/dashboard/admin/psikotest/free/question/delete/{id}', [DashboardController::class, 'adminEditSoalPsikotestFreeDestroy'])->name('dashboard.psikotestfree.question.destroy');

    // MODUL ADMIN BERBINAR PLUS
    Route::get('/dashboard/admin/berbinarplus/data', [DashboardController::class, 'berbinarplusUserData'])->name('dashboard.berbinarplus.data');
});

//MODUL PSIKOTEST FREE
Route::get('/psikotest/free', [TestController::class, 'index'])->name('test.index');
Route::post('/psikotest/free', [TestController::class, 'store'])->name('test.store');
Route::get('/psikotest/free/start', [LandingController::class, 'psikotestFreeStart'])->name('psikotestFreeStart');
Route::get('/psikotest/free/{test_id}/Biodata', [UserPsikotestFreeController::class, 'show'])->name('biodata.show');
Route::post('/psikotest/free/{test_id}/Biodata', [UserPsikotestFreeController::class, 'store'])->name('biodata.store');
Route::get('/psikotest/free/{test_id}/questions/{question_order}', [QuestionController::class, 'show'])->name('question.show');
Route::post('/psikotest/free/{test_id}/questions/{question_order}', [QuestionController::class, 'storeAnswer'])->name('question.storeAnswer');
Route::get('/psikotest/free/{test_id}/{user_id}/feedback', [FeedbackController::class, 'show'])->name('.psikotestpaid');
Route::post('/psikotest/free/{test_id}/{user_id}/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/psikotest/free/{test_id}/{user_id}/results', [ResultController::class, 'show'])->name('result.show');
Route::post('/psikotest/free/{test_id}/{user_id}/finish-test', [ResultController::class, 'finishTest'])->name('result.finishTest');



// MODUL PSIKOTEST
Route::get('/psikotest/home', [LandingController::class, 'psikotestHome'])->name('psikotestHome');
// Route::get('/psikotest/free/test', [LandingController::class, 'psikotestFreeTest'])->name('psikotestFreeTest');
// Route::get('/psikotest/free/Biodata', [LandingController::class, 'psikotestBiodata'])->name('psikotestBiodata');
// Route::get('/psikotest/free/feedback', [LandingController::class, 'psikotestFeedback'])->name('psikotestFeedback');
// Route::get('/psikotest/free/hasiltes', [LandingController::class, 'psikotestHasilTest'])->name('psikotestHasilTest');
// Route::get('/psikotest/login', [LandingController::class, 'psikotestLogin'])->name('psikotestLogin');

Route::get('/psikotest/register', [LandingController::class, 'psikotestRegister'])->name('psikotestRegister');
Route::get('/psikotest/instruksi', [LandingController::class, 'instruksi'])->name('instruksi');
Route::get('/psikotest/soal', [LandingController::class, 'soal'])->name('soal');
Route::get('/psikotest/end', [LandingController::class, 'end'])->name('end');

Route::get('/psikotest/signup', [LandingController::class, 'psikotestSignUp'])->name('psikotestSignUp');
Route::get('/psikotest/schedule', [LandingController::class, 'psikotestSchedule'])->name('psikotestSchedule');
Route::get('/psikotest/test', [LandingController::class, 'psikotestTest'])->name('psikotestTest');
Route::get('/psikotest/motive', [LandingController::class, 'psikotestMotive'])->name('psikotestMotive');
Route::get('/psikotest/signup-success', [LandingController::class, 'psikotestSignupSuccess'])->name('psikotestSignupSuccess');
Route::get('/psikotest/individual', [LandingController::class, 'psikotestIndividual'])->name('psikotestIndividual');



Route::get('/feedback/{test_id}/{user_id}', [FeedbackController::class, 'show'])->name('feedback.psikotest.show');
Route::post('/feedback/{test_id}/{user_id}', [FeedbackController::class, 'store'])->name('feedback.psikotest.store');

Route::get('/results/{test_id}/{user_id}', [ResultController::class, 'show'])->name('result.psikotest.show');
Route::post('/finish-test/{test_id}/{user_id}', [ResultController::class, 'finishTest'])->name('result.psikotest.finishTest');

// Route::get('/psikotest/login', [LandingController::class, 'psikotestLogin'])->name('psikotestLogin');
// Route::get('/psikotest/register', [LandingController::class, 'psikotestRegister'])->name('psikotestRegister');

// Route::get('/dashboard/admin/data', [DashboardController::class, 'data'])->name('dashboard.data');
// Route::get('/dashboard/admin/question', [DashboardController::class, 'question'])->name('dashboard.question');
// Route::resource('/posts', App\Http\Controllers\DashboardController::class);

// MODUL INTERSHIP
Route::resource('/user_internships', UserInternshipController::class);

// DEV PSIKOTES PAID
Route::get('/psikotest/register/{page}', [UserPsikotestPaidController::class, 'showPage'])->name('psikotest-paid.showPage');

// DASHBOARD VAK
Route::get('/vak/data', [DashboardVakController::class, 'countUserTest'])->name('dashboard.psikotespaid.vak.data-count');
Route::get('/vak/responden', [DashboardVakController::class, 'allResponden'])->name('dashboard.psikotespaid.vak.all-responden');
Route::get('/vak/detail/{id}', [DashboardVakController::class, 'detailAnswer'])->name('dashboard.psikotespaid.vak.detail-answer');

Route::prefix('/psikotest-paid')->group(function () {

    //Biodata Psikotest
    Route::resource('/user-clinical', UserClinicalController::class);
    Route::resource('/user-company', UserCompanyController::class);
    Route::resource('/user-community', UserCommunityController::class);
    Route::resource('/user-education', UserEducationController::class);
    Route::resource('/user-individual', UserIndividualController::class);

    Route::post('/reg-page-3', [UserPsikotestPaidController::class, 'postRegPage3'])->name('psikotest-paid.postRegPage3');
    Route::post('/reg-page-1', [UserPsikotestPaidController::class, 'postRegPage1'])->name('psikotest-paid.postRegPage1');
    Route::post('/reg-page-2', [UserPsikotestPaidController::class, 'postRegPage2'])->name('psikotest-paid.postRegPage2');

    Route::get('/login', [UserPsikotestPaidController::class, 'showLogin'])->name('psikotest-paid.showLogin');
    Route::post('/login', [UserPsikotestPaidController::class, 'login'])->name('psikotest-paid.login');
    Route::post('/logout', [UserPsikotestPaidController::class, 'logout'])->name('psikotest-paid.logout');

    // test for admin
    Route::get('/admin', [PsikotestToolController::class, 'index'])->name('psikotest-tools.index');
    Route::get('/admin/{id}', [PsikotestToolController::class, 'viewTests'])->name('admin.show-tests');
    Route::post('/admin/{id}/generate-token', [PsikotestToolController::class, 'generateToken'])->name('psikotest-tools.generate-token');
    Route::post('/admin/{id}/delete-token', [PsikotestToolController::class, 'deleteToken'])->name('psikotest-tools.delete-token');
    Route::delete('/admin/{userId}', [UserPsikotestPaidController::class, 'delete'])->name('admin.user.delete');
    Route::post('/admin/result', function (Request $request) {
        $path = 'admin.test.showResult.' . $request->input('name');
        return redirect()->route($path, $request->input('id'));
    })->name('admin.test.showResult');

    Route::get('/admin/result/tes-esai/{testId}', [ResultTesEsaiController::class, 'showResult'])->name('admin.test.showResult.Tes Esai');
    Route::get('/admin/result/baum/{testId}', [ResultBaumController::class, 'showResult'])->name('admin.test.showResult.BAUM');
    Route::get('/admin/result/dap/{testId}', [ResultDapController::class, 'showResult'])->name('admin.test.showResult.DAP');
    Route::get('/admin/result/ocean/{testId}', [ResultOceanController::class, 'showResult'])->name('admin.test.showResult.OCEAN');
    Route::get('/admin/result/ssct/{testId}', [ResultSsctController::class, 'showResult'])->name('admin.test.showResult.SSCT');

    Route::group(['middleware' => ['auth.psikotestpaid:psikotestpaid']], function () {
        Route::get('/landing', [UserPsikotestPaidController::class, 'showLanding'])->name('psikotest-paid.showLanding');
        Route::post('/verify-token', [PsikotestToolController::class, 'verifyToken'])->name('psikotest-tools.verify-token');

        // ROUTE UNTUK TIAP TOOLS!
        
        // TES BAUM
        Route::get('/tool/BAUM', [BAUMController::class, 'showLanding'])->name('psikotest-paid.tool.BAUM.showLanding');
        Route::post('/tool/BAUM/start', [BAUMController::class, 'startTest'])->name('psikotest-paid.tool.BAUM.startTest');
        Route::get('/tool/BAUM/test/{testId}', [BAUMController::class, 'showTest'])->name('psikotest-paid.tool.BAUM.showTest');
        Route::post('/tool/BAUM/submit-answer', [BAUMController::class, 'submitAnswer'])->name('psikotest-paid.tool.BAUM.submitAnswer');
        Route::get('/tool/BAUM/summary/{testId}', [BAUMController::class, 'showSummary'])->name('psikotest-paid.tool.BAUM.summary');
        
        // TES DAP
        Route::get('/tool/DAP', [DAPController::class, 'showLanding'])->name('psikotest-paid.tool.DAP.showLanding');
        Route::post('/tool/DAP/start', [DAPController::class, 'startTest'])->name('psikotest-paid.tool.DAP.startTest');
        Route::get('/tool/DAP/test/{testId}', [DAPController::class, 'showTest'])->name('psikotest-paid.tool.DAP.showTest');
        Route::post('/tool/DAP/submit-answer', [DAPController::class, 'submitAnswer'])->name('psikotest-paid.tool.DAP.submitAnswer');
        Route::get('/tool/DAP/summary/{testId}', [DAPController::class, 'showSummary'])->name('psikotest-paid.tool.DAP.summary');
        
        // TES HTP
        Route::get('/tool/HTP', [HTPController::class, 'showLanding'])->name('psikotest-paid.tool.HTP.showLanding');
        
        // TES SSCT
        Route::get('/tool/SSCT', [SSCTController::class, 'showLanding'])->name('psikotest-paid.tool.SSCT.showLanding');
        Route::post('/tool/SSCT/start', [SSCTController::class, 'startTest'])->name('psikotest-paid.tool.SSCT.startTest');
        Route::get('/tool/SSCT/test/{testId}', [SSCTController::class, 'showTest'])->name('psikotest-paid.tool.SSCT.showTest');
        Route::post('/tool/SSCT/submit-answer', [SSCTController::class, 'submitAnswer'])->name('psikotest-paid.tool.SSCT.submitAnswer');
        Route::get('/tool/SSCT/summary/{testId}', [SSCTController::class, 'showSummary'])->name('psikotest-paid.tool.SSCT.summary');

        // TES ESAI
        Route::get('/tool/tes-esai', [TesEsaiController::class, 'showLanding'])->name('psikotest-paid.tool.Tes Esai.showLanding');
        Route::post('/tool/tes-esai/start', [TesEsaiController::class, 'startTest'])->name('psikotest-paid.tool.Tes Esai.startTest');
        Route::get('/tool/tes-esai/test/{testId}', [TesEsaiController::class, 'showTest'])->name('psikotest-paid.tool.Tes Esai.showTest');
        Route::post('/tool/tes-esai/submit-answer', [TesEsaiController::class, 'submitAnswer'])->name('psikotest-paid.tool.Tes Esai.submitAnswer');
        Route::get('/tool/tes-esai/summary/{testId}', [TesEsaiController::class, 'showSummary'])->name('psikotest-paid.tool.Tes Esai.summary');

        // OCEAN
        Route::get('/tool/OCEAN', [OCEANController::class, 'showLanding'])->name('psikotest-paid.tool.OCEAN.showLanding');
        Route::post('/tool/OCEAN/start', [OCEANController::class, 'startTest'])->name('psikotest-paid.tool.OCEAN.startTest');
        Route::get('/tool/OCEAN/test/{testId}', [OCEANController::class, 'showTest'])->name('psikotest-paid.tool.OCEAN.showTest');
        Route::post('/tool/OCEAN/submit-answer', [OCEANController::class, 'submitAnswer'])->name('psikotest-paid.tool.OCEAN.submitAnswer');
        Route::get('/tool/OCEAN/summary/{testId}', [OCEANController::class, 'showSummary'])->name('psikotest-paid.tool.OCEAN.summary');
        Route::post('/tool/OCEAN/calculate-result', [ResultOceanController::class, 'calculateAndStoreResult'])->name('psikotest-paid.tool.OCEAN.calculateResult');
        
        // PAPI KOSTICK
        Route::get('/tool/papi-kostick', [PapiKostickController::class, 'showLanding'])->name('psikotest-paid.tool.PAPI Kostick.showLanding');
        Route::post('/start', [PapiKostickController::class, 'startTest'])->name('psikotest-paid.papi-kostick.start');
        Route::get('/{id}/question/{question_order}', [PapiKostickController::class, 'showQuestions'])->name('psikotest-paid.papi-kostick.questions');
        Route::post('/{id}/question/{question_order}', [PapiKostickController::class, 'submitAnswers'])->name('psikotest-paid.papi-kostick.submit');
        Route::get('/{id}/complete', [PapiKostickController::class, 'completeTest'])->name('psikotest-paid.papi-kostick.complete');
        
        // DASHBOARD PAPI KOSTICK
        Route::get('/respondents', [DashboardPapiKostickController::class, 'allResponden'])->name('psikotest-paid.papi-kostick.data');
        Route::get('/respondents/{id}', [DashboardPapiKostickController::class, 'detailResponden'])->name('psikotest-paid.papi-kostick.detail');
        Route::get('/papi-kostick/soal', [DashboardPapiKostickController::class, 'allSoal'])->name('papi-kostick.soal');
        Route::get('/papi-kostick/soal/{id}/edit', [DashboardPapiKostickController::class, 'editSoal'])->name('papi-kostick.edit-soal');
        Route::put('/papi-kostick/soal/{id}', [DashboardPapiKostickController::class, 'updateSoal'])->name('papi-kostick.update-soal');
        
        // BDI
        Route::get('/tool/BDI', [LandingController::class, 'LandingBDI'])->name('psikotest-paid.tool.BDI.landingbdi');
        Route::get('/tool/BDI/test', [LandingController::class, 'TestBDI'])->name('psikotest-paid.tool.BDI.testbdi');
        Route::get('/tool/BDI/end/', [LandingController::class, 'EndBDI'])->name('psikotest-paid.tool.BDI.endbdi');
        
        // BIODATA
        // Perusahaan
        Route::get('/tool/bio-company', [UserCompanyController::class, 'showLanding'])->name('psikotest-paid.tool.BIODATA_PERUSAHAAN.showLanding');
        Route::get('/tool/bio-company/{page}', [UserCompanyController::class, 'showPage'])->name('psikotest-paid.tool.BIODATA_PERUSAHAAN.showPage');
        Route::post('/tool/bio-company/post', [UserCompanyController::class, 'postCompanyPage'])->name('psikotest-paid.tool.BIODATA_PERUSAHAAN.post');
        // Pendidikan
        Route::get('/tool/bio-education', [UserEducationController::class, 'showLanding'])->name('psikotest-paid.tool.BIODATA_PENDIDIKAN.showLanding');
        Route::get('/tool/bio-education/{page}', [UserEducationController::class, 'showPage'])->name('psikotest-paid.tool.BIODATA_PENDIDIKAN.showPage');
        Route::post('/tool/bio-education/post', [UserEducationController::class, 'postEducationPage'])->name('psikotest-paid.tool.BIODATA_PENDIDIKAN.post');
        // Komunitas
        Route::get('/tool/bio-community', [UserCommunityController::class, 'showLanding'])->name('psikotest-paid.tool.BIODATA_KOMUNITAS.showLanding');
        Route::get('/tool/bio-community/{page}', [UserCommunityController::class, 'showPage'])->name('psikotest-paid.tool.BIODATA_KOMUNITAS.showPage');
        Route::post('/tool/bio-community/post', [UserCommunityController::class, 'postCommunityPage'])->name('psikotest-paid.tool.BIODATA_KOMUNITAS.post');
        // Individual
        Route::get('/tool/bio-individual', [UserIndividualController::class, 'showLanding'])->name('psikotest-paid.tool.BIODATA_INDIVIDUAL.showLanding');
        Route::get('/tool/bio-individual/{page}', [UserIndividualController::class, 'showPage'])->name('psikotest-paid.tool.BIODATA_INDIVIDUAL.showPage');
        Route::post('/tool/bio-individual/post', [UserIndividualController::class, 'postIndividualPage'])->name('psikotest-paid.tool.BIODATA_INDIVIDUAL.post');
        // KLINIS
        Route::get('/tool/bio-clinical', [UserClinicalController::class, 'showLanding'])->name('psikotest-paid.tool.BIODATA_KLINIS.showLanding');
        Route::get('/tool/bio-clinical/{page}', [UserClinicalController::class, 'showPage'])->name('psikotest-paid.tool.BIODATA_KLINIS.showPage');
        Route::post('/tool/bio-clinical/post', [UserClinicalController::class, 'postClinicalPage'])->name('psikotest-paid.tool.BIODATA_KLINIS.post');

        // VAK
        Route::get('/tool/VAK', [VakController::class, 'showLanding'])->name('psikotest-paid.tool.VAK.showLanding');
        Route::prefix('/test-13')->group(function () {
            Route::post('/start', [VakController::class, 'startTest'])->name('psikotest-paid.VAK.start');
            Route::get('/{id}/question/{question_order}', [VakController::class, 'showQuestions'])->name('psikotest-paid.VAK.questions');
            Route::post('/{id}/question/{question_order}', [VakController::class, 'submitAnswers'])->name('psikotest-paid.VAK.submit');
            Route::get('/{id}/complete', [VakController::class, 'completeTest'])->name('psikotest-paid.VAK.complete');
        });
    });
});