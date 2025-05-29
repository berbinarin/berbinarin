<?php

use App\Http\Controllers\Dashboard\DashboardUserController;
use Illuminate\Support\Facades\Route;

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
