<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;

class PostController extends Controller
{
    public function index()
    {
        $posts = WinkPost::orderBy('created_at', 'desc')->with('author', 'tags')->get();
        $latestPost = $posts->first();
        return view('index', compact(['posts', 'latestPost']));
    }

    public function show(WinkPost $post)
    {
        return view('posts.show', compact('post'));
    }
}
