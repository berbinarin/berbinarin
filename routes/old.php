<?php
// Old Route

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\UserPsikotestPaidController;
use App\Http\Controllers\Berbinarplus\AuthUserController;
use App\Http\Controllers\Dashboard\HiringGeneralRequirementsController;
use App\Http\Controllers\Dashboard\HiringPositionsController;
use App\Http\Controllers\Dashboard\HiringPositionsJobDescriptionController;
use App\Http\Controllers\Dashboard\HiringPositionsRequirementsController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\UserInternshipController;
use App\Http\Controllers\Landing\InternshipController;
use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Landing\PDFController;
use App\Http\Controllers\Psikotest\Psikotest\BDI\NomorBdiController;
use App\Http\Controllers\Psikotest\Psikotest\BDI\SoalBdiController;
use App\Http\Controllers\Psikotest\PsikotestFree\FeedbackController;
use App\Http\Controllers\Psikotest\PsikotestFree\QuestionController;
use App\Http\Controllers\Psikotest\PsikotestFree\ResultController;
use App\Http\Controllers\Psikotest\PsikotestFree\TestController;
use App\Http\Controllers\Psikotest\PsikotestFree\UserPsikotestFreeController;
use Illuminate\Support\Facades\Route;

Route::get('/landing-new', [LandingController::class, 'index'])->name('home');

