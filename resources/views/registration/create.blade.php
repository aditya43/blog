@extends('partials._master')

@section('content')
    <div class="col-md-8 blog-main">
        <h1>Sign Up</h1>
        <hr>
        <form action="/register" method="POST">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" name="name" id="name" value="{{ old('name') }}">
                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" name="email" id="email" value="{{ old('email') }}">
                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" name="password" id="password"">
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" name="password_confirmation" id="password_confirmation"">
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>

        </form>
    </div>
@endsection