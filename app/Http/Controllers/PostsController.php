<?php

namespace Adi\Http\Controllers;

use Illuminate\Http\Request;
use \Adi\Http\Requests\CreatePostRequest;
use \Adi\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']); // All actions except 'index' and 'show' requires login.
    }

    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(CreatePostRequest $request)
    {
        $post = auth()->user()->addPost(new Post([
            'title' => $request->title,
            'body'  => $request->body
        ]));
        return redirect('posts/' . $post->id);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
