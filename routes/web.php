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
Route::get('/tentang-kami', [LandingController::class, 'tentangKami'])->name('tentang-kami');
Route::get('/produk-berbinar', [LandingController::class, 'produkBerbinar'])->name('produk-berbinar');
Route::get('/konseling', [LandingController::class, 'konseling'])->name('konseling');
Route::get('/psikotes', [LandingController::class, 'psikotes'])->name('psikotes');
Route::get('/kelas', [LandingController::class, 'kelas'])->name('kelas');
Route::get('/artikel', [LandingController::class, 'artikel'])->name('artikel');
Route::get('/hiring', [LandingController::class, 'hiring'])->name('hiring');