@extends('partials._master')

@section('content')
    <div class="col-md-8 blog-main">
        <h1>Sign In</h1>
        <hr>
        @if ($errors->has('login_failed'))
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Login Failed!</h4>
            <hr>
            <p>{{ $errors->first('login_failed') }}</p>
            <p class="mb-2">If you do not have an account registered on this website, then please <a href="/register" class="btn-link">click here to sign up for an account.</a></p>
        </div>
        @endif
        <form action="/login" method="POST">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" name="email" id="email" value="{{ old('email') }}">
                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" name="password" id="password" value="{{ old('password') }}">
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
@endsection