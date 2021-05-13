<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

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

        return redirect()->route('home');

    }

    public function getUsersCredentials()
    {

        //$user=User::find($userId);
        
        //dd($user);
        //$user=User::where('id',)
        return view('auth.update');
    }
}
