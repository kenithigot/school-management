<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Subject;
use App\Models\Department;

class ManageSubject extends Component
{

    public $department;

    public function mount($department)
    {
        $this->department = $department;
    }
    public function render()
    {
        $subjects = Subject::where('department_id', $this->department)->paginate(10);

        $startingNumber = ($subjects->currentPage() - 1) * $subjects->perPage() + 1;

        return view('livewire.manage-subject', [
            'subjects' => $subjects,
            'startingNumber' => $startingNumber
        ]);
    }
}
