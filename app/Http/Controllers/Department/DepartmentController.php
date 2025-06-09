<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function departmentIndex()
    {
        return view('admin.department.auth.index');
    }

    public function departmentRegister(Request $request)
    {
        $validated = $request->validate([
            'department' => 'required|string|max:255',
            'description' => 'required|string|max:255'
        ]);

        Department::create([
            'department_name' => $validated['department'],
            'description' => $validated['description']
        ]);

        return redirect()->back()->with('success', 'Department added successfully.');
    }

    public function departmentEdit(Request $request, $id)
    {
        $departments = Department::findOrFail($id);
        return view('admin.department.auth.edit', compact('departments'));
    }

    public function departmentUpdate(Request $request, $id)
    {

        $validated = $request->validate([
            'department_name' => 'required|string|max:255',
            'description' => 'required|string|max:255'
        ]);

        $departments = department::findOrFail($id);

        $departments->department_name = $validated['department_name'];
        $departments->description = $validated['description'];

        $departments->save();

        return redirect()->route('department.departmentIndex')->with('success', 'Department added successfully.');
    }

    public function departmentDelete($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

        return redirect()->route('department.departmentIndex')->with('success', 'Department deleted successfully.');

    }

    public function departmentReport()
    {
        $departments = Department::withCount('teachers')->get();

        return view('admin.department.auth.report', compact('departments'));
    }

}
