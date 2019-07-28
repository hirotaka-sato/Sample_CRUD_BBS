<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>侍エンジニア掲示板　Simple BBS Test-01</title>

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
                侍エンジニア掲示板　Simple BBS Test-01
            </a>
            <a class="btn btn-success" href="{{ url('/home') }}">
                    HOME
            </a>
        </div>
    </header>

    <div>
        @yield('content')
    </div>
</body>
</html>
