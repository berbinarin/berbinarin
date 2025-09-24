<?php

use App\Http\Controllers\Landing\Home\HomeController;
use App\Http\Controllers\Landing\AboutUs\AboutUsController;
use App\Http\Controllers\Landing\Arteri\ArteriController;
use App\Http\Controllers\Landing\Career\CareerController;
use App\Http\Controllers\Landing\Career\KeluargaBerbinar\KeluargaBerbinarController;
use App\Http\Controllers\Landing\Career\Position\PositionController;
use App\Http\Controllers\Landing\Product\Class\Berarty\BerartyController;
use App\Http\Controllers\Landing\Product\Class\BerbinarPlus\BerbinarPlusController;
use App\Http\Controllers\Landing\Product\Class\Bisikan\BisikanController;
use App\Http\Controllers\Landing\Product\Class\Class101Journey\Class101JourneyController;
use App\Http\Controllers\Landing\Product\Class\ClassController;
use App\Http\Controllers\Landing\Product\Class\PremiumClass\PremiumClassController;
use App\Http\Controllers\Landing\Product\Consulting\ConsultingController;
use App\Http\Controllers\Landing\Product\Counseling\CounselingController;
use App\Http\Controllers\Landing\Product\Psikotest\PsikotestController;
use App\Http\Controllers\Landing\Product\EmoShuffle\EmoShuffleController;
use App\Http\Controllers\Landing\Product\MoodScanTees\MoodScanTeesController;
use App\Http\Controllers\Landing\Product\ProductController;
use App\Http\Controllers\Dashboard\AuthUserController;
use App\Http\Controllers\Landing\Product\Counseling\BerbinarForU\BerbinarForUController;
use App\Http\Controllers\Landing\Product\Counseling\PeerCounselor\PeerCounselorController;
use App\Http\Controllers\Dashboard\PTPM\Psikotest\PsikotestFree\FeedbackController;
use App\Http\Controllers\Dashboard\PTPM\Psikotest\PsikotestFree\ResultController;
use App\Http\Controllers\Dashboard\PTPM\PsikotestFree\PsikotestFreeController;
use App\Http\Controllers\Dashboard\HR\_InternshipController;
use App\Http\Controllers\Dashboard\PsikotestFree\PsikotestFreeController as PsikotestFreePsikotestFreeController;
use App\Http\Controllers\Dashboard\PTPM\Psikotest\PsikotestFree\QuestionController;
use App\Http\Controllers\Dashboard\PTPM\Psikotest\PsikotestFree\UserPsikotestFreeController;
use App\Http\Controllers\Landing\Arteri\InteractionController;
use App\Http\Controllers\Landing\Product\Counseling\PsikologStaffPsikolog\PsikologStaffController;
use App\Http\Controllers\Landing\Product\Counseling\PsikologUmum\PsikologUmumController;
use App\Http\Controllers\Landing\Arteri\CommentController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');
Route::get('/syarat-dan-ketetuan', [HomeController::class, 'termCondition'])->name('home.term-condition');
Route::get('/kebijakan-privasi', [HomeController::class, 'privacyPolicy'])->name('home.privacy-policy');

// Tentang Kami
Route::prefix('tentang-kami')->group(function () {
    Route::get('/', [AboutUsController::class, 'index'])->name('about-us.index');
});

