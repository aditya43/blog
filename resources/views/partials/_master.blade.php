<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Blog | Aditya Hajare</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
{{--     <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}"> --}}
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        @include('partials/_header')
        @include('partials/_nav')
        @include('partials/_jumbotron')
    </div>

    <div class="container">
        <main role="main" class="container">
            <div class="row">
                @yield('content')
                @include('partials/_sidebar')
            </div>
        </main>
    </div>

    @include('partials/_footer')
</body>
</html>
