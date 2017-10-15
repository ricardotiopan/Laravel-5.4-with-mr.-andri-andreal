<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    function halaman1()
    {
    	return view('blog.halaman1');
    }

    function halaman2()
    {
    	return view('blog.halaman2');
    }
}
