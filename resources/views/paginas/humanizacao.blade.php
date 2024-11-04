@extends('paginas.layout-pages.default')

@section('titulo', 'Projetos')


@section('content')
    <section id="projetos" class="d-flex pt-5 align-items-start align-items-md-center justify-content-center justify-content-md-start"
        style="background: url({{ asset('assets/img/ProjetosFundo.svg') }}) no-repeat; min-height: 100vh">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-start" style="gap:20px;">
            <div class="d-flex align-items-center ">
                <div class="d-flex flex-column justify-content-center justify-content-md-start " style="position: relative;">
                    <div class="d-flex ">
                        <img src="{{ asset('assets/img/VivaBannerPessoa.svg') }}" alt="" width="600">
                    </div>
                    <div class="titulo-banner" style="bottom: 0;left: 10%;">
                        <h3 class=" fw-bold px-3 "
                            style="position: absolute !important; right: -50%; top:70%; font-size: 5rem; color: #fff; background:var(--cor-secundary); text-transform: uppercase ">
                            PROJETO</h3>
                    </div>
                    <div class="titulo-banner" style="bottom: -80px;left: 10%;">
                        <h3 class="fw-bold px-2 "
                            style="position: absolute !important;  right: 0%; top:60%;font-size: 2rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                            HUMANIZAÇÃO</h3>
                    </div>
                    <div class="img-banner" style="position: absolute; top: 100px; right: -60%;">
                        <img src="{{ asset('assets/img/HumanizacaoLogo.svg') }}" alt="" width="500">
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>

    </section>
    <section style="background: #fff; min-height: 60vh">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center flex-column text-center">
                <h1 class="fs-2 fw-bold mt-5 " style="color: #0389b7">ESSE É O PROJETO HUMANIZAÇÃO</h1>
                <span class="fs-5 fw-bold mt-2 mb-3 text-center text-md-start" style="color: #ff7700">UM PROGRAMA DO GRUPO AAPVR E PREFEITURA DE VOLTA
                    REDONDA,
                    SMAC E FUNDO MUNICIPAL DE ASSISTÊNCIA SOCIAL</span>
                <p class="text-start mx-3" class="#000">“Essa casa de vocês é tão boa que, se eu tivesse que internar a
                    minha mãe algum dia, seria aqui que ela iria morar!”
                    <br><br>
                    As palavras, de uma fiscal do Ministério Público, mostram bem o grau de excelência a que chegou o
                    atendimento aos moradores da Instituição de Longa Permanência João Miguel da Silva, o antigo Asilo Dom
                    Bosco, administrada pela nossa Associação.
                    <br><br>
                    Mas, para nós, isso não basta e, por isso, estamos sempre buscando melhorar ainda mais a qualidade de
                    vida de nossos velhinhos.
                    <br><br>
                    E é aí que entra o Projeto Humanização. Com aprovação do Fundo de Assistência Social de Volta Redonda,
                    ele promove a capacitação dos nossos profissionais, a aquisição de materiais e diversificação no
                    entretenimento, além da realização de oficinas terapêuticas, evitando a depressão entre os idosos. Para
                    isso, contamos, inclusive, com o trabalho de uma terapeuta ocupacional.
                    <br><br>
                    Assim, investimos na melhora da qualidade de vida dos nossos idosos, com acolhimento físico e emocional
                    e estimulando a participação dos familiares dentro da instituição, fazendo com que os internos não se
                    sintam abandonados e isolados.
                    <br><br>
                    O projeto, justifica-se, ainda, para reforçar os procedimentos à luz da perspectiva abordada na Política
                    Nacional de Humanização (PNH) e suas diretrizes, capazes de nortear o processo de trabalho das equipes
                    que tornam o atendimento humanizado .
                    <br><br>
                    Portanto, é fundamental que a AAPVR busque, de todas as formas, captar recursos para promover
                    estratégias que contribuam para a assistência integral dos idosos que vivem na ILPI e capacitar, cada
                    vez mais, os nossos colaboradores que lá atuam para proporcionarmos excelência no cuidado e atenção a
                    todos.
                    <br><br>
                    E é isso que conseguimos com o Projeto Humanização!
                </p>

            </div>
        </div>
    </section>
    <article class="mt-4 w-100 mb-5">
        <div class="container" >
            <div class=" rounded p-3 mb-3 d-flex justify-content-center"
                style="background: linear-gradient(to right, #0389b7 50%, #2eb8d2);">
                <img src="{{ asset('assets/img/logos_end.svg') }}" class="w-75" alt="">

            </div>
            <button class="btn fw-bold text-uppercase w-100 mt-5 rounded-pill p-2"
                style="background: #ff7700; color: #fff"><i class="fa-solid fa-file-lines px-1"></i>acesse a plataforma e conheça um pouco mais do
                projeto</button>
        </div>
    </article>

    <section class="d-flex justify-content-center align-items-center" style="min-height: 100vh; position: relative">
        <div class="container" style="">
            <h1 class="fs-2 fw-bold mb-5 mt-1 text-center text-uppercase" style="color: #0389b7; font-family: 'BebasNeue';">Galeria do Projeto</h1>
            <div class="galeria row w-100 p-1  h-50 justify-content-center">
                <div class="col-12 col-md-5 single-galeria rounded my-3" style="height: 50vh">
                    <img class="w-100 h-100 object-fit-cover rounded" src="{{ asset('assets/img/Foto1.svg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/Foto1.svg') }}')" alt="" height="50vh">
                </div>

                <div class="col-12 col-md-7 single-galeria rounded h-100 my-3 d-flex justify-content-center text-center ">
                    <div class="d-flex flex-wrap align-items-center justify-content-center" >
                        <div class="mx-1 my-1" style="max-width: 130px">
                            <img class="w-100 h-100 object-fit-cover "
                                src="{{ asset('assets/img/Foto1.svg') }}"
                                onclick="abrirGaleria('{{ asset('assets/img/Foto1.svg') }}')" alt=""
                                width="100">
                        </div>
                        <div class="mx-1 my-1" style="max-width: 130px">
                            <img class="w-100 h-100 object-fit-cover "
                                src="{{ asset('assets/img/Foto1.svg') }}"
                                onclick="abrirGaleria('{{ asset('assets/img/Foto1.svg') }}')" alt=""
                                width="100">
                        </div>
                        <div class="mx-1 my-1" style="max-width: 130px">
                            <img class="w-100 h-100 object-fit-cover "
                                src="{{ asset('assets/img/Foto1.svg') }}"
                                onclick="abrirGaleria('{{ asset('assets/img/Foto1.svg') }}')" alt=""
                                width="100">
                        </div>
                        <div class="mx-1 my-1" style="max-width: 130px">
                            <img class="w-100 h-100 object-fit-cover "
                                src="{{ asset('assets/img/Foto1.svg') }}"
                                onclick="abrirGaleria('{{ asset('assets/img/Foto1.svg') }}')" alt=""
                                width="100">
                        </div>
                        <div class="mx-1 my-1" style="max-width: 130px">
                            <img class="w-100 h-100 object-fit-cover "
                                src="{{ asset('assets/img/Foto1.svg') }}"
                                onclick="abrirGaleria('{{ asset('assets/img/Foto1.svg') }}')" alt=""
                                width="100">
                        </div>
                        <div class="mx-1 my-1" style="max-width: 130px">
                            <img class="w-100 h-100 object-fit-cover rounded"
                                src="{{ asset('assets/img/Foto1.svg') }}"
                                onclick="abrirGaleria('{{ asset('assets/img/Foto1.svg') }}')" alt=""
                                width="100">
                        </div>
                        <div class="mx-1 my-1" style="max-width: 130px">
                            <img class="w-100 h-100 object-fit-cover rounded"
                                src="{{ asset('assets/img/Foto1.svg') }}"
                                onclick="abrirGaleria('{{ asset('assets/img/Foto1.svg') }}')" alt=""
                                width="100">
                        </div>
                        <div class="mx-1 my-1" style="max-width: 130px">
                            <img class="w-100 h-100 object-fit-cover rounded"
                                src="{{ asset('assets/img/Foto1.svg') }}"
                                onclick="abrirGaleria('{{ asset('assets/img/Foto1.svg') }}')" alt=""
                                width="100">
                        </div>
                        <div class="mx-1 my-1" style="max-width: 130px">
                            <img class="w-100 h-100 object-fit-cover rounded"
                                src="{{ asset('assets/img/Foto1.svg') }}"
                                onclick="abrirGaleria('{{ asset('assets/img/Foto1.svg') }}')" alt=""
                                width="100">
                        </div>
                        <div class="mx-1 my-1" style="max-width: 130px">
                            <img class="w-100 h-100 object-fit-cover rounded"
                                src="{{ asset('assets/img/Foto1.svg') }}"
                                onclick="abrirGaleria('{{ asset('assets/img/Foto1.svg') }}')" alt=""
                                width="100">
                        </div>
                        <div class="mx-1 my-1" style="max-width: 130px">
                            <img class="w-100 h-100 object-fit-cover rounded"
                                src="{{ asset('assets/img/Foto1.svg') }}"
                                onclick="abrirGaleria('{{ asset('assets/img/Foto1.svg') }}')" alt=""
                                width="100">
                        </div>
                        <div class="mx-1 my-1" style="max-width: 130px">
                            <img class="w-100 h-100 object-fit-cover rounded"
                                src="{{ asset('assets/img/Foto1.svg') }}"
                                onclick="abrirGaleria('{{ asset('assets/img/Foto1.svg') }}')" alt=""
                                width="100">
                        </div>
                    
                    </div>

                </div>
            </div>

        </div>
        <div class="galeria-modal" onclick="fecharGaleria()">
            <span>X</span>
            <img src="" alt="">
        </div>
    </section>

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
@endsection
