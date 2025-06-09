<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Subject\SubjectController;

route::get('/admin/subject/add-subject', [SubjectController::class, 'subjectIndex'])->name('subject.subjectIndex');
route::post('/admin/subject/add-subject', [SubjectController::class, 'subjectRegister'])->name('subject.register');
route::get('/admin/subject/departments', [SubjectController::class, 'manageSubjectIndex'])->name('subject.manageSubjectIndex');
route::get('/admin/subject/department/{department}', action: [SubjectController::class, 'manageSubject'])->name('subject.manageSubject');
route::delete('/admin/subject/department/{department}', action: [SubjectController::class, 'deleteSubject'])->name('subject.deleteSubject');
route::get('/admin/subject//department/{department}/subject/{id}/edit-subject', action: [SubjectController::class, 'editSubjectIndex'])->name('subject.editSubjectIndex');
route::put('/admin/department/{department}/subject/{id}/update', action: [SubjectController::class, 'updateSubject'])->name('subject.updateSubject');


route::get('/admin/test', [SubjectController::class, 'testSubject'])->name('subject.test');