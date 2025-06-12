<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Assignment\AssignmentController;
use App\Http\Controllers\Teacher\TeacherController;

Route::get('/admin/assignment/add/', [AssignmentController::class, 'assignmentIndex'])->name('assignment.assignmentIndex');
Route::get('/get-designations/{department_id}', [TeacherController::class, 'getDesignations'])->name('fetch.designations');
Route::post('/admin/assignment/add/', [AssignmentController::class, 'assignmentStore'])->name('assignment.assignmentStore');
Route::get('/admin/assignment/view/', [AssignmentController::class, 'assignmentView'])->name('assignment.assignmentView');
Route::get('/admin/assignment/view/assignment/{id}',[AssignmentController::class, 'assignmentViewSpecific'])->name('assignment.assignmentViewSpecific');
Route::put('/admin/assignment/view/assignment/{id}/update',action: [AssignmentController::class, 'assignmentUpdate'])->name(name: 'assignment.assignmentUpdate');
Route::delete('/admin/assignment/view/assignment/{id}/delete',[AssignmentController::class, 'assignmentDelete'])->name('assignment.assignmentDelete');

//Setting up a route for grading assignments
Route::get('/admin/assignment/grading/', [AssignmentController::class, 'assignmentGrading'])->name('assignment.assignmentGrading');
