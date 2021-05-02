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
       /* $books=DB::table('posts')->join('likedposts',function($join)
        {
            $join->on('likedposts.post_id','=','posts.id');
        })->where('likedposts.user_id',auth()->id());//->paginate(5);
*/
        //$books=Post::with(['likeposts'])->where('post_id','likeposts.post_id')->paginate($this->pageCount);
        $books =Post::with(['user'])->join('likedposts',function($join)
        {   
            $join->on('likedposts.post_id','=','posts.id');
        })->where('likedposts.user_id',auth()->id())->paginate(5);
        //dd($books);
        return view('posts.likedBooks',[
            'books' => $books
        ]);
    }
    public function destroy(Post $post,Request $request)
    {
       $request->user()->Likedposts()->where('post_id', $post->id)->delete();
       return back();

    }

}
