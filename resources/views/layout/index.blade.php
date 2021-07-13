<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/">MEMBRES</a>
                    <a class="nav-link" href="/hommes">HOMMES</a>
                    <a class="nav-link" href="/femmes">FEMMES</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('main')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
