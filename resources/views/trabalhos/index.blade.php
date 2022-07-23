@extends('layout.dashboard')
@section('title','SGT-Trabalhos')
@section('content')


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadeira xx</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Cadeira: Portugues</p>
                <p>Descrição: <br>O presente trabalho aborta aspectos relativos ao nao cumprimento das tarefas administrativas ao cetor publica desta forma apela-se a todos o uso de mascaras</p>
                <p>estado: Feito</p>
                <P>data de entrega: 12-12-12222</P>
                <P>data de entrega: 12-12-12222</P>
                <P>data de entrega: 12-12-12222</P>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>


<div class="container">

    <!-- Filtros de pesquisas -->
    <section class="section mt-5">
        <form action="/trabalhos" method="GET">
            <div class="row valign-wrapper">
                <div class="col-3">
                    <select class="form-select" name="cadeira">
                        <option value="" >Selecione uma cadeira</option>

                        @foreach($cadeiras as $cadeira)
                        <option value="{{$cadeira->nome}}">
                            {{$cadeira->nome}}
                        </option>
                        @endforeach

                    </select>
                </div>
                <div class="col-3">
                    <select class="form-select"  name="estado">
                        <option value="">Selecione o estado</option>
                        <option value="Feito">Feitos</option>
                        <option value="Pendente">Pendentes</option>
                    </select>
                </div>
                <div class="col-3 aling-rigth">
                    <a href="/trabalhos" class="btn ">Mostrar todos</a>
                    <button class="btn btn-primary" type="submit">Pesquisar</button>
                </div>
            </div>
        </form>
    </section>

    <!--Lista de Trabalhos-->
    <section class="section mt-5">
        <a class="btn btn-success" href="{{('/trabalhos/registar')}}">Registar</a>
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
                @foreach ($trabalhos as $t)
                <tr>
                    <th scope='row'>{{$n}}</td>
                    <td>{{$t->cadeira}}</td>
                    <td>{{$t->composicao}}</td>
                    <td>{{$t->dataEntrega}}</td>
                    @if($t->estado == "Feito")
                    <td class="text-success">{{$t->estado}}</td>
                    @else
                    <td class="text-danger">{{$t->estado}}</td>
                    @endif
                    <td>
                        <!-- Button trigger modal -->
                        <a class='btn btn-success btn-sm' data-bs-toggle="modal" data-bs-target="#exampleModal">Detalhes</a>
                        <a href='trabalhos/editar/{{$t->id}}' class='btn btn-primary btn-sm'>Editar</a>
                        <a href='trabalhos/eliminar/{{$t->id}}' class='btn btn-danger btn-sm'>Excluir</a>
                    </td>
                </tr>
                <?php $n++; ?>
                @endforeach

            </tbody>
        </table>
    </section>

    <a href="{{('/')}}" class="btn btn-primary">Voltar ao Inicio</a>


</div>

@endsection
