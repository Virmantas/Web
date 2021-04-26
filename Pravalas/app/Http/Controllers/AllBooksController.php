<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AllBooksController extends Controller
{
    public function Books()
    {
        $books = Book::with(['user'])->get(); //Book::get(); 
        //dd($books);
        return view('auth.books',[
            'books' => $books
        ]);

    }
    
}
