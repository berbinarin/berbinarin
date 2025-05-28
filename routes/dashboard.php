<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\HumanResource\ajaxInternship;
use App\Http\Controllers\Dashboard\HumanResource\DivisionController;
use App\Http\Controllers\Dashboard\HumanResource\InternshipController;
use App\Http\Controllers\Dashboard\HumanResource\KeluargaBerbinarController;
use App\Http\Controllers\Dashboard\HumanResource\PositionController;
use App\Http\Controllers\Dashboard\HumanResource\PositionDescriptionController;
use App\Http\Controllers\Dashboard\HumanResource\PositionRequirementController;
use App\Http\Controllers\Dashboard\HumanResource\UserInternshipController;
use Illuminate\Support\Facades\Route;

// HR

Route::middleware('auth')->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    // Human Resource
    Route::middleware('role:human_resource')->group(function () {

        // Keluarga Berbinar
        Route::resource('/keluarga-berbinar', KeluargaBerbinarController::class);

        // MODUL POSITIONS
        Route::resource('/positions', PositionController::class);
        Route::patch('/positions/{id}/active', [PositionController::class, 'setActive'])->name('positions.set_active');

        // MODUL POSITIONS JOB DESCRIPTION
        Route::resource('/position-descriptions', PositionDescriptionController::class);

        // MODUL POSITIONS REQUIREMENTS
        Route::resource('/position-requirements', PositionRequirementController::class);

        // MODUL INTERNSHIP
        Route::resource('/internships', InternshipController::class);
        // INTERN AJAX
        Route::post('/dashboard/admin/internship/update-status', [ajaxInternship::class, 'updateStatus'])->name('internships.update_status');
        // Route::get('/dashboard/admin/internship', [DashboardController::class, 'internship'])->name('dashboard.internship');
        // Route::patch('/dashboard/admin/internship/setProcess/{id}', [UserInternshipController::class, 'SetProcess'])->name('dashboard.internship.setProcess');
        // Route::get('/dashboard/admin/internshipDataDetails/{id}', [DashboardController::class, 'internshipDataDetails'])->name('dashboard.internshipDataDetails');
        // Route::get('/dashboard/admin/internshipDataDetails/edit/{id}', [DashboardController::class, 'editInternship'])->name('dashboard.editInternship');
        // Route::put('/dashboard/admin/internshipDataDetails/update/{id}', [DashboardController::class, 'updateInternship'])->name('dashboard.updateInternship');

        // MODUL MANAGE DIVISION
        Route::resource('/divisions', DivisionController::class);
        // Route::get('/dashboard/admin/manage-division', [DashboardController::class, 'manageDivision'])->name('dashboard.manageDivision');
        // Route::get('/dashboard/admin/manage-division/add', [DashboardController::class, 'addManageDivision'])->name('dashboard.manageDivision.add');
        // Route::get('/dashboard/manage-division/{id}/detail', [DashboardController::class, 'detailManageDivision'])->name('dashboard.manageDivision.details');
        // Route::post('/dashboard/manage-division/store', [DashboardController::class, 'storeManageDivision'])->name('dashboard.manageDivision.store');
        // Route::get('/dashboard/manage-division/{id}/edit', [DashboardController::class, 'editManageDivision'])->name('dashboard.manageDivision.edit');
        // Route::post('/dashboard/manage-division/{id}/update', [DashboardController::class, 'updateManageDivision'])->name('dashboard.manageDivision.update');
        // Route::delete('/dashboard/manage-division/{id}/delete', [DashboardController::class, 'deleteManageDivision'])->name('dashboard.manageDivision.delete');
        // Route::delete('/dashboard/manage-division/delete/{id}', [DashboardController::class, 'deleteSubDivision'])->name('dashboard.manageDivision.deleteSubDivision');

    });

    // // Psychological Test Product Management
    // route::middleware('role:ptpm')->group(function () {
    //     //DASHBOARD ADMIN E-LEARNING PSIKOTEST
    //     Route::get('/psikotestData', [DashboardController::class, 'psikotestData'])->name('psikotes.dashboard.psikotestData');
    //     Route::get('/psikotestData/papikostick', [DashboardController::class, 'papikostick'])->name('psikotes.dashboard.papikostick');
    //     Route::get('/psikotestSoal', [DashboardController::class, 'psikotestSoal'])->name('psikotes.dashboard.psikotestSoal');
    // });

    // // Class Product Management
    // route::middleware('role:cpm')->group(function () {
    //     // MODUL ADMIN BERBINAR PLUS
    //     Route::get('/dashboard/admin/berbinarplus/data', [DashboardController::class, 'berbinarplusUserData'])->name('dashboard.berbinarplus.data');
    // });

    // // Counseling Product Management
    // route::middleware('role:cpm')->group(function () {
    //     // MODUL KONSELLING PSIKOLOG
    //     Route::get('/dashboard/admin/psikologData', [DashboardController::class, 'PsikologData'])->name('dashboard.PsikologData');
    //     Route::post('/dashboard/admin/psikologData/add', [DashboardController::class, 'addPsikologData'])->name('dashboard.add.PsikologData');
    //     Route::get('/dashboard/admin/psikologDataDetails/{id}', [DashboardController::class, 'PsikologDataDetails'])->name('dashboard.PsikologDataDetails');
    //     Route::put('/dashboard/admin/psikologDataDetails/edit/{id}', [DashboardController::class, 'editPsikologDataDetails'])->name('dashboard.edit.PsikologDataDetails');
    //     Route::get('/dashboard/admin/psikologDataDetails/delete/{id}', [DashboardController::class, 'deletePsikologDataDetails'])->name('dashboard.delete.PsikologDataDetails');
    //     Route::get('/dashboard/admin/counselorData', [DashboardController::class, 'PeerConsellorData'])->name('dashboard.PeerConsellorData');
    //     Route::post('/dashboard/admin/counselorData/add', [DashboardController::class, 'addPeerConsellorData'])->name('dashboard.add.PeerConsellorData');
    //     Route::get('/dashboard/admin/counselorDataDetails/{id}', [DashboardController::class, 'PeerConsellorDataDetails'])->name('dashboard.PeerConsellorDataDetails');
    //     Route::put('/dashboard/admin/counselorDataDetails/edit/{id}', [DashboardController::class, 'editPeerConsellorDataDetails'])->name('dashboard.edit.PeerConsellorDataDetails');
    //     Route::get('/dashboard/admin/counselorDataDetails/delete/{id}', [DashboardController::class, 'deletePeerConsellorDataDetails'])->name('dashboard.delete.PeerConsellorDataDetails');
    //     Route::get('/dashboard/admin/counselorSchedule', [DashboardController::class, 'PeerConsellorSchedule'])->name('dashboard.PeerConsellorSchedule');
    //     Route::post('/dashboard/admin/counselorSchedule/add', [DashboardController::class, 'addPeerConsellorSchedule'])->name('dashboard.add.PeerConsellorSchedule');
    //     Route::put('/dashboard/admin/counselorSchedule/edit/{id}', [DashboardController::class, 'editPeerConsellorSchedule'])->name('dashboard.edit.PeerConsellorSchedule');
    //     Route::get('/dashboard/admin/counselorSchedule/delete/{id}', [DashboardController::class, 'deletePeerConsellorSchedule'])->name('dashboard.delete.PeerConsellorSchedule');
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
