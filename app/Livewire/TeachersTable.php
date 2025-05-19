<?php

namespace App\Livewire;

use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithPagination;

class TeachersTable extends Component
{
    use WithPagination;


    public $perPage = 10;
    public $search = '';

    protected $queryString = [
        'perPage' => ['except' => 10],
        'search' => ['except' => '']
    ];

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $teachers = Teacher::query()
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $columns = \Schema::getColumnListing('teachers');

                    foreach ($columns as $index => $column) {
                        $q->{$index === 0 ? 'where' : 'orWhere'}($column, 'like', '%' . $this->search . '%');
                    }
                });
            })
            ->paginate($this->perPage);

        // Calculate No. of teachers
        $startingNumber = ($teachers->currentPage() - 1) * $teachers->perPage() + 1;

        return view('livewire.teachers-table', [
            'teachers' => $teachers,
            'startingNumber' => $startingNumber
        ]);
    }

    // public function viewTeacherDetails($id)
    // {
    //     $teacher = Teacher::with(['department', 'course'])->findOrFail($id);

    //     $this->selectedTeacher = [
    //         'full_name' => $teacher->first_name . ' ' . $teacher->middle_name . ' ' . $teacher->last_name,
    //         'gender' => $teacher->gender,
    //         'date_of_birth' => $teacher->date_of_birth,
    //         'contact_number' => $teacher->contact_number,
    //         'address' => $teacher->address,
    //         'email' => $teacher->email,
    //         'date_of_joining' => $teacher->date_hired, // if you're using `date_hired` in DB
    //         'educational_qualification' => $teacher->educational_qualification,
    //         'employment_type' => $teacher->employment_type,
    //         'employment_status' => $teacher->employment_status,
    //         'department' => $teacher->department->department_name ?? 'N/A',
    //         'designation' => $teacher->course->course_name ?? 'N/A',
    //     ];

    //     $this->isModalOpen = true;
    // }
}