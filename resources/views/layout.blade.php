<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Store's 掲示板　Relation DB Test-01</title>

    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
</head>
<body>
    <header class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('') }}">
                Book Store's 掲示板　INDEX (click here)
            </a>
            <a class="btn btn-success" href="{{ url('/home') }}">
                    Laravel Home
            </a>
        </div>
    </header>

    <div>
        @yield('content')
    </div>

    <div>
        @yield('footer')
    </div>
</body>
</html>
