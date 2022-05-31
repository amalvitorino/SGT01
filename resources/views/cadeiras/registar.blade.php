@extends('cadeiras.layout')

@section('title','SGT-Cadeiras-Registar')

@section('content')

<div class="container col-6">

    <h1>Registar Cadeiras</h1>

    <form action="/cadeiras/registar" method="post">
        @csrf
        <div class="form-group">
            <label for="descricao">Cadeira</label>
            <textarea rows="3" type="text" class="form-control" name="nome" placeholder="nome da cadeira"></textarea>
        </div>
        <div class="form-group">
            <label for="descricao">Docente</label>
            <textarea rows="3" type="text" class="form-control" name="docente" placeholder="Nome do docente"></textarea>
        </div>
        <div class="form-group mt-3">
            <input type="submit" class="btn btn-success" value="Salvar">
        </div>
    </form>
</div>

@endsection