<?php

namespace App\Exports;

use App\Models\Subject;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SubjectExport implements FromCollection, WithHeadings
{
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function collection()
    {
        return $this->query->get()->map(function ($subject) {
            return [
                $subject->subject_code,
                $subject->subject_name,
                optional($subject->department)->department_name,
                $subject->semester,
                $subject->year_level,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Subject Code',
            'Subject Name',
            'Department',
            'Semester',
            'Year Level',
        ];
    }
}
