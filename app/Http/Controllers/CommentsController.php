<?php

namespace Adi\Http\Controllers;

use Illuminate\Http\Request;
use \Adi\Comment;
use \Adi\Http\Requests\AddComment;
use \Adi\Post;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(AddComment $request, Post $post)
    {
        auth()->user()->addComment($request, $post);

        return back();
    }
}
