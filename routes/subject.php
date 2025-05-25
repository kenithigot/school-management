<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Subject\SubjectController;

route::get('/admin/subject-register', [SubjectController::class, 'subjectIndex'])->name('subject.subjectIndex');
route::post('/admin/subject-register', [SubjectController::class, 'subjectRegister'])->name('subject.register');
route::get('/admin/manage-subject', [SubjectController::class, 'manageSubjectIndex'])->name('subject.manageSubjectIndex');
route::get('/admin/subject-register/department/{department}', [SubjectController::class, 'manageSubject'])->name('subject.manageSubject');