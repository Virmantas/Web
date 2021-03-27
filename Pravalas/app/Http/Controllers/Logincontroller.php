<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Logincontroller extends Controller
{
    public function Login()
    {
        return view('auth.login');

    }
}
