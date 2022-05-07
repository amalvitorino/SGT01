<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>SGT-Home</title>
</head>

<body>
    <nav class="nav nav-bar-dark">
        <a class="nav-link active" aria-current="page" href="/">SGT-Home</a>
        <a class="nav-link disabled">Amal-Vitorino</a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-danger">Cadeiras page is here</h1>
                <table class="table table-hover my-3">
                    <thead>
                        <tr>
                            <th>N</th>
                            <th>Cadeira</th>
                            <th>Docente</th>
                            <th>Operacoes</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php $n = 1; ?>
                        @foreach($cadeira as $c)
                        <tr>
                            <th>{{$n}}</th>
                            <td>{{$c->nome}}</td>
                            <td>{{$c->docente}}</td>
                            <td>
                                <a href='cadeiras/editar/{{$c->id}}' class='btn btn-primary btn-sm'>Editar</a>
                                <a href='cadeiras/eliminar/{{$c->id}}' class='btn btn-danger btn-sm'>Excluir</a>
                            </td>
                        </tr>
                        <?php $n++; ?>
                        @endforeach  
                    </tbody>

                </table>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>