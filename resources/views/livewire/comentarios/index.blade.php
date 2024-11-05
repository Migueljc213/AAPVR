<x-app-layout>
    <div>
        <div class="page">
            <div class="page-wrapper">
                <div class="col-12">
                    <div class="card container">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-header d-flex align-item-center justify-content-between">
                                            <h5 class="mb-0">Listagem de Registros</h5>
                                            <input type="text" class="form-control mb-3 rounded w-50"
                                                wire:model.live='search' placeholder="Pesquise comentarios...">
                                        </div>
                                        <div class="table-responsive">

                                            <table class="table table-striped"
                                                style="font-size: 90%; margin-top: 15px;">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th style="max-width: 400px;">Conteudo</th>
                                                        <th>Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($comentarios->isNotEmpty())

                                                        @foreach ($comentarios as $index => $comentario)
                                                            <tr>
                                                                <td>
                                                                    <p>{{ $comentario->nome }}</p>
                                                                </td>
                                                                <td>
                                                                    {{ $comentario->conteudo }}
                                                                </td>
                                                                <td class="table-action">
                                                                    <a href="{{ route('noticias.comentarios.destroy', ['id' => $comentario['id']]) }}"
                                                                        class="btn btn-danger btn-sm rounded-2">
                                                                        <i class="fa-solid fa-trash fs-1x"
                                                                            style="color: #fff"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <div class="card">
                                                            <p class="text-alert">Nenhum comentário encontrado</p>
                                                        </div>

                                                    @endif
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
