<?php

use App\Http\Controllers\Dashboard\ClassPM\BerbinarPlusController;
use App\Http\Controllers\Dashboard\CounselingPM\PeerCounselorController;
use App\Http\Controllers\Dashboard\CounselingPM\PeerCounselorScheduleController;
use App\Http\Controllers\Dashboard\CounselingPM\PsychologistController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\HR\ajaxInternship;
use App\Http\Controllers\Dashboard\HR\DivisionController;
use App\Http\Controllers\Dashboard\HR\InternshipController;
use App\Http\Controllers\Dashboard\HR\KeluargaBerbinarController;
use App\Http\Controllers\Dashboard\HR\PositionController;
use App\Http\Controllers\Dashboard\HR\PositionDescriptionController;
use App\Http\Controllers\Dashboard\HR\PositionRequirementController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('dashboard')->name('dashboard.')->group(function () {

    // Dashbaord Index
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    // Couseling PM |  Counseling Product Management
    route::middleware('role:counseling-pm')->group(function () {

        // Psychologis
        Route::resource('/psychologists', PsychologistController::class)->except('create', 'edit');

        // Peer Counselor
        Route::resource('/peer-counselors', PeerCounselorController::class)->except('create', 'edit');

        // Peer Counselor Schedule
        Route::resource('/peer-counselor-schedules', PeerCounselorScheduleController::class)->except('create', 'show', 'edit');
    });

    // Class Product Management
    route::middleware('role:class-pm')->group(function () {

        // Berbinar Plus
        Route::resource('/berbinar-plus', BerbinarPlusController::class);
    });


    // HR |  Human Resource
    Route::middleware('role:hr')->group(function () {

        // Keluarga Berbinar
        Route::resource('/keluarga-berbinar', KeluargaBerbinarController::class);

        // Position
        Route::resource('/positions', PositionController::class);
        Route::patch('/positions/{id}/active', [PositionController::class, 'setActive'])->name('positions.set_active');

        // Position Description
        Route::resource('/position-descriptions', PositionDescriptionController::class);

        // Position Requirement
        Route::resource('/position-requirements', PositionRequirementController::class);

        // Internship
        Route::resource('/internships', InternshipController::class);
        Route::post('/dashboard/admin/internship/update-status', [ajaxInternship::class, 'updateStatus'])->name('internships.update_status');

        // Divison
        Route::resource('/divisions', DivisionController::class);
    });

    // // Psychological Test Product Management
    // route::middleware('role:ptpm')->group(function () {
    //     //DASHBOARD ADMIN E-LEARNING PSIKOTEST
    //     Route::get('/psikotestData', [DashboardController::class, 'psikotestData'])->name('psikotes.dashboard.psikotestData');
    //     Route::get('/psikotestData/papikostick', [DashboardController::class, 'papikostick'])->name('psikotes.dashboard.papikostick');
    //     Route::get('/psikotestSoal', [DashboardController::class, 'psikotestSoal'])->name('psikotes.dashboard.psikotestSoal');
    // });
});



// // DASHBOARD ARTIKEL
// Route::prefix('dashboard/admin/artikel')->group(function () {
//     Route::get('/', [DashboardArticle::class, 'dashboardArticle'])->name('dashboard.article');
//     Route::get('/create', [DashboardArticle::class, 'addArticle'])->name('dashboard.article.create');
//     Route::get('/update/{id}', [DashboardArticle::class, 'updateArticle'])->name('dashboard.article.update');
//     Route::get('/kategori', [DashboardArticle::class, 'kategoriArticle'])->name('dashboard.article.kategori');
//     Route::get('/postingan', [DashboardArticle::class, 'postinganArticle'])->name('dashboard.article.postingan');
//     Route::get('/penulis', [DashboardArticle::class, 'penulisArticle'])->name('dashboard.article.penulis');
//     Route::get('/detail/{id}', [DashboardArticle::class, 'detailArticle'])->name('dashboard.article.detail');
//     Route::post('/store', [DashboardArticle::class, 'store'])->name('dashboard.article.store');
//     Route::post('/update/ArticleStore/{id}', [DashboardArticle::class, 'updateArticleStore'])->name('dashboard.article.update.store');
//     Route::delete('/delete/{id}', [DashboardArticle::class, 'deleteArticle'])->name('dashboard.article.delete');
//     Route::post('/kategori_store', [DashboardArticle::class, 'addCategory'])->name('dashboard.article.kategori.add');
//     Route::delete('/kategori/{id}', [DashboardArticle::class, 'deleteCategory'])->name('dashboard.article.kategori.delete');
//     Route::put('/kategori/{id}', [DashboardArticle::class, 'updateCategory'])->name('dashboard.article.kategori.update');
//     Route::post('addPenulis', [DashboardArticle::class, 'addPenulis'])->name('dashboard.article.addpenulis');
//     Route::delete('/penulis/{id}', [DashboardArticle::class, 'deletePenulis'])->name('dashboard.article.deletepenulis');
//     Route::put('/penulisUpdate/{id}', [DashboardArticle::class, 'updatePenulis'])->name('dashboard.article.updatepenulis');
// });

// // DASHBOARD PAPI KOSTICK
// Route::get('/respondents', [DashboardPapiKostickController::class, 'allResponden'])->name('psikotest-paid.papi-kostick.data');
// Route::get('/respondents/{id}', [DashboardPapiKostickController::class, 'detailResponden'])->name('psikotest-paid.papi-kostick.detail');
// Route::get('/papi-kostick/soal', [DashboardPapiKostickController::class, 'allSoal'])->name('papi-kostick.soal');
// Route::get('/papi-kostick/soal/{id}/edit', [DashboardPapiKostickController::class, 'editSoal'])->name('papi-kostick.edit-soal');
// Route::put('/papi-kostick/soal/{id}', [DashboardPapiKostickController::class, 'updateSoal'])->name('papi-kostick.update-soal');


// // DASHBOARD VAK
// Route::get('/vak/data', [DashboardVakController::class, 'countUserTest'])->name('dashboard.psikotespaid.vak.data-count');
// Route::get('/vak/responden', [DashboardVakController::class, 'allResponden'])->name('dashboard.psikotespaid.vak.all-responden');
// Route::get('/vak/detail/{id}', [DashboardVakController::class, 'detailAnswer'])->name('dashboard.psikotespaid.vak.detail-answer');

// //DASHBOARD ADMIN E-LEARNING PSIKOTEST
// Route::get('/psikotestData', [DashboardController::class, 'psikotestData'])->name('psikotes.dashboard.psikotestData');
// Route::get('/psikotestData/papikostick', [DashboardController::class, 'papikostick'])->name('psikotes.dashboard.papikostick');
// Route::get('/psikotestSoal', [DashboardController::class, 'psikotestSoal'])->name('psikotes.dashboard.psikotestSoal');

// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/dashboard/admin', [DashboardController::class, 'index'])->name('dashboard');
//     Route::get('/dashboard/admin/faqs', [DashboardController::class, 'faqs'])->name('dashboard.faqs');
// });
