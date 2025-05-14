<?php

use App\Http\Controllers\ArticleController\DashboardArticle;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Internship\ajaxInternship;
use App\Http\Controllers\Internship\UserInternshipController;
use App\Http\Controllers\KeluargaBerbinarin\DashboardKeluargaBerbinar;
use App\Http\Controllers\PsikotestPaid\DashboardUserController;
use App\Http\Controllers\PsikotestPaid\Tools\PapiKostick\DashboardPapiKostickController;
use App\Http\Controllers\PsikotestPaid\Tools\VAK\DashboardVakController;
use App\Http\Controllers\testGratisController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard/admin/berbinar-family')->group(function () {
    Route::get('/', [DashboardKeluargaBerbinar::class, 'berbinarFamily'])->name('dashboard.berbinarFamily');
    Route::get('/add', [DashboardKeluargaBerbinar::class, 'addBerbinarFamily'])->name('dashboard.berbinarFamily.add');
    Route::get('/tampil', [DashboardKeluargaBerbinar::class, 'tampilBerbinarFamily'])->name('dashboard.berbinarFamily.tampil');
    Route::get('/detail/{id}', [DashboardKeluargaBerbinar::class, 'detailBerbinarFamily'])->name('dashboard.berbinarFamily.details');
    Route::get('/edit/{id}', [DashboardKeluargaBerbinar::class, 'editBerbinarFamily'])->name('dashboard.berbinarFamily.edit');
    Route::post('/submit', [DashboardKeluargaBerbinar::class, 'submitBerbinarFamily'])->name('dashboard.berbinarFamily.submit');
    Route::put('/update/{id}', [DashboardKeluargaBerbinar::class, 'updateBerbinarFamily'])->name('dashboard.berbinarFamily.update');
    Route::delete('/delete/{id}', [DashboardKeluargaBerbinar::class, 'deleteBerbinarFamily'])->name('dashboard.berbinarFamily.delete');
});

//DASHBOARD ADMIN E-LEARNING PSIKOTEST
Route::get('/psikotestData', [DashboardController::class, 'psikotestData'])->name('psikotes.dashboard.psikotestData');
Route::get('/psikotestData/papikostick', [DashboardController::class, 'papikostick'])->name('psikotes.dashboard.papikostick');
Route::get('/psikotestSoal', [DashboardController::class, 'psikotestSoal'])->name('psikotes.dashboard.psikotestSoal');

// DASHBOARD ARTIKEL
Route::prefix('dashboard/admin/artikel')->group(function () {
    Route::get('/', [DashboardArticle::class, 'dashboardArticle'])->name('dashboard.article');
    Route::get('/create', [DashboardArticle::class, 'addArticle'])->name('dashboard.article.create');
    Route::get('/update/{id}', [DashboardArticle::class, 'updateArticle'])->name('dashboard.article.update');
    Route::get('/kategori', [DashboardArticle::class, 'kategoriArticle'])->name('dashboard.article.kategori');
    Route::get('/postingan', [DashboardArticle::class, 'postinganArticle'])->name('dashboard.article.postingan');
    Route::get('/penulis', [DashboardArticle::class, 'penulisArticle'])->name('dashboard.article.penulis');
    Route::get('/detail/{id}', [DashboardArticle::class, 'detailArticle'])->name('dashboard.article.detail');
    Route::post('/store', [DashboardArticle::class, 'store'])->name('dashboard.article.store');
    Route::post('/update/ArticleStore/{id}', [DashboardArticle::class, 'updateArticleStore'])->name('dashboard.article.update.store');
    Route::delete('/delete/{id}', [DashboardArticle::class, 'deleteArticle'])->name('dashboard.article.delete');
    Route::post('/kategori_store', [DashboardArticle::class, 'addCategory'])->name('dashboard.article.kategori.add');
    Route::delete('/kategori/{id}', [DashboardArticle::class, 'deleteCategory'])->name('dashboard.article.kategori.delete');
    Route::put('/kategori/{id}', [DashboardArticle::class, 'updateCategory'])->name('dashboard.article.kategori.update');
    Route::post('addPenulis', [DashboardArticle::class, 'addPenulis'])->name('dashboard.article.addpenulis');
    Route::delete('/penulis/{id}', [DashboardArticle::class, 'deletePenulis'])->name('dashboard.article.deletepenulis');
    Route::put('/penulisUpdate/{id}', [DashboardArticle::class, 'updatePenulis'])->name('dashboard.article.updatepenulis');
});

