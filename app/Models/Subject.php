<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $fillable = [
        'subject_name',
        'subject_code',
        'description',
        'units',
        'year_level',
        'semester',
        'department_id',
    ];
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_subject');
    }
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_subject');
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;
}
