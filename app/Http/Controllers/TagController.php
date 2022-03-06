<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;
use Wink\WinkTag;

class TagController extends Controller
{
    public function show(WinkTag $tag)
    {
        $posts = WinkPost::live()->tag($tag->slug)->with('tags')->paginate(32);
        return view('tags.show', compact('posts', 'tag'));
    }
}
