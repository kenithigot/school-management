<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Subject;
use App\Models\Department;
use Livewire\WithPagination;

// Exports Libraries
use App\Exports\SubjectExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class AddSubjectTable extends Component
{

    use WithPagination;
    public $perPage = 10;
    public $search = '';

    public $departments = [];
    public $semesters = [
        '1' => '1st Semester',
        '2' => '2nd Semester',
        'Summer' => 'Summer'
    ];
    public $yearLevel = [
        '1' => '1st Year',
        '2' => '2nd Year',
        '3' => '3rd Year',
        '4' => '4th Year',
        '5' => '5th Year'
    ];

    public $selectedDepartment = '';
    public $selectedSemester = '';

    public $selectedYearLevel = '';

    public function clearFilters()
    {
        $this->selectedDepartment = '';
        $this->selectedSemester = '';
        $this->selectedYearLevel = '';
        $this->resetPage();
    }

    public function mount()
    {
        $this->departments = Department::pluck('department_name', 'id')->toArray(); // use id => name
    }

    protected $queryString = [
        'perPage' => ['except' => 10],
        'search' => ['except' => '']
    ];

    protected $listeners = [
        'searchBar' => 'updateSearch',
    ];

    public function updateSearch($value)
    {
        $this->search = $value;
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function filter()
    {
        $this->resetPage();

    }

    public function render()
    {
        $query = Subject::with('department');

        // Apply filters only if they are selected
        if ($this->selectedDepartment) {
            $query->where('department_id', $this->selectedDepartment);
        }

        if ($this->selectedSemester) {
            $query->where('semester', $this->selectedSemester);
        }

        if ($this->selectedYearLevel) {
            $query->where('year_level', $this->selectedYearLevel);
        }

        if ($this->search) {
            $query->where(function ($subQ) {
                $columns = \Schema::getColumnListing('subjects');
                foreach ($columns as $index => $column) {
                    $subQ->{$index === 0 ? 'where' : 'orWhere'}($column, 'like', '%' . $this->search . '%');
                }
            });
        }

        // Always paginate the results
        $subjects = $query->paginate($this->perPage);

        $startingNumber = ($subjects->currentPage() - 1) * $subjects->perPage() + 1;

        return view('livewire.add-subject-table', [
            'subjects' => $subjects,
            'startingNumber' => $startingNumber,
            'departments' => $this->departments,
        ]);
    }

    public function exportExcel()
    {
        $query = Subject::with('department');

        if ($this->selectedDepartment) {
            $query->where('department_id', $this->selectedDepartment);
        }

        if ($this->selectedSemester) {
            $query->where('semester', $this->selectedSemester);
        }

        if ($this->selectedYearLevel) {
            $query->where('year_level', $this->selectedYearLevel);
        }

        if ($this->search) {
            $query->where(function ($subQ) {
                $columns = \Schema::getColumnListing('subjects');
                foreach ($columns as $index => $column) {
                    $subQ->{$index === 0 ? 'where' : 'orWhere'}($column, 'like', '%' . $this->search . '%');
                }
            });
        }

        return Excel::download(new SubjectExport($query), 'subjects.xlsx');
    }

    public function exportPdf()
    {
        $query = Subject::with('department');

        if ($this->selectedDepartment) {
            $query->where('department_id', $this->selectedDepartment);
        }

        if ($this->selectedSemester) {
            $query->where('semester', $this->selectedSemester);
        }

        if ($this->selectedYearLevel) {
            $query->where('year_level', $this->selectedYearLevel);
        }

        if ($this->search) {
            $query->where(function ($subQ) {
                $columns = \Schema::getColumnListing('subjects');
                foreach ($columns as $index => $column) {
                    $subQ->{$index === 0 ? 'where' : 'orWhere'}($column, 'like', '%' . $this->search . '%');
                }
            });
        }

        $subjects = $query->get();

        $pdf = Pdf::loadView('exports.subjects-pdf', compact('subjects'))->setPaper('a4', 'landscape');
        return response()->streamDownload(
            fn() => print ($pdf->stream()),
            'subjects.pdf'
        );
    }

}
