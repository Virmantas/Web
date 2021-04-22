<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class InsertBookController extends Controller
{
    public function Insert()
    {
        $books = Book::get();


        return view('auth.insert', [
            'books' => $books
        ]);

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

    return back();

    }
}
