<div>
    <style>
        #modalNew {
            background-color: rgba(0, 0, 0, .5);
            height: 100vh;
            width: 100vw;
            position: fixed;
            top: 0;
            left: 0;
            display: none;
            z-index: 1;
        }

        #modalNew div {
            background: #fff;
            margin: 0 auto;
            min-width: 400px;
            box-shadow: 0 0 0 10px white;
            box-sizing: border-box;
            position: relative;
            border-radius: 12px;
            padding: 10px
        }

        #modalNew div span {
            position: absolute;
            top: -30px;
            right: -30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            z-index: 1;
            border: 4px solid white;
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, .3);
            background-color: red;
            color: white;
            cursor: pointer;
            font-family: monospace;
            font-size: 1.2rem;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center
        }

        #modalNew.ativo {
            display: flex
        }
    </style>

    <div class="page">
        <div class="page-wrapper">
            <div class="col-12">
                <div class="card container">
                    <div class="card mb-3">
                        <div class="d-flex justify-content-start">
                        <button id="modalBtnOpen" class="btn btn-primary my-3 mx-2 " onclick="newNews()"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Novo usuário">Novo
                        Noticia</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-header d-flex align-item-center justify-content-between">
                                        <h5 class="mb-0">Listagem de Registros</h5>
                                        <input type="text" class="form-control mb-3 rounded w-50" wire:model.live='search'
                                            placeholder="Pesquise Noticias...">
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped" style="font-size: 90%; margin-top: 15px;">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Imagem</th>
                                                    <th>Nome</th>
                                                    <th width="240px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($noticias as $index => $noticia)
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset($noticia->img) }}" alt="" style="max-width: 250px"
                                                                width="100%" height="100%"
                                                                style="object-fit: contain">
                                                        </td>
                                                        <td>
                                                            {{ $noticia->name }}
                                                        </td>
                                                        <td class="table-action">
                                                            <a href="{{ route('noticias.edit', ['id' => $noticia['id']]) }}"
                                                                class="btn btn-info btn-sm rounded-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Editar notícia">
                                                                <i class="fa-solid fa-gear fa-1x"
                                                                    style="color: #fff"></i>
                                                            </a>
                                                            <a href="{{ route('noticias.destroy', ['id' => $noticia['id']]) }}" data-bs-toggle="tooltip" data-bs-placement="right" title="Deletar notícia"
                                                                class="btn btn-danger btn-sm rounded-2">
                                                                <i class="fa-solid fa-trash fs-1x"
                                                                    style="color: #fff"></i>
                                                            </a>
                                                            <a href="{{ route('noticias.comentarios', ['id' => $noticia['id']]) }}" data-bs-toggle="tooltip" data-bs-placement="right" title="Ver comentários"
                                                                class="btn btn-info btn-sm rounded-2">
                                                                <i class="fas fa-comments"
                                                                    style="color: #fff"></i>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                    <!-- Modal de Visualização -->
                                                    <div class="modal fade" id="viewDetailsModal_{{ $noticia->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="viewDetailsModalLabel_{{ $noticia->id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-scrollable"
                                                            role="document"> <!-- Adiciona o scroll ao modal -->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- Os detalhes do noticia serão preenchidos aqui pelo JavaScript -->
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                    {{ $noticias->links('vendor.pagination.bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Conteúdo -->
                </div>
            </div>
        </div>
        <div id="modalNew" class="justify-content-center align-items-center">
            <div>
                <span class="modalBtnClose">X</span>
                <form action="{{ route('noticias.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label for="img" class="form-label">URL IMAGEM</label>
                        <input type="file" class="form-control" name="img" id="img">
                    </div>
                    <div class="mb-2">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>

                    <div class="mb-2">
                        <label for="description" class="form-label">Descrição</label>
                        <input type="text" class="form-control" name="description" id="description">
                    </div>
                    <div class="mb-2">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" name="link" id="link">
                    </div>

                    <div class="d-flex align-items-center justify-content-end" style="gap: 20px">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button class="modalBtnClose" class="btn ">Fechar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<script>
    function newNews() {
        const modal = document.getElementById('modalNew');
        const modalBtnOpen = document.getElementById('modalBtnOpen');
        const modalBtnClose = document.querySelectorAll('.modalBtnClose');
        console.log()

        modalBtnOpen.addEventListener('click', () => {
            modal.classList.add('ativo')
        });

        modalBtnClose.forEach(Btn => {
            Btn.addEventListener('click', () => {
                modal.classList.remove('ativo')
            })
        });

    }
</script>

</div>