// DASHBOARD PAPI KOSTICK
Route::get('/respondents', [DashboardPapiKostickController::class, 'allResponden'])->name('psikotest-paid.papi-kostick.data');
Route::get('/respondents/{id}', [DashboardPapiKostickController::class, 'detailResponden'])->name('psikotest-paid.papi-kostick.detail');
Route::get('/papi-kostick/soal', [DashboardPapiKostickController::class, 'allSoal'])->name('papi-kostick.soal');
Route::get('/papi-kostick/soal/{id}/edit', [DashboardPapiKostickController::class, 'editSoal'])->name('papi-kostick.edit-soal');
Route::put('/papi-kostick/soal/{id}', [DashboardPapiKostickController::class, 'updateSoal'])->name('papi-kostick.update-soal');


// DASHBOARD VAK
Route::get('/vak/data', [DashboardVakController::class, 'countUserTest'])->name('dashboard.psikotespaid.vak.data-count');
Route::get('/vak/responden', [DashboardVakController::class, 'allResponden'])->name('dashboard.psikotespaid.vak.all-responden');
Route::get('/vak/detail/{id}', [DashboardVakController::class, 'detailAnswer'])->name('dashboard.psikotespaid.vak.detail-answer');

//DASHBOARD ADMIN E-LEARNING PSIKOTEST
Route::get('/psikotestData', [DashboardController::class, 'psikotestData'])->name('psikotes.dashboard.psikotestData');
Route::get('/psikotestData/papikostick', [DashboardController::class, 'papikostick'])->name('psikotes.dashboard.papikostick');
Route::get('/psikotestSoal', [DashboardController::class, 'psikotestSoal'])->name('psikotes.dashboard.psikotestSoal');

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
        Route::get('/data-test/dashboardVAK/jawaban/detail/{id}', [DashboardUserController::class, 'detailVAK'])->name('dashboard.psikotespaid.detailVAK');
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

        // Dashboard DASS-42
        Route::get('/data-test/Dass-42', [DashboardUserController::class, 'dashboardDass42'])->name('dashboard.psikotespaid.dass42');
        Route::get('/data-test/Dass-42/data', [DashboardUserController::class, 'dataDass42'])->name('dashboard.psikotespaid.datadass42');
        Route::get('/data-test/Dass-42/data/{psikotest_paid_test_id}/detail', [DashboardUserController::class, 'detailDass42'])->name('dashboard.psikotespaid.detaildass42');

        // Dashboard EPI
        Route::get('/data-test/EPI', [DashboardUserController::class, 'dashboardEPI'])->name('dashboard.psikotespaid.epi');
        Route::get('/data-test/EPI/data', [DashboardUserController::class, 'dataEPI'])->name('dashboard.psikotespaid.dataepi');
        Route::get('/data-test/EPI/data/detail/{testId}', [DashboardUserController::class, 'detailEPI'])->name('dashboard.psikotespaid.detailepi');

        // Dashboard RMIB
        Route::get('/data-test/RMIB', [DashboardUserController::class, 'dashboardRMIB'])->name('dashboard.psikotespaid.rmib');
        Route::get('/data-test/RMIB/data', [DashboardUserController::class, 'dataRMIB'])->name('dashboard.psikotespaid.datarmib');
        Route::get('/data-test/RMIB/data/{testRmib}/detail', [DashboardUserController::class, 'detailRMIB'])->name('dashboard.psikotespaid.detailrmib');


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

    // MODUL MANAGE DIVISION
    Route::get('/dashboard/admin/manage-division', [DashboardController::class, 'manageDivision'])->name('dashboard.manageDivision');
    Route::get('/dashboard/admin/manage-division/add', [DashboardController::class, 'addManageDivision'])->name('dashboard.manageDivision.add');
    Route::get('/dashboard/manage-division/{id}/detail', [DashboardController::class, 'detailManageDivision'])->name('dashboard.manageDivision.details');
    Route::post('/dashboard/manage-division/store', [DashboardController::class, 'storeManageDivision'])->name('dashboard.manageDivision.store');
    Route::get('/dashboard/manage-division/{id}/edit', [DashboardController::class, 'editManageDivision'])->name('dashboard.manageDivision.edit');
    Route::post('/dashboard/manage-division/{id}/update', [DashboardController::class, 'updateManageDivision'])->name('dashboard.manageDivision.update');
    Route::delete('/dashboard/manage-division/{id}/delete', [DashboardController::class, 'deleteManageDivision'])->name('dashboard.manageDivision.delete');
    Route::delete('/dashboard/manage-division/delete/{id}', [DashboardController::class, 'deleteSubDivision'])->name('dashboard.manageDivision.deleteSubDivision');

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
