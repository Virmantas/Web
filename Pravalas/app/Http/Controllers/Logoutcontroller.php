<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logoutcontroller extends Controller
{
    public function store()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
