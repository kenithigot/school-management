<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\TeacherController;

Route::get('/admin/teacher-register', [TeacherController::class, 'teacherAccount'])->name('teacher.register');
Route::post('/admin/teacher-register', [TeacherController::class, 'store'])->name('teacher.store');
