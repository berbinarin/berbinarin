<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\testGratisController;
use App\Http\Controllers\UserPsikotestController;
use App\Http\Controllers\HiringPositionsController;
use App\Http\Controllers\HiringGeneralRequirementsController;
use App\Http\Controllers\HiringPositionsRequirementsController;
use App\Http\Controllers\HiringPositionsJobDescriptionController;

use App\Http\Controllers\Berbinarplus\AuthUserController;

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
});

//MODUL PSIKOTEST FREE
Route::get('/psikotest/free', [TestController::class, 'index'])->name('test.index');
Route::post('/psikotest/free', [TestController::class, 'store'])->name('test.store');
Route::get('/psikotest/free/start', [LandingController::class, 'psikotestFreeStart'])->name('psikotestFreeStart');
Route::get('/psikotest/free/{test_id}/biodata', [UserPsikotestController::class, 'show'])->name('biodata.show');
Route::post('/psikotest/free/{test_id}/biodata', [UserPsikotestController::class, 'store'])->name('biodata.store');
Route::get('/psikotest/free/{test_id}/questions/{question_order}', [QuestionController::class, 'show'])->name('question.show');
Route::post('/psikotest/free/{test_id}/questions/{question_order}', [QuestionController::class, 'storeAnswer'])->name('question.storeAnswer');
Route::get('/psikotest/free/{test_id}/{user_id}/feedback', [FeedbackController::class, 'show'])->name('feedback.show');
Route::post('/psikotest/free/{test_id}/{user_id}/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/psikotest/free/{test_id}/{user_id}/results', [ResultController::class, 'show'])->name('result.show');
Route::post('/psikotest/free/{test_id}/{user_id}/finish-test', [ResultController::class, 'finishTest'])->name('result.finishTest');



// MODUL PSIKOTEST
Route::get('/psikotest/home', [LandingController::class, 'psikotestHome'])->name('psikotestHome');
// Route::get('/psikotest/free/test', [LandingController::class, 'psikotestFreeTest'])->name('psikotestFreeTest');
// Route::get('/psikotest/free/biodata', [LandingController::class, 'psikotestBiodata'])->name('psikotestBiodata');
// Route::get('/psikotest/free/feedback', [LandingController::class, 'psikotestFeedback'])->name('psikotestFeedback');
// Route::get('/psikotest/free/hasiltes', [LandingController::class, 'psikotestHasilTest'])->name('psikotestHasilTest');
Route::get('/psikotest/login', [LandingController::class, 'psikotestLogin'])->name('psikotestLogin');
Route::get('/psikotest/register', [LandingController::class, 'psikotestRegister'])->name('psikotestRegister');


Route::get('/feedback/{test_id}/{user_id}', [FeedbackController::class, 'show'])->name('feedback.show');
Route::post('/feedback/{test_id}/{user_id}', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/results/{test_id}/{user_id}', [ResultController::class, 'show'])->name('result.show');
Route::post('/finish-test/{test_id}/{user_id}', [ResultController::class, 'finishTest'])->name('result.finishTest');

// Route::get('/psikotest/login', [LandingController::class, 'psikotestLogin'])->name('psikotestLogin');
// Route::get('/psikotest/register', [LandingController::class, 'psikotestRegister'])->name('psikotestRegister');

// Route::get('/dashboard/admin/data', [DashboardController::class, 'data'])->name('dashboard.data');
// Route::get('/dashboard/admin/question', [DashboardController::class, 'question'])->name('dashboard.question');
// Route::resource('/posts', App\Http\Controllers\DashboardController::class);