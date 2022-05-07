<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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