<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;

class PostController extends Controller
{
    public function index()
    {
        $posts = WinkPost::orderBy('created_at', 'desc')->with('author')->get();
        return view('index', compact(['posts']));
    }

    public function show(WinkPost $post)
    {
        return view('posts.show', compact('post'));
    }
}
