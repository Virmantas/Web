<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function getUsersCredentials(Request $request)
    {
        //dd($request->user()->id);

        $user=User::find($request->user()->id);
        return view('auth.update', ['user'=>$user]);
    }
    public function setUsersCredentials(Request $request)
    {
        if($request->password != null)
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed'
        ]);
        else
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255'
        ]);

        $user=User::find($request->user()->id);
        

        $user->name=$request->name;
        $user->username=$request->username;
        $user->email=$request->email;
        if($request->password != null)
        $user->password= Hash::make($request->password);
        //dd($request->name);
        $user->save();
        //dd($user);
        //$user=User::where('id',)
        return back();
    }
}