Route::get('/about-us', [LandingController::class, 'tentangKami'])->name('about');
Route::get('/products', [LandingController::class, 'products'])->name('products');
Route::get('/counseling', [LandingController::class, 'konseling'])->name('counseling');
Route::get('/counseling/pdf/{filename}', [PDFController::class, 'show'])->name('pdf.show');
Route::get('/psikotest', [LandingController::class, 'psikotest'])->name('psikotest');
Route::get('/psikotest/homepage', [LandingController::class, 'homepage'])->name('homepage');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
Route::get('/term-condition', [LandingController::class, 'termCondition'])->name('toc');
Route::get('/privacy-policy', [LandingController::class, 'privacyPolicy'])->name('pp');
Route::get('/credit-web', [LandingController::class, 'creditWeb'])->name('cw');
Route::get('/work-with-us', [LandingController::class, 'workWithUs'])->name('workWithUs');
Route::get('/class', [LandingController::class, 'class'])->name('class');
Route::get('/class/webinar', [LandingController::class, 'classWebinar'])->name('webinar');
Route::get('/class/bisikan', [LandingController::class, 'classBisikan'])->name('bisikan');
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
Route::resource('user', UserController::class);
Route::resource('HiringPositions', HiringPositionsController::class);
Route::patch('/dashboard/admin/positions/activate/{id}', [HiringPositionsController::class, 'setActivation'])->name('HiringPositions.setActivation');
Route::resource('JobDecription', HiringPositionsJobDescriptionController::class);
Route::resource('Position-Requirement', HiringPositionsRequirementsController::class);
Route::resource('General-Requirement', HiringGeneralRequirementsController::class);
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
//buat alat tes nya msh ku taruh diluar ya, blm tau mau ku taruh dimana ~latief
Route::get('/instruksiVAK', [LandingController::class, 'instruksiVAK'])->name('instruksiVAK');
Route::get('/soalVAK', [LandingController::class, 'soalVAK'])->name('soalVAK');
Route::get('/endVAK', [LandingController::class, 'endVAK'])->name('endVAK');
Route::get('/instruksiSSCT', [LandingController::class, 'instruksiSSCT'])->name('instruksiSSCT');
Route::get('/soalSSCT', [LandingController::class, 'soalSSCT'])->name('soalSSCT');
Route::get('/endSSCT', [LandingController::class, 'endSSCT'])->name('endSSCT');
// Bio Perusahaan
Route::get('/instruksiCompBio', [LandingController::class, 'instruksiCompBio'])->name('instruksiCompBio');
Route::get('/dataDiriCompBio', [LandingController::class, 'dataDiriCompBio'])->name('dataDiriCompBio');
Route::get('/dataLanjutanCompBio', [LandingController::class, 'dataLanjutanCompBio'])->name('dataLanjutanCompBio');
Route::get('/riwayatPendCompBio', [LandingController::class, 'riwayatPendCompBio'])->name('riwayatPendCompBio');
Route::get('/riwayatPend2CompBio', [LandingController::class, 'riwayatPend2CompBio'])->name('riwayatPend2CompBio');
Route::get('/riwayatPend3CompBio', [LandingController::class, 'riwayatPend3CompBio'])->name('riwayatPend3CompBio');
Route::get('/riwayatPend4CompBio', [LandingController::class, 'riwayatPend4CompBio'])->name('riwayatPend4CompBio');
Route::get('/isian1CompBio', [LandingController::class, 'isian1CompBio'])->name('isian1CompBio');
Route::get('/isian2CompBio', [LandingController::class, 'isian2CompBio'])->name('isian2CompBio');
Route::get('/isian3CompBio', [LandingController::class, 'isian3CompBio'])->name('isian3CompBio');
Route::get('/isian4CompBio', [LandingController::class, 'isian4CompBio'])->name('isian4CompBio');
Route::get('/isian5CompBio', [LandingController::class, 'isian5CompBio'])->name('isian5CompBio');
Route::get('/endCompBio', [LandingController::class, 'endCompBio'])->name('endCompBio');
// Bio Pendidikan
Route::get('/instruksiPendBio', [LandingController::class, 'instruksiPendBio'])->name('instruksiPendBio');
Route::get('/dataDiriPendBio', [LandingController::class, 'dataDiriPendBio'])->name('dataDiriPendBio');
Route::get('/dataLanjutanPendBio', [LandingController::class, 'dataLanjutanPendBio'])->name('dataLanjutanPendBio');
Route::get('/riwayatPendPendBio', [LandingController::class, 'riwayatPendPendBio'])->name('riwayatPendPendBio');
Route::get('/riwayatPend2PendBio', [LandingController::class, 'riwayatPend2PendBio'])->name('riwayatPend2PendBio');
Route::get('/riwayatPend3PendBio', [LandingController::class, 'riwayatPend3PendBio'])->name('riwayatPend3PendBio');
Route::get('/isian1PendBio', [LandingController::class, 'isian1PendBio'])->name('isian1PendBio');
Route::get('/isian2PendBio', [LandingController::class, 'isian2PendBio'])->name('isian2PendBio');
Route::get('/isian3PendBio', [LandingController::class, 'isian3PendBio'])->name('isian3PendBio');
Route::get('/isian4PendBio', [LandingController::class, 'isian4PendBio'])->name('isian4PendBio');
Route::get('/isian5PendBio', [LandingController::class, 'isian5PendBio'])->name('isian5PendBio');
Route::get('/isian6PendBio', [LandingController::class, 'isian6PendBio'])->name('isian6PendBio');
Route::get('/isian7PendBio', [LandingController::class, 'isian7PendBio'])->name('isian7PendBio');
Route::get('/endPendBio', [LandingController::class, 'endPendBio'])->name('endPendBio');
// Bio Komunitas
Route::get('/instruksiCommBio', [LandingController::class, 'instruksiCommBio'])->name('instruksiCommBio');
Route::get('/dataDiriCommBio', [LandingController::class, 'dataDiriCommBio'])->name('dataDiriCommBio');
Route::get('/dataLanjutanCommBio', [LandingController::class, 'dataLanjutanCommBio'])->name('dataLanjutanCommBio');
Route::get('/riwayatPendCommBio', [LandingController::class, 'riwayatPendCommBio'])->name('riwayatPendCommBio');
Route::get('/riwayatPend2CommBio', [LandingController::class, 'riwayatPend2CommBio'])->name('riwayatPend2CommBio');
Route::get('/riwayatPend3CommBio', [LandingController::class, 'riwayatPend3CommBio'])->name('riwayatPend3CommBio');
Route::get('/riwayatKeg1CommBio', [LandingController::class, 'riwayatKeg1CommBio'])->name('riwayatKeg1CommBio');
Route::get('/riwayatKeg2CommBio', [LandingController::class, 'riwayatKeg2CommBio'])->name('riwayatKeg2CommBio');
Route::get('/isian1CommBio', [LandingController::class, 'isian1CommBio'])->name('isian1CommBio');
Route::get('/isian2CommBio', [LandingController::class, 'isian2CommBio'])->name('isian2CommBio');
Route::get('/isian3CommBio', [LandingController::class, 'isian3CommBio'])->name('isian3CommBio');
Route::get('/isian4CommBio', [LandingController::class, 'isian4CommBio'])->name('isian4CommBio');
Route::get('/isian5CommBio', [LandingController::class, 'isian5CommBio'])->name('isian5CommBio');
Route::get('/isian6CommBio', [LandingController::class, 'isian6CommBio'])->name('isian6CommBio');
Route::get('/isian7CommBio', [LandingController::class, 'isian7CommBio'])->name('isian7CommBio');
Route::get('/endCommBio', [LandingController::class, 'endCommBio'])->name('endCommBio');
// Bio Individual
Route::get('/instruksiIndvBio', [LandingController::class, 'instruksiIndvBio'])->name('instruksiIndvBio');
Route::get('/dataDiriIndvBio', [LandingController::class, 'dataDiriIndvBio'])->name('dataDiriIndvBio');
Route::get('/dataLanjutanIndvBio', [LandingController::class, 'dataLanjutanIndvBio'])->name('dataLanjutanIndvBio');
Route::get('/riwayatPendIndvBio', [LandingController::class, 'riwayatPendIndvBio'])->name('riwayatPendIndvBio');
Route::get('/riwayatPend2IndvBio', [LandingController::class, 'riwayatPend2IndvBio'])->name('riwayatPend2IndvBio');
Route::get('/riwayatPend3IndvBio', [LandingController::class, 'riwayatPend3IndvBio'])->name('riwayatPend3IndvBio');
Route::get('/isian1IndvBio', [LandingController::class, 'isian1IndvBio'])->name('isian1IndvBio');
Route::get('/isian2IndvBio', [LandingController::class, 'isian2IndvBio'])->name('isian2IndvBio');
Route::get('/isian3IndvBio', [LandingController::class, 'isian3IndvBio'])->name('isian3IndvBio');
Route::get('/isian4IndvBio', [LandingController::class, 'isian4IndvBio'])->name('isian4IndvBio');
Route::get('/isian5IndvBio', [LandingController::class, 'isian5IndvBio'])->name('isian5IndvBio');
Route::get('/isian6IndvBio', [LandingController::class, 'isian6IndvBio'])->name('isian6IndvBio');
Route::get('/isian7IndvBio', [LandingController::class, 'isian7IndvBio'])->name('isian7IndvBio');
Route::get('/isian8IndvBio', [LandingController::class, 'isian8IndvBio'])->name('isian8IndvBio');
Route::get('/endIndvBio', [LandingController::class, 'endIndvBio'])->name('endIndvBio');
// Bio Klinis
Route::get('/instruksiKlinBio', [LandingController::class, 'instruksiKlinBio'])->name('instruksiKlinBio');
Route::get('/dataDiriKlinBio', [LandingController::class, 'dataDiriKlinBio'])->name('dataDiriKlinBio');
Route::get('/dataLanjutanKlinBio', [LandingController::class, 'dataLanjutanKlinBio'])->name('dataLanjutanKlinBio');
Route::get('/riwayatPendKlinBio', [LandingController::class, 'riwayatPendKlinBio'])->name('riwayatPendKlinBio');
Route::get('/riwayatPend2KlinBio', [LandingController::class, 'riwayatPend2KlinBio'])->name('riwayatPend2KlinBio');
Route::get('/riwayatPend3KlinBio', [LandingController::class, 'riwayatPend3KlinBio'])->name('riwayatPend3KlinBio');
Route::get('/DataPasangan1Bio', [LandingController::class, 'DataPasangan1Bio'])->name('DataPasangan1Bio');
Route::get('/DataPasangan2Bio', [LandingController::class, 'DataPasangan2Bio'])->name('DataPasangan2Bio');
Route::get('/dataAyah1KlinBio', [LandingController::class, 'dataAyah1KlinBio'])->name('dataAyah1KlinBio');
Route::get('/dataAyah2KlinBio', [LandingController::class, 'dataAyah2KlinBio'])->name('dataAyah2KlinBio');
Route::get('/dataIbu1KlinBio', [LandingController::class, 'dataIbu1KlinBio'])->name('dataIbu1KlinBio');
Route::get('/dataIbu2KlinBio', [LandingController::class, 'dataIbu2KlinBio'])->name('dataIbu2KlinBio');
Route::get('/isian1KlinBio', [LandingController::class, 'isian1KlinBio'])->name('isian1KlinBio');
Route::get('/isian2KlinBio', [LandingController::class, 'isian2KlinBio'])->name('isian2KlinBio');
Route::get('/isian3KlinBio', [LandingController::class, 'isian3KlinBio'])->name('isian3KlinBio');
Route::get('/isian4KlinBio', [LandingController::class, 'isian4KlinBio'])->name('isian4KlinBio');
Route::get('/endKlinBio', [LandingController::class, 'endKlinBio'])->name('endKlinBio');
//alat tes OCEAN
Route::get('/instruksiOCEAN', [LandingController::class, 'instruksiOCEAN'])->name('instruksiOCEAN');
Route::get('/soalOCEAN', [LandingController::class, 'soalOCEAN'])->name('soalOCEAN');
Route::get('/soal2OCEAN', [LandingController::class, 'soal2OCEAN'])->name('soal2OCEAN');
Route::get('/endOCEAN', [LandingController::class, 'endOCEAN'])->name('endOCEAN');
// Web Routes (Untuk tampilan di browser)
Route::middleware(['web'])->group(function () {
    Route::match(['get', 'post'], '/nomor-bdi', [NomorBdiController::class, 'index'])->name('nomor_bdi.index');
    Route::get('/soalBdi/{nomor}', [SoalBdiController::class, 'getSoalByNomor']);
});
