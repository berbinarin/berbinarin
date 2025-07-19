<?php

use App\Http\Controllers\PsikotestPaid\Tools\EPI\EPIController;
use App\Http\Controllers\PsikotestPaid\Tools\RMIB\RMIBController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PsikotestPaid\PsikotestToolController;
use App\Http\Controllers\PsikotestPaid\Tools\DAP\DAPController;
use App\Http\Controllers\PsikotestPaid\Tools\HTP\HTPController;
use App\Http\Controllers\PsikotestPaid\Tools\VAK\VakController;

use App\Http\Controllers\PsikotestPaid\Tools\BAUM\BAUMController;
use App\Http\Controllers\PsikotestPaid\Tools\SSCT\SSCTController;

use App\Http\Controllers\PsikotestPaid\Tools\OCEAN\OCEANController;
use App\Http\Controllers\PsikotestPaid\UserPsikotestPaidController;
use App\Http\Controllers\PsikotestPaid\Tools\DAP\ResultDapController;
use App\Http\Controllers\PsikotestPaid\Tools\Baum\ResultBaumController;
use App\Http\Controllers\PsikotestPaid\Tools\SSCT\ResultSsctController;
use App\Http\Controllers\PsikotestPaid\Tools\TesEsai\TesEsaiController;
use App\Http\Controllers\PsikotestPaid\Tools\OCEAN\ResultOceanController;
use App\Http\Controllers\PsikotestPaid\Tools\TesEsai\ResultTesEsaiController;
use App\Http\Controllers\PsikotestPaid\Tools\PapiKostick\PapiKostickController;

use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserCompanyController;
use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserEducationController;
use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserCommunityController;
use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserClinicalController;
use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserIndividualController;
use App\Http\Controllers\PsikotestPaid\Tools\DASS\DASSController;
use App\Http\Controllers\KeluargaBerbinarin\LandingKeluargaBerbinar;
use App\Http\Controllers\ArticleController\LandingArticle;

// Home
Route::get('/', [LandingController::class, 'landing_new'])->name('home-new');
Route::get('/consulting', [LandingController::class, 'consulting_new'])->name('consulting-new');
Route::get('/faq', [LandingController::class, 'faq_new'])->name('faq-new');
Route::get('/syarat-dan-ketetuan', [LandingController::class, 'term_condition_new'])->name('term-condition-new');
Route::get('/kebijakan-privasi', [LandingController::class, 'privacy_policy_new'])->name('privacy-policy-new');

// Tentang Kami
Route::prefix('tentang-kami')->group(function () {
    Route::get('/', [LandingController::class, 'tentang_new'])->name('tentang-new');
});

