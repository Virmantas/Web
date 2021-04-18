<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AllBooksController extends Controller
{
    public function Books()
    {
        $books = Book::get(); 


        return view('auth.books',[
            'books' => $books
        ]);

    }
    
}
