@extends('cadeiras.layout')
@section('content')
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
@endsection