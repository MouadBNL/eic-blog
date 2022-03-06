<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;

class PostController extends Controller
{
    public function index()
    {
        $posts = WinkPost::live()->orderBy('created_at', 'desc')->with('tags')->get();
        $latestPost = $posts->first();

        $pageData = [
            'title' => 'EIC - Accueil',
            'meta' => null
        ];

        return view('index', compact(['posts', 'latestPost', 'pageData']));
    }

    public function show(WinkPost $post)
    {
        $pageData = [
            'title' => 'EIC - '.$post->title,
            'meta' => $post->meta
        ];
        return view('posts.show', compact(['post', 'pageData']));
    }
}
