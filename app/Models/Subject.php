<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_subject');
    }
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_subject');
    }
    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_subject');
    }

    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;
}
