<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class PostController extends Controller
{
    private $pageCount=5;
    
    public function index($value=null)
    {
        
        $books = Post::with(['user'])->paginate($this->pageCount);
        if($value==null)
        {
            return view('home',[
            'books' => $books
        ]);
        }
        else
        {
            return $books;
        }
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
        $books = DB::table('posts')->where('user_id',auth()->id())->paginate($this->pageCount);
        
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
    $books=array();
    
        foreach ($request->option as $option)
        {
            $results=Post::with(['user'])->where('category',$option)->paginate($this->pageCount);
            if(isEmpty($request))
            {
                //foreach($results as $result)
                array_push($books,$results);   
            
        }
        }
        //dd($books);
        //dd($books);
        return view('home',[
            'books' => $books]);
    }
/*
    public function destroy(Book $book)
    {
        //
    }
    */
}