// Produk
Route::prefix('produk')->group(function () {
    Route::get('/', [LandingController::class, 'produk_new'])->name('produk-new');

    // Produk Konseling
    Route::prefix('konseling')->group(function () {
        Route::get('/', [LandingController::class, 'konseling_new'])->name('konseling-new');
        Route::get('/daftar-konseling', [LandingController::class, 'daftar_konseling'])->name('konseling-new/daftar-konseling');
        Route::get('/jadwal-konseling', [LandingController::class, 'jadwal_konseling'])->name('konseling-new/jadwal-konseling');
        Route::get('/data-diri-konseling', [LandingController::class, 'data_diri_konseling'])->name('konseling-new/data-diri-konseling');
        Route::get('/cerita-konseling', [LandingController::class, 'cerita_konseling'])->name('konseling-new/cerita-konseling');
        Route::get('/summary-konseling', [LandingController::class, 'summary_konseling'])->name('konseling-new/summary-konseling');
    });

    // Produk Psikotest
    Route::prefix('psikotest')->group(function () {
        Route::get('/psikotest', [LandingController::class, 'psikotest_new'])->name('psikotest-new');
        Route::get('/daftar-psikotes', [LandingController::class, 'daftar_psikotes'])->name('psikotes-new/daftar-psikotes');
        Route::get('/jadwal-psikotes', [LandingController::class, 'jadwal_psikotes'])->name('psikotes-new/jadwal-psikotes');
        Route::get('/data-diri-psikotes', [LandingController::class, 'data_diri_psikotes'])->name('psikotes-new/data-diri-psikotes');
        Route::get('/summary-psikotes', [LandingController::class, 'summary_psikotes'])->name('psikotes-new/summary-psikotes');
    });

    // Produk EmoShuffle
    Route::prefix('emo-shuffle')->group(function () {
        Route::get('/', [LandingController::class, 'emoShuffle'])->name('emoShuffle');
    });

    // Produk Class
    Route::prefix('class')->group(function () {
        Route::get('/', [LandingController::class, 'kelas_new'])->name('kelas-new');

        // Class 101 Class Journey
        Route::prefix('/101-class-journey')->group(function () {
            Route::get('/', [LandingController::class, 'class_journey_new'])->name('101-class-journey');
        });

        // Class Berbinar-plus
        Route::prefix('berbinar-plus')->group(function () {
            Route::get('/', [LandingController::class, 'berbinar_plus_new'])->name('berbinar-plus-new');
        });

        // Class Bisikan
        Route::prefix('bisikan')->group(function () {
            Route::get('/', [LandingController::class, 'bisikan_new'])->name('bisikan');
        });

        // Class Premium-class
        Route::prefix('premium-class')->group(function () {
            Route::get('/', [LandingController::class, 'premium_class_new'])->name('premium-class-new');
        });



    });
});

// Karier
Route::prefix('karier')->group(function () {
    Route::get('/', [LandingController::class, 'karir_new'])->name('karir-new');
    Route::get('/posisi', [LandingController::class, 'positions_new'])->name('positions-new');
    Route::get('/posisi/{id}', [LandingController::class, 'positions_detail_new'])->name('positions-detail-new');

    // Keluarga Berbinar
    Route::prefix('keluarga-berbinar')->group(function () {
        Route::get('/', [LandingKeluargaBerbinar::class, 'keluarga_berbinar'])->name('keluarga-berbinar');
    });
});

// ArteRi
Route::prefix('arteri')->group(function () {
    Route::get('/', [LandingArticle::class, 'index'])->name('arteri');
    Route::get('/{id}', [LandingArticle::class, 'show'])->name('arteri.detail');
    Route::get('/kategori/{slug}', [LandingArticle::class, 'category'])->name('arteri.category');
});

