<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InsertBookController extends Controller
{
    public function Insert()
    {
        return view('auth.insert');

    }
}
