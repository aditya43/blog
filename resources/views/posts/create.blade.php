@extends('partials._master')

@section('content')
<div class="col-md-8 blog-main">
    <h1>Publish a Post</h1>
    <hr>

    <form method="POST" action="/posts">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" name="title" value="{{ old('title') }}">
            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
        </div>

        <div class="form-group">
            <label for="body">Body:</label>
            <textarea id="body" name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}" rows="5">{{ old('body') }}</textarea>
            <div class="invalid-feedback">{{ $errors->first('body') }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
</div>
@endsection