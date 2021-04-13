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
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

       if(!auth()->attempt($request->only('email', 'password')))
       {
           return back()->with('status', 'Netinkami prisijungimo duomenys');
       }

        return redirect()->route('dashboard');

    }
}
