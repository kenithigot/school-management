<?php

namespace App\Http\Controllers\Assignment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Subject;
use App\Models\Course;
use App\Models\Assignment;

class AssignmentController extends Controller
{
    public function assignmentIndex()
    {
        $departments = Department::pluck('department_name', 'id')->toArray();
        $subjects = Subject::pluck('subject_name', 'id')->toArray();
        return view('admin.assignment.auth.index', compact(['departments', 'subjects']));
    }

    public function getDesignations($department_id)
    {
        $designations = Course::where('department_id', $department_id)->get(['id', 'course_name']);
        return response()->json($designations);
    }

    public function assignmentStore(Request $request)
    {
        $validated = $request->validate([
            'assignmentTitle' => 'required|string|max:255',
            'instructions' => 'required|string',
            'department' => 'required|exists:departments,id',
            'course' => 'required|exists:course,id',
            'subject' => 'required|exists:subjects,id',
            'yearLevel' => 'required|in:1,2,3,4',
            'dueDate' => 'required|string',
            'assignmentType' => 'required|in:Homework,Project,Quiz,Report',
            'submissionMode' => 'required|in:Online Upload,In-person Submission,Email',
            'totalPoint' => 'required|numeric|min:1',
            'issue_date' => 'required|string',
        ]);

        Assignment::create([
            'assignment_title' => $validated['assignmentTitle'],
            'description' => $validated['instructions'],
            'department_id' => $validated['department'],
            'course_id' => $validated['course'],
            'subject_id' => $validated['subject'],
            'year_level' => $validated['yearLevel'],
            'due_date' => $validated['dueDate'],
            'assignment_type' => $validated['assignmentType'],
            'submission_mode' => $validated['submissionMode'],
            'total_point' => $validated['totalPoint'],
            'issue_date' => $validated['issue_date']
        ]);

        return redirect()->route('assignment.assignmentIndex')->with('success', 'Assignment submit successfully.');
    }

    public function assignmentView()
    {
        $assignments = Assignment::with('department', 'course', 'subject', 'teacher')->paginate(9);
        return view('admin.assignment.auth.view-assignment', compact('assignments'));
    }

    public function assignmentViewSpecific(Request $request, $id)
    {
        $assignment = Assignment::findOrFail($id);
        $departments = Department::pluck('department_name', 'id')->toArray();
        $courses = Course::where('department_id', $assignment->department_id)
            ->pluck('course_name', 'id')
            ->toArray();
        $subjects = Subject::pluck('subject_name', 'id')->toArray();
        return view('admin.assignment.auth.view-specific', compact(['assignment', 'departments', 'courses', 'subjects']));
    }

    public function assignmentUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'assignmentTitle' => 'required|string|max:255',
            'instructions' => 'required|string',
            'department' => 'required|exists:departments,id',
            'course' => 'required|exists:course,id',
            'subject' => 'required|exists:subjects,id',
            'yearLevel' => 'required|in:1,2,3,4',
            'dueDate' => 'required|string',
            'assignmentType' => 'required|in:Homework,Project,Quiz,Report',
            'submissionMode' => 'required|in:Online Upload,In-person Submission,Email',
            'totalPoint' => 'required|numeric|min:1'
        ]);

        $assignment = Assignment::findOrFail($id);

        $assignment->assignment_title = $validated['assignmentTitle'];
        $assignment->description = $validated['instructions'];
        $assignment->department_id = $validated['department'];
        $assignment->course_id = $validated['course'];
        $assignment->subject_id = $validated['subject'];
        $assignment->year_level = $validated['yearLevel'];
        $assignment->due_date = $validated['dueDate'];
        $assignment->assignment_type = $validated['assignmentType'];
        $assignment->submission_mode = $validated['submissionMode'];
        $assignment->total_point = $validated['totalPoint'];

        $assignment->save();

        return redirect()->route('assignment.assignmentView')->with('success', 'Assignment updated successfully.');
    }
}
