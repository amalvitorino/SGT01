@extends('layout.dashboard')
@section('title','SGT-Editar')
@section('content')
<div class="container col-5">
            <h1>Editar Trabalhos</h1>
            <form action="/trabalhos/editar/{{$trabalho->id}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="cadeira">Cadeira</label>
                    <input type="text" class="form-control" name="cadeira" value="{{$trabalho->cadeira}}">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" name="descricao" value="{{$trabalho->descricao}}">
                </div>
                <div class="form-group">
                    <label for="composicao">Composição</label>
                    <input type="text" class="form-control" name="composicao" value="{{$trabalho->composicao}}">
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="estado" value="{{$trabalho->estado}}">
                </div>
                <div class="form-group">
                    <label for="baEntrega">Data de Entrega</label>
                    <input type="date" class="form-control" name="dataEntrega" value="{{$trabalho->dataEntrega}}">
                </div>
                <div class="form-group">
                    <label for="text">Nota</label>
                    <input type="text" class="form-control" name="nota" value="{{$trabalho->nota}}">
                </div>
                <div class="form-group mt-3">
                    <input type="submit" class="btn btn-success" value="Actualizar">
                </div>
            </form>
</div>
@endsection



