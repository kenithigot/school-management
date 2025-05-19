<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $fillable = [
        // Personal Information
        'teacher_id',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'date_of_birth',
        'contact_number',
        'email',
        'address',
        'date_hired',
        'educational_qualification',
        'employment_type',
        'employment_status',
        'department_id',
        'designation',

    ];
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;
    public function course()
    {
        return $this->belongsTo(Course::class, 'designation');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}

