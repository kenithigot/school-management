<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        // Personal Information
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'date_of_birth',
        'contact_number',
        'email',

        // Guardian Information
        'guardian_first_name',
        'guardian_middle_name',
        'guardian_last_name',
        'guardian_contact_number',
        'guardian_relationship',
    ];
}