// Product
Route::prefix('produk')->name('product.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');

    // Product Konseling
    Route::prefix('konseling')->name('counseling.')->group(function () {
        Route::get('/', [CounselingController::class, 'index'])->name('index');
        Route::get('/daftar-konseling', [CounselingController::class, 'registrationKonseling'])->name('registration');
        Route::get('/daftar-konseling-staff', [CounselingController::class, 'registrationPsikologStaff'])->name('registration-staff');
        Route::get('/daftar-konseling-umum', [CounselingController::class, 'registrationPsikologUmum'])->name('registration-umum');


        
        // Pendaftaran Konseling (Psikolog)
        Route::prefix('psikolog')->name('psikolog.')->group(function () {
            Route::get('/daftar-psikolog', [PsikologUmumController::class, 'registrationPsikolog'])->name('registration');
            Route::get('/', [PsikologUmumController::class, 'showPsikologForm'])->name('index');
            Route::get('/registrasi', [PsikologUmumController::class, 'showPsikologRegistration'])->name('registrasi');
            Route::post('/registrasi', [PsikologUmumController::class, 'storePsikologRegistration'])->name('store');
            Route::get('/staff', [PsikologStaffController::class, 'showPsikologStaffForm'])->name('staff');
            Route::post('/staff', [PsikologStaffController::class, 'storePsikologStaffRegistration'])->name('staff.store');
            Route::match(['get', 'post'], '/cek-voucher', [CounselingController::class, 'cekVoucher']);      
        });

        // Pendaftaran Konseling (Peer Counselor)
        Route::prefix('peer-counselor')->name('peer-counselor.')->group(function () {
            Route::get('/daftar-peer', [PeerCounselorController::class, 'registrationPeer'])->name('registration');
            Route::get('/', [PeerCounselorController::class, 'showPeerForm'])->name('index');
            Route::post('/', [PeerCounselorController::class, 'storePeerRegistration'])->name('store');
        });

        // BerbinarForU
        Route::prefix('berbinar-for-u')->name('berbinar-for-u.')->group(function () {
            Route::get('/', [BerbinarForUController::class, 'ShowBerbinarForUForm'])->name('index');
            Route::post('/', [BerbinarForUController::class, 'storeBerbinarForURegistration'])->name('store');
        });
    });

    
    // Product Psikotest
    Route::prefix('psikotes')->name('psikotest.')->group(function () {
        Route::get('/', [PsikotestController::class, 'index'])->name('index');
        Route::get('/daftar', [PsikotestController::class, 'daftar'])->name('daftar');
        Route::get('/jadwal', [PsikotestController::class, 'schedule'])->name('schedule');
        Route::post('/jadwal', [PsikotestController::class, 'storeSchedule'])->name('schedule.store');
        Route::get('/data-diri', [PsikotestController::class, 'personalData'])->name('personal_data');
        Route::post('/data-diri', [PsikotestController::class, 'storePersonalData'])->name('personal_data.store');
        Route::get('/summary', [PsikotestController::class, 'summary'])->name('summary');
        Route::get('/feedback', [FeedbackController::class, 'show'])->name('feedback');
        Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
    });

    Route::prefix('consulting')->name('consulting.')->group(function () {
        Route::get('/', [ConsultingController::class, 'index'])->name('index');
    });

    // Produk EmoShuffle
    Route::prefix('emo-shuffle')->name('emo-shuffle.')->group(function () {
        Route::get('/', [EmoShuffleController::class, 'index'])->name('index');
    });

    // Product MoodScan Tees
    Route::prefix('moodscan-tees')->name('moodscan-tees.')->group(function () {
        Route::get('/', [MoodscanTeesController::class, 'index'])->name('index');
    });

    // Product Class
    Route::prefix('class')->name('class.')->group(function () {
        Route::get('/', [ClassController::class, 'class'])->name('index');

        // Class 101 Class Journey
        Route::prefix('/101-class-journey')->name('101-class-journey.')->group(function () {
            Route::get('/', [Class101JourneyController::class, 'index'])->name('index');
        });

        // Class Berbinar-plus
        Route::prefix('berbinar-plus')->name('berbinar-plus.')->group(function () {
            Route::get('/', [BerbinarPlusController::class, 'index'])->name('index');
            Route::get('/daftar', [BerbinarPlusController::class, 'registration'])->name('registration');
            Route::post('/daftar', [BerbinarPlusController::class, 'store'])->name('store');
            Route::get('/daftar/success', [BerbinarPlusController::class, 'success'])->name('success');
        });

        // Class Bisikan
        Route::prefix('bisikan')->name('bisikan.')->group(function () {
            Route::get('/', [BisikanController::class, 'index'])->name('index');
        });

        // Class Premium-class
        Route::prefix('premium-class')->name('premium-class.')->group(function () {
            Route::get('/', [PremiumClassController::class, 'index'])->name('index');
        });

        Route::prefix('berarty')->name('berarty.')->group(function () {
            Route::get('/', [BerartyController::class, 'index'])->name('index');
        });
    });
});

