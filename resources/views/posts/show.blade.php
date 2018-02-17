@extends('partials._master')

@section('content')
<div class="col-md-8 blog-main">
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">
            {{ $post->created_at->diffForHumans() }} By
            {{ $post->user->name }}
        </p>
        <p>{{ $post->body }}</p>
    </div>
    <hr>
    <div class="blog-post">
        @foreach ($post->comments as $comment)
        <p class="blog-post-meta">{{ $comment->created_at->diffForHumans() }}</p>
        <p>{{ $comment->body }}</p>
        <hr>
        @endforeach
    </div>
    <form action="/posts/{{ $post->id }}/comments" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <textarea name="body" id="body" rows="5" placeholder="Your comment here.." class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}">{{ old('body') }}</textarea>
            <div class="invalid-feedback">{{ $errors->first('body') }}</div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Comment</button>
        </div>
    </form>
    <br>
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="/">Back</a>
    </nav>
</div>
@endsection