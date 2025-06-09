<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Department\DepartmentController;

Route::get('/admin/department/', [DepartmentController::class, 'departmentIndex'])->name('department.departmentIndex');
Route::post('/admin/department/', [DepartmentController::class, 'departmentRegister'])->name('department.register');
Route::get('/admin/department/{id}/edit/{department_name}', [DepartmentController::class, 'departmentEdit'])->name('department.departmentEdit');
Route::put('/admin/department/update/{id}', [DepartmentController::class, 'departmentUpdate'])->name('department.departmentUpdate');
Route::delete('/admin/department/delete/{id}', [DepartmentController::class, 'departmentDelete'])->name('department.departmentDelete');
Route::get('/admin/department/report/', [DepartmentController::class, 'departmentReport'])->name('department.departmentReport');
