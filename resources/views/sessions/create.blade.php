@extends('partials._master')

@section('content')
    <div class="col-md-8 blog-main">
        <h1>Sign In</h1>
        <hr>
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