<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Likedpost;
use ReflectionFunctionAbstract;
use Illuminate\Support\Facades\DB;

class LikedPostController extends Controller
{
    private$pageCount=9;
    public function store(Post $post,Request $request)
    {
        //dd($post->likedBy($request->user()));
        $post->Likedposts()->create([
            'user_id'=>$request->user()->id
            
        ]);
        return back();
    }
    public function liked()
    {
        //dd(auth()->id());
        $id=auth()->id();
        $books = DB::select("select * from posts inner join likedposts on likedposts.user_id =$id");

        //dd($books);
        return view('posts.likedBooks',[
            'books' => $books
        ]);
    }
}
