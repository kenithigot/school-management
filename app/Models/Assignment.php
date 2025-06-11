<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $table = 'assignment';
    protected $fillable = [
        'id',
        'assignment_title',
        'description',
        'department_id',
        'course_id',
        'subject_id',
        'year_level',
        'due_date',
        'assignment_type',
        'submission_mode',
        'total_point',
        'issue_date'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }

    public function designatedTeacher()
{
    return $this->hasOne(Teacher::class, 'designation', 'subject_id');
}
}
