<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HiringGeneralRequirementsController;
use App\Http\Controllers\HiringPositionsController;
use App\Http\Controllers\HiringPositionsJobDescriptionController;
use App\Http\Controllers\HiringPositionsRequirementsController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\testGratisController;
use App\Http\Controllers\UserController;
use App\Models\Hiring_Positions_Job_Descriptions;
use App\Models\HiringGeneralRequirement;
use Illuminate\Support\Facades\Route;

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
Route::get('/psikotest', [LandingController::class, 'psikotest'])->name('psikotest');

Route::get('/artikel', [LandingController::class, 'artikel'])->name('artikel');

Route::get('/contact', [LandingController::class, 'contact'])->name('contact');

Route::get('/term-condition', [LandingController::class, 'termCondition'])->name('toc');
Route::get('/privacy-policy', [LandingController::class, 'privacyPolicy'])->name('pp');

Route::get('/work-with-us', [LandingController::class, 'workWithUs'])->name('workWithUs');

Route::get('/class', [LandingController::class, 'class'])->name('class');
Route::get('/class/webinar', [LandingController::class, 'classWebinar'])->name('webinar');
Route::get('/class/bisikan', [LandingController::class, 'classBisikan'])->name('bisikan');
Route::get('/class/berbinar+', [LandingController::class, 'classBerbinarPlus'])->name('berbinarPlus');

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

Route::get('/psikotest/home', [LandingController::class, 'psikotestHome'])->name('psikotestHome');
Route::get('/psikotest/free/start', [LandingController::class, 'psikotestFreeStart'])->name('psikotestFreeStart');
Route::get('/psikotest/free/test', [LandingController::class, 'psikotestFreeTest'])->name('psikotestFreeTest');

Route::get('/careers', [LandingController::class, 'hiring'])->name('hiring');
Route::get('/careers/positions', [LandingController::class, 'hiringPositions'])->name('hiringPositions');

Route::get('/HalamanRegister',[AuthController::class, 'HalamanRegister']);
Route::post("/register", [AuthController::class, 'Register']);
Route::post("/login", [AuthController::class, 'Login']);
Route::post("/logout", [AuthController::class, 'Logout']);
Route::resource('user', UserController::class);
Route::resource('HiringPositions', HiringPositionsController::class);
Route::resource('JobDecription',HiringPositionsJobDescriptionController::class);
Route::resource('Position-Requirement', HiringPositionsRequirementsController::class);
Route::resource('General-Requirement', HiringGeneralRequirementsController::class);


Route::get('/dashboard/login', [DashboardController::class, 'login'])->name('dashboard.login');

Route::group(['middleware'=>['auth']],function(){
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

});