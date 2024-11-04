<x-app-layout>

    <body>
        <div class="page">
            <div class="page-wrapper">
                <!-- Page header -->
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        <a id="openModal" class="btn btn-primary ">Novo+</a>
                        <div class="row d-flex align-items-center justify-content-center">
                            @if ($fotos && $fotos->isNotEmpty())
                                @foreach ($fotos as $foto)
                                    <div class="col-6 col-md-4 col-lg-3 my-4">
                                        <div class="image-card position-relative w-100 h-100">
                                            <img class="w-100 h-100 hover" onclick="abrirGaleria('{{ asset($foto['url']) }}')"
                                                src="{{ asset($foto['url']) }}" alt="">
                                            <a href="{{ route('galeria.delete', ['id' => $foto['id']]) }}"
                                                class="btn btn-sm btn-danger rounded-circle delete-btn">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="card p-4 rounded my-3">
                                    <h2>Não existe nenhuma foto adicionada, clique em Novo para adicionar fotos à
                                        galeria.</h2>
                                </div>
                            @endif
                        </div>
                        <a href="{{ route('galeria.index') }}" class="btn btn-secondary">Voltar</a>
                        <div class="galeria-modal" onclick="fecharGaleria()">
                            <div class="p-2" style="position: relative" >
                                <span >X</span>
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal" class="modal justify-content-center align-items-center">
            <div>
                <span class="closeModal">X</span>

                <form action="{{ route('galeria.novo') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label for="url" class="form-label">URL IMAGEM</label>
                        <input type="file" class="form-control" name="url" id="url">
                    </div>
                    <input type="hidden" class="form-control" name="pagina_id" id="pagina_id"
                        value="{{ $id }}">
                    

                    <div class="d-flex align-items-center justify-content-end" style="gap: 20px">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button class="closeModal" class="btn ">Fechar</button>
                    </div>
                </form>

            </div>
        </div>


        <script>
            
                const modal = document.querySelector('#modal');
                const openModal = document.getElementById('openModal');
                const closeModal = document.querySelectorAll('.closeModal');


                openModal.addEventListener('click', () => {
                    modal.classList.add('ativo')
                });

                closeModal.forEach(btn => {
                    btn.addEventListener('click', () => {
                        modal.classList.remove('ativo')
                    })
                });

            
        </script>

 

        <script>
            const galeriaModal = document.querySelector(".galeria-modal")
            const galeriaModalImagem = document.querySelector(".galeria-modal img")

            function fecharGaleria() {
                galeriaModal.style.visibility = "hidden";
                galeriaModalImagem.style.transform = "scale(0)";

            }

            function abrirGaleria(src) {
                galeriaModal.style.visibility = "visible";
                galeriaModalImagem.style.transform = "scale(1)";
                galeriaModalImagem.src = src;
            }
        </script>
    </body>
</x-app-layout>
