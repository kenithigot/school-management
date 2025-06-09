<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    protected $fillable = [
        'department_name',
        'description'
    ];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
    /** @use HasFactory<\Database\Factories\DepartmentFactory> */
    use HasFactory;

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}

