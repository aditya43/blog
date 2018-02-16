<?php

namespace Adi\Http\Controllers;

use Illuminate\Http\Request;
use \Adi\Comment;
use \Adi\Http\Requests\AddComment;
use \Adi\Post;

class CommentsController extends Controller
{
    public function store(AddComment $request, Post $post)
    {
        $post->addComment($request);
        return back();
    }
}
