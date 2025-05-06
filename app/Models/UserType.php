<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $fillable = ['type_name'];

    public $timestamps = true;

    // If you want to define relationship (optional):
    public function users()
    {
        return $this->hasMany(User::class);
    }
}