<?php

namespace Adi\Http\Controllers;

use Adi\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {
        $posts = $tag->posts;

        return view('posts.index', compact('posts'));
    }
}
