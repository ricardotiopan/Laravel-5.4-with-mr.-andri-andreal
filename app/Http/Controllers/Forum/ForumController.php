<?php

namespace App\Http\Controllers\Forum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    function forum()
    {
    	return view('forum.forum');
    }
    function komentar()
    {
    	return view('forum.komentar');
    }
    function login()
    {
    	return view('forum.login');
    }
}