// Karier
Route::prefix('karier')->name('career.')->group(function () {
    Route::get('/', [CareerController::class, 'career'])->name('index');

    // Position
    Route::prefix('posisi')->name('positions.')->group(function () {
        Route::get('/', [PositionController::class, 'index'])->name('index');
        Route::get('/{id}', [PositionController::class, 'detail'])->name('detail');
        Route::get('/{id}/daftar', [PositionController::class, 'daftar'])->name('daftar');
        Route::post('/{id}/daftar', [PositionController::class, 'store'])->name('daftar.store');
    });

    // Keluarga Berbinar
    Route::prefix('keluarga-berbinar')->name('keluarga-berbinar.')->group(function () {
        Route::get('/', [KeluargaBerbinarController::class, 'index'])->name('index');
    });
});

// ArteRi
Route::prefix('arteri')->name('arteri.')->group(function () {
    Route::get('/', [ArteriController::class, 'index'])->name('index');
    Route::get('/{slug}', [ArteriController::class, 'show'])->name('detail');
    Route::get('/kategori/{slug}', [ArteriController::class, 'category'])->name('category');
    Route::post('/{articleId}/reaction', [ArteriController::class, 'reaction']);
    Route::post('/{articleId}/share', [ArteriController::class, 'share'])->name('share');
    Route::post('/{articleId}/view', [ArteriController::class, 'view'])->name('view');
    Route::post('/comment', [CommentController::class, 'store'])->name('comment');
});

// Psikotest Free
// Route::prefix('psikotest-free')->name('psikotest-free.')->group(function () {
//     Route::get('/start', [LandingController::class, 'psikotestFreeStart'])->name('start');
//     Route::get('/psikotest/free/{test_id}/questions/{question_order}', [QuestionController::class, 'show'])->name('question.show');
//     Route::get('/psikotest/free/questions', [QuestionController::class, 'show'])->name('question.show');
//     Route::get('/psikotest/free/biodata', [UserPsikotestFreeController::class, 'show'])->name('biodata.show');
//     Route::get('/psikotest/free/feedback', [FeedbackController::class, 'show'])->name('feedback.show');
//     Route::get('/psikotest/free/results', [ResultController::class, 'show'])->name('result.show');
// });


// Route::prefix('/berbinarplus')->group(function () {
//     Route::get('/register', [AuthUserController::class, 'showRegister'])->name('berbinarplus.register');
//     Route::post('/register', [AuthUserController::class, 'register'])->name('berbinarplus.register.post');
//     Route::get('/register/success', [AuthUserController::class, 'success'])->name('berbinarplus.register.success');

//     Route::get('/login', [AuthUserController::class, 'showLogin'])->name('berbinarplus.login');
//     Route::post('/login', [AuthUserController::class, 'login'])->name('berbinarplus.login.post');

//     Route::post('/logout', [AuthUserController::class, 'logout'])->name('berbinarplus.logout.post');

//     Route::group(['middleware' => ['auth.berbinarplus:berbinarplus']], function () {
//         Route::get('/dashboard', [AuthUserController::class, 'dashboard'])->name('berbinarplus.dashboard');
//     });
// });

//daftar konseling
Route::prefix('konseling')->group(function () {
    Route::get('/daftar', [LandingController::class, 'konselingDaftar'])->name('konseling.daftar');
    Route::get('/daftar-konseling', [LandingController::class, 'konseling'])->name('konseling.daftar-konseling');
});

