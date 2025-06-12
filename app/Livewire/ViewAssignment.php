<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Assignment;
use Livewire\WithPagination;

class ViewAssignment extends Component
{
    use WithPagination;
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        // Define year level keywords mapped to their numeric values
        $yearLevels = [
            '1st year' => 1,
            'first year' => 1,
            '2nd year' => 2,
            'second year' => 2,
            '3rd year' => 3,
            'third year' => 3,
            '4th year' => 4,
            'fourth year' => 4,
        ];

        // Normalize the search input for year level matching
        $searchLower = strtolower($this->search);
        $matchedYearLevel = $yearLevels[$searchLower] ?? null;

        $assignments = Assignment::with(['department', 'course', 'subject', 'designatedTeacher'])
            ->where(function ($query) use ($matchedYearLevel) {
                $query->where('assignment_title', 'like', '%' . $this->search . '%')
                    ->orWhereHas('course', fn($q) => $q->where('course_name', 'like', '%' . $this->search . '%'))
                    ->orWhereHas('subject', fn($q) => $q->where('subject_name', 'like', '%' . $this->search . '%'))
                    ->orWhereHas('designatedTeacher', fn($q) => $q
                        ->where('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('middle_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%'));

                if ($matchedYearLevel) {
                    $query->orWhere('year_level', $matchedYearLevel);
                }
            })
            ->orderBy('issue_date', 'desc')
            ->paginate(6);

        return view('livewire.view-assignment', compact('assignments'));
    }
}
