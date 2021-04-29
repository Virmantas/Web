<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use ReflectionFunctionAbstract;

class LikedPostController extends Controller
{
    public function store(Post $post)
    {
        dd($post);
    }
}
