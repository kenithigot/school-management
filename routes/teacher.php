<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\TeacherController;

Route::get('/admin/teacher-register', [TeacherController::class, 'teacherAccount'])->name('teacher.register');
Route::post('/admin/teacher-register', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('/admin/view-teacher', [TeacherController::class, 'viewTeacher'])->name('viewTeacher');

Route::get('/get-designations/{department_id}', [TeacherController::class, 'getDesignations'])->name('fetch.designations');
Route::get('/admin/view-teacher/teacher/{id}', [TeacherController::class, 'viewTeacherDetails'])->name('viewTeacherDetails');