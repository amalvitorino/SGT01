<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>@yield('title','SGT-Trabalhos')</title>
</head>

<body>
    <nav class="nav nav-bar-dark">
        <a class="nav-link active" aria-current="page" href="/">SGT-Home</a>
        <a class="nav-link" href="{{('/trabalhos')}}">Listar</a>
        <a class="nav-link" href="{{('/trabalhos/registar')}}">Registar</a>
        <a class="nav-link disabled">Amal-Vitorino</a>
    </nav>

    @yield('content')


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>