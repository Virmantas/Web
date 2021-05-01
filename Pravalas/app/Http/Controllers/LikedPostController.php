<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use ReflectionFunctionAbstract;

class LikedPostController extends Controller
{
    public function store(Post $post,Request $request)
    {
       // dd($post->likedBy($request->user()));
        $post->Likedposts()->create([
            'user_id'=>$request->user()->id
            
        ]);
        return back();
    }
}
