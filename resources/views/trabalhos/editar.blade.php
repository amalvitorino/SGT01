@extends('layout.dashboard')
@section('title', 'SGT-Editar')
@section('content')
    <div class="container col-5">
        <h1>Editar Trabalhos</h1>
        <form action="/trabalhos/editar/{{ $trabalho->id }}" method="post">
            @csrf
            <div class="form-group">
                <label for="cadeira">Cadeira</label>
                <input type="text" class="form-control" name="cadeira" value="{{ $trabalho->cadeira }}">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea rows="3" type="text" class="form-control" name="descricao">{{ $trabalho->descricao }}</textarea>
            </div>
            <div class="form-group">
                <label>Composição</label>
                <select name="composicao" class="form-control">
                    @if ($trabalho->composicao == 'Individual')
                        <option value="Individual">Individual</option>
                        <option value="Grupo">Grupo</option>
                    @else
                        <option value="Grupo">Grupo</option>
                        <option value="Individual">Individual</option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label>Estado</label>
                <select name="estado" class="form-control">
                    @if ($trabalho->estado == 'Pendente')
                    <option value="Pendente">Pendente</option>
                    <option value="Feito">Feito</option>
                @else
                <option value="Feito">Feito</option>
                <option value="Pendente">Pendente</option>
                @endif

                </select>
            </div>
            <div class="form-group">
                <label for="baEntrega">Data de Entrega</label>
                <input type="date" class="form-control" name="dataEntrega" value="{{ $trabalho->dataEntrega }}">
            </div>
            <div class="form-group">
                <label for="text">Nota</label>
                <textarea rows="2" type="text" class="form-control" name="nota" placeholder="Em que pé esta o trabalho?">{{$trabalho->nota}}</textarea>
            </div>
            <div class="form-group mt-3">
                <input type="submit" class="btn btn-success" value="Actualizar">
            </div>
        </form>
    </div>
@endsection
