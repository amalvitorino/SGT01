@extends('layout.dashboard')



@section('content')
    <div class="container">


        <!-- Modal edit-->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center n" id="exampleModalLabel">Editar Categoria</h5>
                        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/cadeiras/editar" method="post">
                            @csrf
                            <input type="hidden" id="cadeira_id" name="cadeira_id" value="">

                            <div class="form-group">
                                <label for="descricao">Cadeira</label>
                                <input type="text" class="form-control" name="nome" id="nome"
                                    placeholder="nome da cadeira">
                            </div>
                            <div class="form-group">
                                <label for="descricao">Docente</label>
                                <input type="text" class="form-control" name="docente" id="docente"
                                    placeholder="Nome do docente">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal create-->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registar Categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ '/cadeiras' }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="descricao">Cadeira</label>
                                <input type="text" class="form-control" name="nome" placeholder="nome da cadeira">
                            </div>
                            <div class="form-group">
                                <label for="descricao">Docente</label>
                                <input type="text" class="form-control" name="docente" placeholder="Nome do docente">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>




        @if (session('msg'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                {{ session('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row mt-5">
            <div class="col">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">
                    Criar
                </button>
                <table id="dataTable" class="table table-hover my-3">
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
                        @foreach ($cadeira as $c)
                            <tr>
                                <th>{{ $n }}</th>
                                <td>{{ $c->nome }}</td>
                                <td>{{ $c->docente }}</td>
                                <td>
                                    <button type="button" class='btn btn-primary btn-sm editbtn'
                                        value="{{ $c->id }}">Editar</button>
                                    <a href='/cadeiras/eliminar/{{ $c->id }}'
                                        class='btn btn-danger btn-sm'>Excluir</a>
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

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {

            $(document).on('click', '.editbtn', function() {
                var cadeira_id = $(this).val();
                //alert(cadeira_id);
                $('#editModal').modal('show');

                $.ajax({
                    type: "GET",
                    url: "/cadeiras/editar/" + cadeira_id,
                    success: function(response) {
                        //console.log(response.cadeira);
                        $('#nome').val(response.cadeira.nome);
                        $('#docente').val(response.cadeira.docente);
                        $('#cadeira_id').val(response.cadeira.id);
                    }
                });
            });

        });
    </script>
@endsection
