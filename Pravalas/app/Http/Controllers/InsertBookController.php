<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InsertBookController extends Controller
{
    public function Insert()
    {
        return view('auth.insert');

    }


    public function store(Request $request)
    {
    $this->validate($request, [
        'name' => 'required',
        'category' => 'required',
        'author' => 'required',
        'status' => 'required',
        'price' => 'required',
        'wheretostore' => 'required'

    ]);
   
       /* Book::create(
        [
            'name' => $request->name,
            'category' => $request->category,
            'author' => $request->author,
            'status' => $request->status,
            'price' => $request->price,
            'wheretostore' => $request->wheretostore,
        ])*/
    $request->user()->books()->create([
        'name' => $request->name,
        'category' => $request->category,
        'author' => $request->author,
        'status' => $request->status,
        'price' => $request->price,
        'wheretostore' => $request->wheretostore,
    ]);

    return redirect()->route('books');

    }
}
