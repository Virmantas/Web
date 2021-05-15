<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:20',
            'username' => 'required|max:30',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed'
        ]);
        
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //dd($request);
       
        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('home');
    }

    
    
}

