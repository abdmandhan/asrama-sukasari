<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function blogs()
    {
        return view('blogs/blogs');
    }

    public function blog()
    {
        return view('blogs/blog');
    }
}
