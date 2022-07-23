@extends('layout.dashboard')

@section('title','SGT-Registar')

@section('content')

<div class="container col-6">

    <h1>Registar Trabalhos</h1>

    <form action="/trabalhos/registar" method="post">
        @csrf

        <div class="form-group">
            <label >Cadeira</label>
            <select name="cadeira" class="form-control">
                @foreach($cadeira as $c)
                <option value="{{$c->nome}}">{{$c->nome}}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea rows="3" type="text" class="form-control" name="descricao" placeholder="O deve ser feito?"></textarea>
        </div>
        <div class="form-group">
        <label>Composição</label>
            <select name="composicao" class="form-control">
                <option value="Individual">Individual</option>
                <option value="Grupo">Grupo</option>
            </select>
        </div>
        <div class="form-group">
        <label>Estado</label>
            <select name="estado" class="form-control">
                <option value="Pendente">Pendente</option>
                <option value="Feito">Feito</option>
            </select>
        </div>
        <div class="form-group">
            <label for="baEntrega">Data de Entrega</label>
            <input type="date" class="form-control" name="dataEntrega">
        </div>
        <div class="form-group">
            <label for="text">Nota</label>
            <textarea rows="2" type="text" class="form-control" name="nota" placeholder="Em que pé esta o trabalho?"></textarea>
        </div>
        <div class="form-group mt-3">
            <input type="submit" class="btn btn-success" value="Salvar">
        </div>
    </form>
</div>

@endsection
