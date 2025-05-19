<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Department;
use App\Models\User;
use App\Models\Course;
;

use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function teacherAccount()
    {
        $departments = Department::pluck('department_name', 'id');
        return view('admin.users.teachers.auth.register', compact('departments'));
    }

    public function getDesignations($department_id)
    {
        $designations = Course::where('department_id', $department_id)->get(['id', 'course_name']);
        return response()->json($designations);
    }


    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            // Teacher info
            'firstName' => 'required|string|max:255',
            'middleName' => 'nullable|string|max:255',
            'lastName' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
            'dateOfBirth' => 'required|date',
            'contactNumber' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',

            // Professional info
            'dateOfJoining' => 'required|date',
            'educationalQualification' => 'required|string|max:255',
            'employmentType' => 'required|in:Full-time,Part-time,Contractual,Temporary',
            'employmentStatus' => 'required|in:Active,Inactive,On Leave,Resigned,Retired,Terminated,Newly Hired',
            'department' => 'required|exists:departments,id',
            'designation' => 'required|exists:course,id',

            // Login Info
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:8|confirmed'       

        ]);

        $middleName = $validated['middleName'] ?? '';

        // Teacher ID generation
        $latestTeacher = Teacher::latest('id')->first();
        $teacherId = $latestTeacher ? $latestTeacher->id + 1 : 1;
        $teacherGeneratedId = 'TCHR-' . str_pad($teacherId, 4, '0', STR_PAD_LEFT);

        // Create Teacher
        $teacher = Teacher::create([
            'teacher_id' => $teacherGeneratedId,
            'first_name' => $validated['firstName'],
            'middle_name' => $middleName,
            'last_name' => $validated['lastName'],
            'gender' => $validated['gender'],
            'date_of_birth' => $validated['dateOfBirth'],
            'contact_number' => $validated['contactNumber'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'date_hired' => $validated['dateOfJoining'],
            'educational_qualification' => $validated['educationalQualification'],
            'employment_type' => $validated['employmentType'],
            'employment_status' => $validated['employmentStatus'],
            'department_id' => $validated['department'],
            'designation' => $validated['designation'],
        ]);

        $userType = \App\Models\UserType::where('type_name', 'Teacher')->first();

        if (!$userType) {
            return redirect()->back()->with('error', 'User type "teacher" not found!');
        }

        // Create user account
        User::create([
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
            'user_id' => $teacher->id,
            'user_type_id' => $userType->id,
        ]);

        return redirect()->back()->with('success', 'Teacher account created successfully!');
    }

    public function viewTeacher()
    {
        return view('admin.users.teachers.auth.display');
    }


    public function viewTeacherDetails($id)
    {
        $teacher = Teacher::with(['department', 'course'])->findOrFail($id);
        $selectedTeacher = [
            'full_name' => $teacher->first_name . ' ' . $teacher->middle_name . ' ' . $teacher->last_name ?? 'N/A',
            'gender' => $teacher->gender ?? 'N/A',
            'date_of_birth' => $teacher->date_of_birth ?? 'N/A',
            'contact_number' => $teacher->contact_number ?? 'N/A',
            'address' => $teacher->address ?? 'N/A',
            'email' => $teacher->email ?? 'N/A',
            'date_of_joining' => $teacher->date_hired ?? 'N/A',
            'educational_qualification' => $teacher->educational_qualification ?? 'N/A',
            'employment_type' => $teacher->employment_type ?? 'N/A',
            'employment_status' => $teacher->employment_status ?? 'N/A',
            'department' => $teacher->department->department_name ?? 'N/A',
            'designation' => $teacher->course->course_name ?? 'N/A',
        ];
        return view('admin.users.teachers.auth.view-detail', compact('teacher', 'selectedTeacher'));
    }
}
