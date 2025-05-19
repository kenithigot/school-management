<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;

Route::get('/admin/student-register', [StudentController::class, 'studentAccount'])->name('register');

Route::post('/admin/student-register', [StudentController::class, 'store'])->name('store');
// Route::get('/admin/view-student', [StudentController::class, 'view'])->name('view');
Route::get('/admin/view-student', [StudentController::class, 'viewStudent'])->name('viewStudent');