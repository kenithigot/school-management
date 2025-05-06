<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $fillable = [
        // Personal Information
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'date_of_birth',
        'contact_number',
        'email',
        'date_hired',
        'educational_qualification',
        'employment_type'

    ];
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;
}
