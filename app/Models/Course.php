<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    protected $fillable = [
        'id',
        'course_name',
        'course_code',
        'description',
        'department_id',
    ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;
}
