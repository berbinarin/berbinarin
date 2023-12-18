<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HiringGeneralRequirementsController;
use App\Http\Controllers\HiringPositionsController;
use App\Http\Controllers\HiringPositionsJobDescriptionController;
use App\Http\Controllers\HiringPositionsRequirementsController;
use App\Http\Controllers\LandingController;
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

    // MODUL POSITIONS
    Route::get('/dashboard/admin/positions', [DashboardController::class, 'positions'])->name('dashboard.positions');
    Route::get('/dashboard/admin/positions/edit/{id}', [DashboardController::class, 'editPositions']);

    // MODUL POSITIONS JOB DESCRIPTION
    Route::get('/dashboard/admin/positions/descriptions', [DashboardController::class, 'jobDescriptions'])->name('dashboard.positions.descriptions');
    Route::get('/dashboard/admin/positions/descriptions/edit/{id}', [DashboardController::class, 'editJobDescriptions']);

    // MODUL POSITIONS REQUIREMENTS
    Route::get('/dashboard/admin/positions/requirements', [DashboardController::class, 'requirements'])->name('dashboard.positions.requirements');
    Route::get('/dashboard/admin/positions/requirements/edit/{id}', [DashboardController::class, 'editRequirements']);
});