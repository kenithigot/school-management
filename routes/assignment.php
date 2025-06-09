<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Assignment\AssignmentController;
use App\Http\Controllers\Teacher\TeacherController;

Route::get('/admin/assignment/add/', [AssignmentController::class, 'assignmentIndex'])->name('assignment.assignmentIndex');
Route::get('/get-designations/{department_id}', [TeacherController::class, 'getDesignations'])->name('fetch.designations');
