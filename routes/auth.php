<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register'])->name('auth.register')->middleware('guest');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticated'])->name('auth.authenticated')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');
