<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function studentAccount()
    {
        return view('admin.users.students.auth.register');
    }

    public function view()
    {
        return view('admin.users.students.view');
    }

    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            // Student info
            'firstName' => 'required|string|max:255',
            'middleName' => 'nullable|string|max:255',
            'lastName' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
            'dateOfBirth' => 'required|date',
            'contactNum' => 'required|string|max:20',
            'studentEmail' => 'required|email|unique:students,email',

            // Guardian info
            'guardianFirstName' => 'required|string|max:255',
            'guardianMiddleName' => 'nullable|string|max:255',
            'guardianLastName' => 'required|string|max:255',
            'guardianContactNum' => 'required|string|max:20',
            'studentRelationship' => 'required|string',

            // Login
            'username' => 'required|string|unique:users,username',
            'studentPassword' => 'required|string|min:8|confirmed',
        ]);

        $middleName = $validated['middleName'] ?? '';
        $guardianMiddleName = $validated['guardianMiddleName'] ?? '';

        // Create student
        $student = Student::create([
            'first_name' => $validated['firstName'],
            'middle_name' => $middleName,
            'last_name' => $validated['lastName'],
            'gender' => $validated['gender'],
            'date_of_birth' => $validated['dateOfBirth'],
            'contact_number' => $validated['contactNum'],
            'email' => $validated['studentEmail'],
            'guardian_first_name' => $validated['guardianFirstName'],
            'guardian_middle_name' => $guardianMiddleName,
            'guardian_last_name' => $validated['guardianLastName'],
            'guardian_contact_number' => $validated['guardianContactNum'],
            'guardian_relationship' => $validated['studentRelationship'],
        ]);

        $userType = \App\Models\UserType::where('type_name', 'Student')->first();

        if (!$userType) {
            return redirect()->back()->with('error', 'User type "student" not found!');
        }
        
        // Create user account
        User::create([
            'username' => $validated['username'],
            'password' => Hash::make($validated['studentPassword']),
            'user_id' => $student->id,
            'user_type_id' => $userType->id,
        ]);

        return redirect()->back()->with('success', 'Student account successfully registered!');

    }
}
