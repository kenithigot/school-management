<?php

namespace App\Http\Controllers\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Subject;

class SubjectController extends Controller
{

    public function subjectIndex()
    {
        $departments = Department::select('id', 'department_name')->get();
        return view('admin.subject.auth.register-subject', compact('departments'));
    }
    public function subjectRegister(Request $request)
    {
        $departments = Department::select('id', 'department_name')->get();

        $validated = $request->validate([
            'subjectName' => 'required|string|max:255',
            'subjectCode' => 'required|string|max:10|unique:subjects,subject_code',
            'description' => 'nullable|string|max:500',
            'subjectUnit' => 'required|integer|min:1|max:30',
            'yearLevel' => 'required|integer|min:1|max:5',
            'semester' => 'required|integer|min:1|max:3',
            'department' => 'required|exists:departments,id',
        ]);

        Subject::create([
            'subject_name' => $validated['subjectName'],
            'subject_code' => $validated['subjectCode'],
            'description' => $validated['description'],
            'units' => $validated['subjectUnit'],
            'year_level' => $validated['yearLevel'],
            'semester' => $validated['semester'],
            'department_id' => $validated['department'],
        ]);

        return redirect()->back()->with('success', 'Subject added successfully.');
        // return view('admin.subject.auth.register-subject', compact('departments'));
    }

    public function manageSubjectIndex()
    {
        $subjects = Subject::with('department')->get();
        return view('admin.subject.auth.manage-subject', compact('subjects'));
    }

    public function manageSubject($department_id)
    {
        $department = Department::with('subjects')->findOrFail($department_id);
        $subjects = $department->subjects;
        return view('admin.subject.auth.specific-department', compact('subjects', 'department'));
    }

    public function editSubjectIndex($department, $id)
    {
        $subject = Subject::with('department')->findOrFail($id);
        return view('admin.subject.auth.edit-subject', compact('subject'));
    }

    public function updateSubject(Request $request, $department, $id)
    {
        $validated = $request->validate([
            'subjectName' => 'required|string|max:255|unique:subjects,subject_name,' . $id,
            'subjectCode' => 'required|string|max:255|unique:subjects,subject_code,' . $id,
            'subjectDescription' => 'required|string|max:255',
            'unit' => 'required|integer|min:1',
            'semester' => 'required|in:1,2,3',
            'yearLevel' => 'required|in:1,2,3,4'
        ]);

        $subject = Subject::findOrFail($id);

        $subject->subject_name = $validated['subjectName'];
        $subject->subject_code = $validated['subjectCode'];
        $subject->description = $validated['subjectDescription'];
        $subject->units = $validated['unit'];
        $subject->semester = $validated['semester'];
        $subject->year_level = $validated['yearLevel'];

        $subject->save();

        return redirect()->route('subject.manageSubject', $subject->department_id)->with('success', 'Subject Updated successfully.');
    }

    public function deleteSubject($id)
    {
        $subjects = Subject::findOrFail($id);
        $subjects->delete();

        return redirect()->route('subject.manageSubject', ['department' => $subjects->department_id])->with('deleted', 'Subject deleted successfully.');
    }

    public function testSubject() {
        return view('admin.subject.test');
    }
}