// Psikotest Paid
Route::prefix('/psikotest-paid')->group(function () {
    Route::get('/', [LandingController::class, 'psikotestPaid'])->name('psikotest-paid.homepage');
    Route::get('/testimoni', [LandingController::class, 'testimoni'])->name('psikotest-paid.testimoni');

    //Biodata Psikotest
    // Route::resource('/user-clinical', UserClinicalController::class);
    // Route::resource('/user-company', UserCompanyController::class);
    // Route::resource('/user-community', UserCommunityController::class);
    // Route::resource('/user-education', UserEducationController::class);
    // Route::resource('/user-individual', UserIndividualController::class);

    //     Route::post('/reg-page-3', [UserPsikotestPaidController::class, 'postRegPage3'])->name('psikotest-paid.postRegPage3');
    //     Route::post('/reg-page-1', [UserPsikotestPaidController::class, 'postRegPage1'])->name('psikotest-paid.postRegPage1');
    //     Route::post('/reg-page-2', [UserPsikotestPaidController::class, 'postRegPage2'])->name('psikotest-paid.postRegPage2');

    // Route::get('/login', [UserPsikotestPaidController::class, 'showLogin'])->name('psikotest-paid.showLogin');
    //     Route::post('/login', [UserPsikotestPaidController::class, 'login'])->name('psikotest-paid.login');
    //     Route::post('/logout', [UserPsikotestPaidController::class, 'logout'])->name('psikotest-paid.logout');

    //     // test for admin
    //     Route::get('/admin', [PsikotestToolController::class, 'index'])->name('psikotest-tools.index');
    //     Route::get('/admin/{id}', [PsikotestToolController::class, 'viewTests'])->name('admin.show-tests');
    //     Route::post('/admin/{id}/generate-token', [PsikotestToolController::class, 'generateToken'])->name('psikotest-tools.generate-token');
    //     Route::post('/admin/{id}/delete-token', [PsikotestToolController::class, 'deleteToken'])->name('psikotest-tools.delete-token');
    //     Route::delete('/admin/{userId}', [UserPsikotestPaidController::class, 'delete'])->name('admin.user.delete');
    //     Route::post('/admin/result', function (Request $request) {
    //         $path = 'admin.test.showResult.' . $request->input('name');
    //         return redirect()->route($path, $request->input('id'));
    //     })->name('admin.test.showResult');

    //     Route::get('/admin/result/tes-esai/{testId}', [ResultTesEsaiController::class, 'showResult'])->name('admin.test.showResult.Tes Esai');
    //     Route::get('/admin/result/baum/{testId}', [ResultBaumController::class, 'showResult'])->name('admin.test.showResult.BAUM');
    //     Route::get('/admin/result/dap/{testId}', [ResultDapController::class, 'showResult'])->name('admin.test.showResult.DAP');
    //     Route::get('/admin/result/ocean/{testId}', [ResultOceanController::class, 'showResult'])->name('admin.test.showResult.OCEAN');
    //     Route::get('/admin/result/ssct/{testId}', [ResultSsctController::class, 'showResult'])->name('admin.test.showResult.SSCT');

    //     Route::group(['middleware' => ['auth.psikotestpaid:psikotestpaid']], function () {
    //         Route::get('/landing', [UserPsikotestPaidController::class, 'showLanding'])->name('psikotest-paid.showLanding');
    //         Route::post('/verify-token', [PsikotestToolController::class, 'verifyToken'])->name('psikotest-tools.verify-token');

    //         // Psikotest Paid Tool Test Route

    //         // PAPI KOSTICK
    //         Route::get('/tool/1', [PapiKostickController::class, 'showLanding'])->name('psikotest-paid.tool.PAPI Kostick.showLanding');
    //         Route::post('/tool/1/start', [PapiKostickController::class, 'startTest'])->name('psikotest-paid.papi-kostick.start');
    //         Route::get('/tool/1/test/2/question/{questionPapiKostick}', [PapiKostickController::class, 'showQuestion'])->name('psikotest-paid.papi-kostick.showQuestion');
    //         Route::post('/tool/1/test/1/question/{questionPapiKostick}', [PapiKostickController::class, 'submitAnswers'])->name('psikotest-paid.papi-kostick.submit');
    //         Route::get('/test/1/test/{testPapiKostick}/summary', [PapiKostickController::class, 'summary'])->name('psikotest-paid.papi-kostick.summary');

    //         // TES BAUM
    //         Route::get('/tool/2', [BAUMController::class, 'showLanding'])->name('psikotest-paid.tool.BAUM.showLanding');
    //         Route::post('/tool/2/start', [BAUMController::class, 'start'])->name('psikotest-paid.tool.BAUM.start');
    //         Route::get('/tool/2/test/{testBaum}/question/{questionBaum}', [BAUMController::class, 'showQuestion'])->name('psikotest-paid.tool.BAUM.showQuestion');
    //         Route::post('/tool/2/test/{testBaum}/question/{questionBaum}', [BAUMController::class, 'submit'])->name('psikotest-paid.tool.BAUM.submit');
    //         Route::get('/test/2/test/{testBaum}/summary', [BAUMController::class, 'summary'])->name('psikotest-paid.tool.BAUM.summary');

    //         // TES DAP
    //         Route::get('/tool/3', [DAPController::class, 'showLanding'])->name('psikotest-paid.tool.DAP.showLanding');
    //         Route::post('/tool/3/start', [DAPController::class, 'start'])->name('psikotest-paid.tool.DAP.start');
    //         Route::get('/tool/3/test/{testDap}/question/{questionDap}', [DAPController::class, 'showQuestion'])->name('psikotest-paid.tool.DAP.showQuestion');
    //         Route::post('/tool/3/test/{testDap}/question/{questionDap}', [DAPController::class, 'submit'])->name('psikotest-paid.tool.DAP.submit');
    //         Route::get('/tool/3/test/{testDap}/summary', [DAPController::class, 'summary'])->name('psikotest-paid.tool.DAP.summary');

    //         // TES HTP
    //         Route::get('/tool/4', [HTPController::class, 'showLanding'])->name('psikotest-paid.tool.HTP.showLanding');
    //         Route::post('/tool/4/start', [HTPController::class, 'start'])->name('psikotest-paid.tool.HTP.start');
    //         Route::get('/tool/4/test/{testHtp}/question/{questionHtp}', [HTPController::class, 'showQuestion'])->name('psikotest-paid.tool.HTP.showQuestion');
    //         Route::post('/tool/4/test/{testHtp}/question/{questionHtp}', [HTPController::class, 'submitAnswer'])->name('psikotest-paid.tool.HTP.submit');
    //         Route::get('/tool/4/test/{testHtp}/summary', [HTPController::class, 'summary'])->name('psikotest-paid.tool.HTP.summary');

    //         // TES SSCT
    //         Route::get('/tool/5', [SSCTController::class, 'showLanding'])->name('psikotest-paid.tool.SSCT.showLanding');
    //         Route::post('/tool/5/start', [SSCTController::class, 'start'])->name('psikotest-paid.tool.SSCT.start');
    //         Route::get('/tool/5/test/{testSsct}/question/{questionSsct}', [SSCTController::class, 'showQuestion'])->name('psikotest-paid.tool.SSCT.showQuestion');
    //         Route::post('/tool/5/test/{testSsct}/question/{questionSsct}', [SSCTController::class, 'submit'])->name('psikotest-paid.tool.SSCT.submit');
    //         Route::get('/tool/5/test/{testSsct}/summary', [SSCTController::class, 'summary'])->name('psikotest-paid.tool.SSCT.summary');

    //         // OCEAN
    //         Route::get('/tool/7', [OCEANController::class, 'showLanding'])->name('psikotest-paid.tool.OCEAN.showLanding');
    //         Route::post('/tool/7/start', [OCEANController::class, 'start'])->name('psikotest-paid.tool.OCEAN.start');
    //         Route::get('/tool/7/test/{testOcean}/question/{questionOcean}', [OCEANController::class, 'showQuestion'])->name('psikotest-paid.tool.OCEAN.showQuestion');
    //         Route::post('/tool/7/test/{testOcean}/question/{questionOcean}', [OCEANController::class, 'submit'])->name('psikotest-paid.tool.OCEAN.submit');
    //         Route::get('/tool/7/test/{testOcean}/summary/', [OCEANController::class, 'showSummary'])->name('psikotest-paid.tool.OCEAN.summary');

    //         Route::post('/tool/7/calculate-result', [ResultOceanController::class, 'calculateAndStoreResult'])->name('psikotest-paid.tool.OCEAN.calculateResult');

    //         // TES DASS-42
    //         Route::get('/tool/9', [DassController::class, 'showLanding'])->name('psikotest-paid.tool.Dass-42.showLanding');
    //         Route::get('/tool/9/start', [DassController::class, 'start'])->name('psikotest-paid.tool.Dass-42.start');
    //         Route::get('/tool/9/test/{testDass}/question/{questionDass}', [DassController::class, 'showQuestion'])->name('psikotest-paid.tool.Dass-42.showQuestion');
    //         Route::post('/tool/9/test/{testDass}/question/{questionDass}', [DassController::class, 'submit'])->name('psikotest-paid.tool.Dass-42.submit');
    //         Route::get('/tool/9/test/{testDass}/summary/', [DassController::class, 'summary'])->name('psikotest-paid.tool.Dass-42.summary');

    //         // TES EPI
    //         Route::get('/tool/EPI', [EPIController::class, 'showLanding'])->name('psikotest-paid.tool.EPI.showLanding');
    //         Route::get('/tool/EPI/start', [EPIController::class, 'start'])->name('psikotest-paid.tool.EPI.start');
    //         Route::get('/tool/EPI/test/{testEpi}/question/{questionEpi}', [EPIController::class, 'showQuestion'])->name('psikotest-paid.tool.EPI.summary');
    //         Route::get('/tool/EPI/test/{testEpi}/question/{questionEpi}', [EPIController::class, 'submit'])->name('psikotest-paid.tool.EPI.summary');
    //         Route::get('/tool/EPI/test/{testEpi}/summary/', [EPIController::class, 'summary'])->name('psikotest-paid.tool.EPI.summary');

    //         // TES ESAI
    //         Route::get('/tool/18', [TesEsaiController::class, 'showLanding'])->name('psikotest-paid.tool.Tes Esai.showLanding');
    //         Route::post('/tool/18/start', [TesEsaiController::class, 'start'])->name('psikotest-paid.tool.Tes Esai.start');
    //         Route::get('/tool/18/test/{testTesEsai}/question/{questionTesEsai}', [TesEsaiController::class, 'showQuestion'])->name('psikotest-paid.tool.Tes Esai.showQuestion');
    //         Route::post('/tool/18/test/{testTesEsai}/question/{questionTesEsai}', [TesEsaiController::class, 'submit'])->name('psikotest-paid.tool.Tes Esai.submit');
    //         Route::get('/tool/18/test/{testTesEsai}/summary/', [TesEsaiController::class, 'summary'])->name('psikotest-paid.tool.Tes Esai.summary');

    //         // TES RMIB
    //         Route::get('/tool/19', [RMIBController::class, 'showLanding'])->name('psikotest-paid.tool.RMIB.showLanding');
    //         Route::post('/tool/19/start', [RMIBController::class, 'startTest'])->name('psikotest-paid.tool.RMIB.startTest');
    //         Route::get('/tool/19/test/{testRmib}', [RMIBController::class, 'showTest'])->name('psikotest-paid.tool.RMIB.showTest');
    //         Route::post('/tool/19/submit-answer/{testRmib}', [RMIBController::class, 'submitAnswer'])->name('psikotest-paid.tool.RMIB.submitAnswer');
    //         Route::get('/tool/19/summary/{testRmib}', [RMIBController::class, 'summary'])->name('psikotest-paid.tool.RMIB.summary');


    //         // BDI
    //         Route::get('/tool/BDI', [LandingController::class, 'LandingBDI'])->name('psikotest-paid.tool.BDI.showLanding');
    //         Route::get('/tool/BDI/test', [LandingController::class, 'TestBDI'])->name('psikotest-paid.tool.BDI.testbdi');
    //         Route::get('/tool/BDI/end/', [LandingController::class, 'EndBDI'])->name('psikotest-paid.tool.BDI.endbdi');


    //         // TES DASS-42
    //         Route::get('/tool/DASS', [DASSController::class, 'showLanding'])->name('psikotest-paid.tool.Dass-42.showLanding');
    //         Route::get('/tool/DASS/test', [DASSController::class, 'showTest'])->name('psikotest-paid.tool.Dass-42.showTest');
    //         Route::get('/tool/DASS/summary', [DASSController::class, 'showSummary'])->name('psikotest-paid.tool.Dass-42.showSummary');

    //         // BIODATA
    //         // Perusahaan
    //         Route::get('/tool/bio-company', [UserCompanyController::class, 'showLanding'])->name('psikotest-paid.tool.BIODATA_PERUSAHAAN.showLanding');
    //         Route::get('/tool/bio-company/{page}', [UserCompanyController::class, 'showPage'])->name('psikotest-paid.tool.BIODATA_PERUSAHAAN.showPage');
    //         Route::post('/tool/bio-company/post', [UserCompanyController::class, 'postCompanyPage'])->name('psikotest-paid.tool.BIODATA_PERUSAHAAN.post');
    //         // Pendidikan
    //         Route::get('/tool/bio-education', [UserEducationController::class, 'showLanding'])->name('psikotest-paid.tool.BIODATA_PENDIDIKAN.showLanding');
    //         Route::get('/tool/bio-education/{page}', [UserEducationController::class, 'showPage'])->name('psikotest-paid.tool.BIODATA_PENDIDIKAN.showPage');
    //         Route::post('/tool/bio-education/post', [UserEducationController::class, 'postEducationPage'])->name('psikotest-paid.tool.BIODATA_PENDIDIKAN.post');
    //         // Komunitas
    //         Route::get('/tool/bio-community', [UserCommunityController::class, 'showLanding'])->name('psikotest-paid.tool.BIODATA_KOMUNITAS.showLanding');
    //         Route::get('/tool/bio-community/{page}', [UserCommunityController::class, 'showPage'])->name('psikotest-paid.tool.BIODATA_KOMUNITAS.showPage');
    //         Route::post('/tool/bio-community/post', [UserCommunityController::class, 'postCommunityPage'])->name('psikotest-paid.tool.BIODATA_KOMUNITAS.post');
    //         // Individual
    //         Route::get('/tool/bio-individual', [UserIndividualController::class, 'showLanding'])->name('psikotest-paid.tool.BIODATA_INDIVIDUAL.showLanding');
    //         Route::get('/tool/bio-individual/{page}', [UserIndividualController::class, 'showPage'])->name('psikotest-paid.tool.BIODATA_INDIVIDUAL.showPage');
    //         Route::post('/tool/bio-individual/post', [UserIndividualController::class, 'postIndividualPage'])->name('psikotest-paid.tool.BIODATA_INDIVIDUAL.post');
    //         // KLINIS
    //         Route::get('/tool/bio-clinical', [UserClinicalController::class, 'showLanding'])->name('psikotest-paid.tool.BIODATA_KLINIS.showLanding');
    //         Route::get('/tool/bio-clinical/{page}', [UserClinicalController::class, 'showPage'])->name('psikotest-paid.tool.BIODATA_KLINIS.showPage');
    //         Route::post('/tool/bio-clinical/post', [UserClinicalController::class, 'postClinicalPage'])->name('psikotest-paid.tool.BIODATA_KLINIS.post');

    //         // VAK
    //         Route::get('/tool/VAK', [VakController::class, 'showLanding'])->name('psikotest-paid.tool.VAK.showLanding');
    //         Route::prefix('/test-13')->group(function () {
    //             Route::post('/start', [VakController::class, 'startTest'])->name('psikotest-paid.VAK.start');
    //             Route::get('/{id}/question/{question_order}', [VakController::class, 'showQuestions'])->name('psikotest-paid.VAK.questions');
    //             Route::post('/{id}/question/{question_order}', [VakController::class, 'submitAnswers'])->name('psikotest-paid.VAK.submit');
    //             Route::get('/{id}/complete', [VakController::class, 'completeTest'])->name('psikotest-paid.VAK.complete');
    //         });
    //     });
});


// Route get image from storage
Route::get('/image/{path}', function ($path) {
    $path = storage_path("app/public/" . $path);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path);
})->where('path', '.*');
