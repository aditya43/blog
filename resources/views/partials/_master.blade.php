<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Blog | Aditya Hajare</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>

    @if ($flash = session('message'))
        <div class="alert alert-success adi-alert" role="alert">
            {{ $flash }}
        </div>
    @endif

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

    <script type="text/javascript" charset="utf-8" async defer>
        $('div.alert').not('.alert-important').delay(3000).slideUp(600);
    </script>
</body>
</html>
