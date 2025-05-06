<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;;

use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function teacherAccount()
    {
        return view('admin.users.teachers.auth.register');
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
            'contactNum' => 'required|string|max:20',
            'emailTeacher' => 'required|email|unique:teachers,email',

            // Professional info
            'dateOfJoining' => 'required|date',
            'educationalQualification' => 'required|string|max:255',
            'employmentType' => 'required|in:Full-time,Part-time,Contractual,Temporary',

            // Login
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $middleName = $validated['middleName'] ?? '';
        // Create Teacher
        $teacher = Teacher::create([
            'first_name' => $validated['firstName'],
            'middle_name' => $middleName,
            'last_name' => $validated['lastName'],
            'gender' => $validated['gender'],
            'date_of_birth' => $validated['dateOfBirth'],
            'contact_number' => $validated['contactNum'],
            'email' => $validated['emailTeacher'],
            'date_hired' => $validated['dateOfJoining'],
            'educational_qualification' => $validated['educationalQualification'],
            'employment_type' => $validated['employmentType']
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
}
