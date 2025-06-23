<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\PsikotestPaid\Biodata\UserCompany;
use App\Http\Controllers\PsikotestPaid\UserPsikotestPaidController;
use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserCompanyController;
use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserClinicalController;
// use App\Http\Controllers\PsikotestPaid\Tools\Biodata\QuestionEssayController;
use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserCommunityController;
use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserEducationController;
use App\Http\Controllers\PsikotestPaid\Tools\Biodata\UserIndividualController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('psikotest-paid')->group(function () {
    Route::middleware(['web'])->group(function () {
        Route::post('/post-company', [UserCompanyController::class, 'postCompanyPage']);
        Route::post('/post-education', [UserEducationController::class, 'postEducationPage']);
        Route::post('/post-community', [UserCommunityController::class, 'postCommunityPage']);
        Route::post('/post-individual', [UserIndividualController::class, 'postIndividualPage']);
        Route::post('/post-clinical', [UserClinicalController::class, 'postClinicalPage']);
    });
    // Route::resource('/question-essay', QuestionEssayController::class);
    Route::resource('/user-company', UserCompanyController::class);
    Route::resource('/user-community', UserCommunityController::class);
    Route::resource('/user-education', UserEducationController::class);
    Route::resource('/user-individual', UserIndividualController::class);
    Route::resource('/user-clinical', UserClinicalController::class);
});
