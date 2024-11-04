<div>
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
                    <div class="card">
                        <div class="card mb-3">
                            <div class="d-flex justify-content-start">
                                <button id="modalBtnOpen" class="btn btn-primary my-3 mx-2 " onclick="newNews()"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Novo usuário">Novo
                                    Workshop</button>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-header d-flex align-item-center justify-content-between">
                                            <h5 class="mb-0">Listagem de Workshops</h5>
                                            <input type="text" class="form-control mb-3 rounded w-50"
                                                wire:model.live='search' placeholder="Pesquise workshops...">
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped"
                                                style="font-size: 90%; margin-top: 15px;">
                                                <thead class="thead-light">
                                                    <tr class="text-center">
                                                        <th>Título</th>
                                                        <th>Imagens</th>
                                                        <th width="240px">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($workshops)
                                                        @foreach ($workshops as $index => $workshop)
                                                            <tr class="text-center">
                                                                <td>
                                                                    {{ $workshop->titulo }}
                                                                </td>
                                                                <td class="d-flex aling-items-center justify-content-center" style="gap: 10px">
                                                                    <img src="{{ asset($workshop->imagem1) }}" alt="" onclick="abrirGaleria('{{ asset($workshop->imagem1) }}')"
                                                                         class="rounded hover" height="50"
                                                                        style="object-fit: cover; max-width: 60px; max-height: 60px">
                                                                    <img src="{{ asset($workshop->imagem2) }}" alt="" onclick="abrirGaleria('{{ asset($workshop->imagem2) }}')"
                                                                         class="rounded hover" height="50"
                                                                        style="object-fit: cover; max-width: 60px; max-height: 60px">
                                                                    <img src="{{ asset($workshop->imagem3) }}" alt="" onclick="abrirGaleria('{{ asset($workshop->imagem3) }}')"
                                                                         class="rounded hover" height="50"
                                                                        style="object-fit: cover; max-width: 60px; max-height: 60px">
                                                                    <img src="{{ asset($workshop->imagem4) }}" alt="" onclick="abrirGaleria('{{ asset($workshop->imagem4) }}')"
                                                                         class="rounded hover" height="50"
                                                                        style="object-fit: cover; max-width: 60px; max-height: 60px">
                                                                </td>
                                                            
                                                                <td class="table-action">
                                                                    <a href="{{ route('workshops.edit', ['id' => $workshop['id']]) }}"
                                                                        class="btn btn-info btn-sm rounded-2">
                                                                        <i class="fa-solid fa-gear fa-1x"
                                                                            style="color: #fff"></i>
                                                                    </a>
                                                                    <a href="{{ route('workshops.destroy', ['id' => $workshop['id']]) }}"
                                                                        class="btn btn-danger btn-sm rounded-2">
                                                                        <i class="fa-solid fa-trash fs-1x"
                                                                            style="color: #fff"></i>
                                                                    </a>

                                                                </td>
                                                            </tr>
                                                            <!-- Modal de Visualização -->
                                                            <div class="modal fade"
                                                                id="viewDetailsModal_{{ $workshop->id }}" tabindex="-1"
                                                                role="dialog"
                                                                aria-labelledby="viewDetailsModalLabel_{{ $workshop->id }}"
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
                                                                            <!-- Os detalhes do workshop serão preenchidos aqui pelo JavaScript -->
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="card">
                                                            <p class="text-alert">Nenhum workshop cadastrado</p>
                                                        </div>
                                                    @endif

                                                  
                                                </tbody>
                                            </table>

                                        </div>
                                        {{ $workshops->links('vendor.pagination.bootstrap-5') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="galeria-modal" onclick="fecharGaleria()">
                            <span>X</span>
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="modalNew" class="justify-content-center align-items-center">
                <div>
                    <span class="modalBtnClose">X</span>
                    <form action="{{ route('workshops.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-2">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo">
                        </div>

                        <div class="mb-2">
                            <label for="video" class="form-label">Link do video</label>
                            <input type="text" class="form-control" name="video" id="video">
                        </div>
                        <div class="mb-2">
                            <label for="imagem1" class="form-label">1º Imagem</label>
                            <input type="file" class="form-control" name="imagem1" id="imagem1">
                        </div>
                        <div class="mb-2">
                            <label for="imagem2" class="form-label">2º Imagem</label>
                            <input type="file" class="form-control" name="imagem2" id="imagem2">
                        </div>
                        <div class="mb-2">
                            <label for="imagem3" class="form-label">3º Imagem</label>
                            <input type="file" class="form-control" name="imagem3" id="imagem3">
                        </div>
                        <div class="mb-2">
                            <label for="imagem4" class="form-label">4º Imagem</label>
                            <input type="file" class="form-control" name="imagem4" id="imagem4">
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
   <script>
    const galeriaModal = document.querySelector(".galeria-modal")
    const galeriaModalImagem = document.querySelector(".galeria-modal img")
    console.log(galeriaModal)

    function fecharGaleria() {
        galeriaModal.style.visibility = "hidden";
        galeriaModalImagem.style.transform = "scale(0)";

    }

    function abrirGaleria(src) {
        galeriaModal.style.visibility = "visible";
        galeriaModalImagem.style.transform = "scale(1)";
        console.log(src);
        galeriaModalImagem.src = src;
    }
</script>
</div>

</div>