// Psikotest Paid
Route::prefix('/psikotest-paid')->group(function () {
    Route::get('/', [LandingController::class, 'psikotestPaid'])->name('psikotest-paid.homepage');
    Route::get('/testimoni', [LandingController::class, 'testimoni'])->name('psikotest-paid.testimoni');

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

        // Psikotest Paid Tool Test Route

        // PAPI KOSTICK
        Route::get('/tool/1', [PapiKostickController::class, 'showLanding'])->name('psikotest-paid.tool.PAPI Kostick.showLanding');
        Route::post('/tool/1/start', [PapiKostickController::class, 'startTest'])->name('psikotest-paid.papi-kostick.start');
        Route::get('/tool/1/test/{testPapiKostick}/question/{questionPapiKostick}', [PapiKostickController::class, 'showQuestion'])->name('psikotest-paid.papi-kostick.showQuestion');
        Route::post('/tool/1/test/{testPapiKostick}/question/{questionPapiKostick}', [PapiKostickController::class, 'submitAnswers'])->name('psikotest-paid.papi-kostick.submit');
        Route::get('/test/1/test/{testPapiKostick}/summary', [PapiKostickController::class, 'summary'])->name('psikotest-paid.papi-kostick.summary');

        // TES BAUM
        Route::get('/tool/2', [BAUMController::class, 'showLanding'])->name('psikotest-paid.tool.BAUM.showLanding');
        Route::post('/tool/2/start', [BAUMController::class, 'start'])->name('psikotest-paid.tool.BAUM.start');
        Route::get('/tool/2/test/{testBaum}/question/{questionBaum}', [BAUMController::class, 'showQuestion'])->name('psikotest-paid.tool.BAUM.showQuestion');
        Route::post('/tool/2/test/{testBaum}/question/{questionBaum}', [BAUMController::class, 'submit'])->name('psikotest-paid.tool.BAUM.submit');
        Route::get('/test/2/test/{testBaum}/summary', [BAUMController::class, 'summary'])->name('psikotest-paid.tool.BAUM.summary');

        // TES DAP
        Route::get('/tool/3', [DAPController::class, 'showLanding'])->name('psikotest-paid.tool.DAP.showLanding');
        Route::post('/tool/3/start', [DAPController::class, 'start'])->name('psikotest-paid.tool.DAP.start');
        Route::get('/tool/3/test/{testDap}/question/{questionDap}', [DAPController::class, 'showQuestion'])->name('psikotest-paid.tool.DAP.showQuestion');
        Route::post('/tool/3/test/{testDap}/question/{questionDap}', [DAPController::class, 'submit'])->name('psikotest-paid.tool.DAP.submit');
        Route::get('/tool/3/test/{testDap}/summary', [DAPController::class, 'summary'])->name('psikotest-paid.tool.DAP.summary');

        // TES HTP
        Route::get('/tool/4', [HTPController::class, 'showLanding'])->name('psikotest-paid.tool.HTP.showLanding');
        Route::post('/tool/4/start', [HTPController::class, 'start'])->name('psikotest-paid.tool.HTP.start');
        Route::get('/tool/4/test/{testHtp}/question/{questionHtp}', [HTPController::class, 'showQuestion'])->name('psikotest-paid.tool.HTP.showQuestion');
        Route::post('/tool/4/test/{testHtp}/question/{questionHtp}', [HTPController::class, 'submitAnswer'])->name('psikotest-paid.tool.HTP.submit');
        Route::get('/tool/4/test/{testHtp}/summary', [HTPController::class, 'summary'])->name('psikotest-paid.tool.HTP.summary');

        // TES SSCT
        Route::get('/tool/5', [SSCTController::class, 'showLanding'])->name('psikotest-paid.tool.SSCT.showLanding');
        Route::post('/tool/5/start', [SSCTController::class, 'start'])->name('psikotest-paid.tool.SSCT.start');
        Route::get('/tool/5/test/{testSsct}/question/{questionSsct}', [SSCTController::class, 'showQuestion'])->name('psikotest-paid.tool.SSCT.showQuestion');
        Route::post('/tool/5/test/{testSsct}/question/{questionSsct}', [SSCTController::class, 'submit'])->name('psikotest-paid.tool.SSCT.submit');
        Route::get('/tool/5/test/{testSsct}/summary', [SSCTController::class, 'summary'])->name('psikotest-paid.tool.SSCT.summary');

        // OCEAN
        Route::get('/tool/7', [OCEANController::class, 'showLanding'])->name('psikotest-paid.tool.OCEAN.showLanding');
        Route::post('/tool/7/start', [OCEANController::class, 'start'])->name('psikotest-paid.tool.OCEAN.start');
        Route::get('/tool/7/test/{testOcean}/question/{questionOcean}', [OCEANController::class, 'showQuestion'])->name('psikotest-paid.tool.OCEAN.showQuestion');
        Route::post('/tool/7/test/{testOcean}/question/{questionOcean}', [OCEANController::class, 'submit'])->name('psikotest-paid.tool.OCEAN.submit');
        Route::get('/tool/7/test/{testOcean}/summary/', [OCEANController::class, 'showSummary'])->name('psikotest-paid.tool.OCEAN.summary');

        Route::post('/tool/7/calculate-result', [ResultOceanController::class, 'calculateAndStoreResult'])->name('psikotest-paid.tool.OCEAN.calculateResult');

        // TES DASS-42
        Route::get('/tool/9', [DassController::class, 'showLanding'])->name('psikotest-paid.tool.Dass-42.showLanding');
        Route::get('/tool/9/start', [DassController::class, 'start'])->name('psikotest-paid.tool.Dass-42.start');
        Route::get('/tool/9/test/{testDass}/question/{questionDass}', [DassController::class, 'showQuestion'])->name('psikotest-paid.tool.Dass-42.showQuestion');
        Route::post('/tool/9/test/{testDass}/question/{questionDass}', [DassController::class, 'submit'])->name('psikotest-paid.tool.Dass-42.submit');
        Route::get('/tool/9/test/{testDass}/summary/', [DassController::class, 'summary'])->name('psikotest-paid.tool.Dass-42.summary');

        // TES EPI
        Route::get('/tool/EPI', [EPIController::class, 'showLanding'])->name('psikotest-paid.tool.EPI.showLanding');
        Route::get('/tool/EPI/start', [EPIController::class, 'start'])->name('psikotest-paid.tool.EPI.start');
        Route::get('/tool/EPI/test/{testEpi}/question/{questionEpi}', [EPIController::class, 'showQuestion'])->name('psikotest-paid.tool.EPI.summary');
        Route::get('/tool/EPI/test/{testEpi}/question/{questionEpi}', [EPIController::class, 'submit'])->name('psikotest-paid.tool.EPI.summary');
        Route::get('/tool/EPI/test/{testEpi}/summary/', [EPIController::class, 'summary'])->name('psikotest-paid.tool.EPI.summary');

        // TES ESAI
        Route::get('/tool/18', [TesEsaiController::class, 'showLanding'])->name('psikotest-paid.tool.Tes Esai.showLanding');
        Route::post('/tool/18/start', [TesEsaiController::class, 'start'])->name('psikotest-paid.tool.Tes Esai.start');
        Route::get('/tool/18/test/{testTesEsai}/question/{questionTesEsai}', [TesEsaiController::class, 'showQuestion'])->name('psikotest-paid.tool.Tes Esai.showQuestion');
        Route::post('/tool/18/test/{testTesEsai}/question/{questionTesEsai}', [TesEsaiController::class, 'submit'])->name('psikotest-paid.tool.Tes Esai.submit');
        Route::get('/tool/18/test/{testTesEsai}/summary/', [TesEsaiController::class, 'summary'])->name('psikotest-paid.tool.Tes Esai.summary');

        // TES RMIB
        Route::get('/tool/19', [RMIBController::class, 'showLanding'])->name('psikotest-paid.tool.RMIB.showLanding');
        Route::post('/tool/19/start', [RMIBController::class, 'startTest'])->name('psikotest-paid.tool.RMIB.startTest');
        Route::get('/tool/19/test/{testRmib}', [RMIBController::class, 'showTest'])->name('psikotest-paid.tool.RMIB.showTest');
        Route::post('/tool/19/submit-answer/{testRmib}', [RMIBController::class, 'submitAnswer'])->name('psikotest-paid.tool.RMIB.submitAnswer');
        Route::get('/tool/19/summary/{testRmib}', [RMIBController::class, 'summary'])->name('psikotest-paid.tool.RMIB.summary');


        // BDI
        Route::get('/tool/BDI', [LandingController::class, 'LandingBDI'])->name('psikotest-paid.tool.BDI.showLanding');
        // Route::get('/tool/BDI/test', [LandingController::class, 'TestBDI'])->name('psikotest-paid.tool.BDI.testbdi');
        // Route::get('/tool/BDI/end/', [LandingController::class, 'EndBDI'])->name('psikotest-paid.tool.BDI.endbdi');


        // TES DASS-42
        Route::get('/tool/DASS', [DASSController::class, 'showLanding'])->name('psikotest-paid.tool.Dass-42.showLanding');
        Route::get('/tool/DASS/test', [DASSController::class, 'showTest'])->name('psikotest-paid.tool.Dass-42.showTest');
        Route::get('/tool/DASS/summary', [DASSController::class, 'showSummary'])->name('psikotest-paid.tool.Dass-42.showSummary');

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


// Route get image from storage
Route::get('/image/{path}', function ($path) {
    $path = storage_path("app/public/" . $path);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path);
})->where('path', '.*');
