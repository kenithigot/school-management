<?php

namespace App\Http\Controllers\Assignment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Subject;

class AssignmentController extends Controller
{
    public function assignmentIndex()
    {
        $departments = Department::pluck('department_name', 'id')->toArray();
        $subjects = Subject::pluck('subject_name', 'id')->toArray();
        return view('admin.assignment.auth.index', compact(['departments', 'subjects']));
    }
}
