<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    private $pageCount=5;
    
    public function index()
    {
        $books = Post::with(['user'])->paginate($this->pageCount);
        return view('auth.books',[
            'books' => $books
        ]);
    }
    

    public function create()
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

        $request->user()->posts()->create([
        'name' => $request->name,
        'category' => $request->category,
        'author' => $request->author,
        'status' => $request->status,
        'price' => $request->price,
        'wheretostore' => $request->wheretostore,
    ]);
        return view('home');
    }

    public function show()
    {
        $books = DB::table('posts')->where('user_id',auth()->id())->paginate($this->pageCount);
        return view('posts.myBooks',[
            'books' => $books
        ]);
    }
/*
    public function edit(Book $book)
    {
        //
    }

    public function edit(Request $request,Book $book)
    {
        //
    }

    public function destroy(Book $book)
    {
        //
    }
    */
}
