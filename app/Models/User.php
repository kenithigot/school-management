<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Student;
use App\Models\Teacher;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'password',
        'user_id', 
        'user_type_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relationship: A User belongs to a Student
    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }

    public function userType()
    {
        return $this->belongTo(UserType::class);
    }
}
