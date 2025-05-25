<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPassword;
use App\Http\Controllers\Auth\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/forgot-password', [ForgotPassword::class, 'forgotPassword'])->name('forgot-password');
Route::get('/forgot-password', [ForgotPassword::class, 'sendVerificationCode'])->name('forgot-password');
Route::get('/admin', [Dashboard::class, 'dashboard'])->name('dashboard');

require __DIR__.'/student.php';
require __DIR__.'/teacher.php';
require __DIR__.'/subject.php';
