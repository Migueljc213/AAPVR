<div>
        <section class="d-flex justify-content-center align-items-center mb-5" style=" position: relative; height: auto">
            <div class="container d-flex justify-content-center text-center h-100">
                <div class=" my-5 d-flex justify-content-center text-center h-100  flex-wrap">
                    @if ($fotos && $fotos->isNotEmpty())
                        @foreach ($fotos as $row)
                            <div class=" mx-1 my-1" style="max-width: 210px; max-height: 180px;">
                                <img class="w-100 h-100 object-fit-cover hover" src="{{ asset($row['url']) }}"
                                    onclick="abrirGaleria('{{ asset($row['url']) }}')" alt="">
                            </div>
                        @endforeach
                    @else
                        <div class="card p-4 rounded my-3">
                            <h2>Não existe nenhuma foto adicionada, clique em Novo para adicionar fotos à
                                galeria.</h2>
                        </div>
                    @endif
                </div>

            </div>


            <div class="galeria-modal" onclick="fecharGaleria()">
                <div class="p-2" style="position: relative">
                    <span>X</span>
                    <img src="" alt="">
                </div>
            </div>
            
        </section>


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

</div>
