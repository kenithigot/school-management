<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Department;
use Livewire\Component;

class DepartmentIndexTable extends Component
{

    use WithPagination;
    public function render()
    {
        $departments = Department::paginate(10);

        $startingNumber = ($departments->currentPage() - 1) * $departments->perPage() + 1;
        return view('livewire.department-index-table', [
            'departments' => $departments,
            'startingNumber' => $startingNumber
        ]);
    }
}
