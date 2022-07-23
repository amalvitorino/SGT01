@extends('layout.dashboard')



@section('content')

<div class="container">

    <div class="row mt-5">
        <div class="col">
            <a class="btn btn-success" href="{{('#')}}">Registar</a>
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
