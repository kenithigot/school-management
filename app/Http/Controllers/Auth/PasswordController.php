<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
}
