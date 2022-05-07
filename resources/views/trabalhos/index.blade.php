@extends('trabalhos.layout')
@section('title','SGT-Trabalhos')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Pesquisar Trabalhos</h1>

            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <form class="d-flex" method="get">
                        <input type="search" class="form-control me-2" placeholder="Digine o nome da cadeira" aria-label="serch" name="buscar" autofocus>
                        <button class="btn btn-success me-2">pesquisar</button>
                        <a href="#" class="btn btn-info">normalizar</a>
                    </form>
                </div>
            </nav>

            <table class="table table-hover my-3">
                <thead>
                    <tr>
                        <th scope="col">N</th>
                        <th scope="col">Cadeira</th>
                        <th scope="col">Composição</th>
                        <th scope="col">Data de Entrega</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Operações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n = 1; ?>
                    @foreach ($trabalho as $t)
                    <tr>
                        <th scope='row'>{{$n}}</td>
                        <td>{{$t->cadeira}}</td>
                        <td>{{$t->composicao}}</td>
                        <td>{{$t->dataEntrega}}</td>
                        <td>{{$t->estado}}</td>
                        <td>
                            <a href='#' class='btn btn-success btn-sm'>Detalhes</a>
                            <a href='trabalhos/editar/{{$t->id}}' class='btn btn-primary btn-sm'>Editar</a>
                            <a href='trabalhos/eliminar/{{$t->id}}' class='btn btn-danger btn-sm'>Excluir</a>
                        </td>
                    </tr>
                    <?php $n++; ?>
                    @endforeach

                </tbody>
            </table>

            <a href="{{('/')}}" class="btn btn-primary">Voltar ao Inicio</a>

        </div>
    </div>

</div>

@endsection