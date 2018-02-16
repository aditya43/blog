@extends('partials._master')

@section('content')
    <div class="col-md-8 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }}</p>
            <p>{{ $post->body }}</p>
        </div>
        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="/">Back</a>
        </nav>
    </div>
@endsection