<?php

use App\Http\Controllers\LandingController;
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