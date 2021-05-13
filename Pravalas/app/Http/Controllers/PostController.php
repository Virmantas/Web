<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Database\Console\WipeCommand;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class PostController extends Controller
{
    private $pageCount=9;
    
    public function index()
    {
        $books = Post::with(['user'])->paginate($this->pageCount);
            return view('home',[
            'books' => $books,
        ]);
    }
    

    public function create()
    {
        return view('posts.insert');
    }

    public function store(Request $request)
    {

        //dd($request->image);
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'author' => 'required',
            'status' => 'required',
            'price' => 'required',
            'wheretostore' => 'required',
            'image'=>'required|mimes:jpg,png'
        ]);
        
        $imagesName=time() . '-' . $request->name . '.' . 
        $request->image->extension();
        $request->image->move(public_path('images'),$imagesName);


        $request->user()->posts()->create([
        'name' => $request->name,
        'category' => $request->category,
        'author' => $request->author,
        'status' => $request->status,
        'price' => $request->price,
        'wheretostore' => $request->wheretostore,
        'image'=>$imagesName
    ]);
    return view('posts.insert');
    }

    public function show()
    {
        $books = Post::with(['user'])->where('user_id',auth()->id())->paginate($this->pageCount);
        
        return view('posts.myBooks',[
            'books' => $books
        ]);
    }

    public function find(Request $request)
    {
        
        $books=Post::with(['user'])->where('name',$request->book)->paginate($this->pageCount);
        return view('home',[
            'books' => $books]);
    }

    public function findByCategory(Request $request)
    {
        $books=Post::with(['user'])->where('category',$request->category)->paginate($this->pageCount);
        return view('home',[
            'books'=>$books
        ]);

    }
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }

    public function getBookById(Request $request)
    {
        $books = Post::with(['user'])->where('id',(int)$request->book)->paginate($this->pageCount);
        return view('posts.changeBook',[
            'books'=>$books
        ]);
    }
    public function storeBooks(Request $request)
    {
        $book= Post::find($request->id);

        $book->name=$request->name;
        $book->category=$request->category;
        $book->author=$request->author;
        $book->status=$request->status;
        $book->price=$request->price;
        $book->wheretostore=$request->wheretostore;
        $book->save();
        return back();
    }
    public function aboutBookById(Request $request)
    {
        $books = Post::with(['user'])->where('id', $request->id)->paginate($this->pageCount);
        //dd($books);
       
        return view('posts.infoAboutBook',[
            'books'=>$books
        ]);
    }
}
