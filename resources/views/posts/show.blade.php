@extends('partials._master')

@section('content')
<div class="col-md-8 blog-main">
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">
            {{ $post->created_at->diffForHumans() }} By
            {{ $post->user->name }}
            @if (count($tags = $post->tags()->pluck('name')))
                <br>Tags:
                    @foreach ($tags as $tag)
                        <a href="/posts/tags/{{ $tag }}">#{{ $tag }}</a>&nbsp;
                    @endforeach
            @endif
        </p>
        <p>{{ $post->body }}</p>
    </div>
    <hr>
    <div class="blog-post">
        @foreach ($post->comments as $comment)
        <p class="blog-post-meta">
            {{ $comment->created_at->diffForHumans() }} By
            {{ $comment->user->name }}
        </p>
        <p>{{ $comment->body }}</p>
        <hr>
        @endforeach
    </div>
    @if (auth()->check())
        @include('posts.create-comment')
    @endif
    <br>
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="/">Back</a>
    </nav>
</div>
@endsection