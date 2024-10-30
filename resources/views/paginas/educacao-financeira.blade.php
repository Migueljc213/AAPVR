@extends('paginas.layout-pages.default')

@section('titulo', 'Projetos')


@section('content')
    <section id="projetos" class="d-flex align-items-center justify-content-center "
        style="background: url({{ asset('assets/img/ProjetosFundo.svg') }}) no-repeat; min-height: 100vh">
        <div class="container d-flex align-items-center justify-content-center " style="gap:20px;">
            <div class="d-flex align-items-center ">
                <div class="d-flex flex-column justify-content-center " style="position: relative;">
                    <img src="{{ asset('assets/img/FinanceiroBanner.svg') }}" alt="" width="800">

                    <div class="titulo-banner" style="bottom: 0;left: 10%;">
                        <h3 class=" fw-bold px-3 "
                            style="position: absolute !important; right: 0%; top:94%; font-size: 3.5rem; color: #fff; background:var(--cor-secundary); text-transform: uppercase ">
                            EDUCAÇÃO FINANCEIRA  </h3>
                    </div>
                    <div class="titulo-banner" style="bottom: -80px;left: 10%;">
                        <h3 class="fw-bold px-2 "
                            style="position: absolute !important;  left: 18%; top:80%;font-size: 2rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                            E-IDOSO</h3>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>

    </section>
    <section style="background: #fff; min-height: 70vh">
        <div class="container ">
            <div class="d-flex mx-5 mt-5 justify-content-center align-items-center flex-column text-center">
                <h1 class="fs-3 fw-bold mt-5 mb-3" style="color: #0389b7">ESSE É O E-IDOSO EDUCAÇÃO FINANCEIRA
                </h1>
                <span class="fs-5 fw-bold mt-2 mb-3 text-center text-md-start" style="color: #ff7700">
                    UM PROGRAMA DO GRUPO AAPVR, CSN E PREFEITURA DE VOLTA REDONDA
                </span class="fs-5 fw-bold mt-2 mb-3 text-center text-md-start" style="color: #ff7700">
                <p class="text-start mx-3" style="color: #000; ">Ministrado aos idosos que fizeram o e-idoso, de inclusão
                    digital,
                    o Curso de Educação Financeira, com apoio da Fundação CSN e do Conselho Municipal dos Direitos da Pessoa
                    Idosa, é um grande sucesso.
                    <br>
                    Nele, o aluno recebe dicas de organização, planejamento, poupança, aprende a não cair em golpes e
                    fraudes pela internet e celular, além de noções sobre empreendedorismo e geração de renda.
                    <br>
                    Planejar as finanças é uma necessidade e ganha ainda mais importância na terceira idade. Na maioria das
                    vezes, o mais importante nem é quanto a pessoa ganha, mas como ela gasta o que ganha. Por isso, a AAPVR
                    promove o curso, além de vários workshops, com educadores financeiros, que podem ser também acompanhados
                    pelo youtube.
                    <br>
                    As turmas de Educação Financeira acontecem mensalmente, com uma carga horária total de 20 horas. Já
                    tivemos 37 idosos formados e a turma de setembro está em andamento.
                    <br>
                    Com toda certeza, àqueles que concluem este curso têm muito mais possibilidades de melhorar a qualidade
                    de vida.
                    <br>
                    Informações pelo número 2102-1909 ou pessoalmente na Unidade Aterrado, na Rua 535, ao lado da Justiça do
                    Trabalho.



                </p>
     
            </div>
        </div>
    </section>
    <article class="mt-4 w-100 mb-5">
        <div class="container rounded p-3 hover">
            <img src="{{ asset('assets/img/apoiadores.svg') }}" class="w-100" alt="">
        </div>

    </article>

    <section>
        <div class="container d-flex justify-content-center align-items-start">
            <div>
                <h3 class="fs-3 fw-bold mt-5 mb-3 text-center" style="color: #0389b7">CLIPPING PROJETO E-IDOSO
                </h3>
                <a href="https://issuu.com/eidoso" class="hover w-100"><img class="w-100"
                        src="{{ asset('assets/img/clipping.png') }}" alt=""></a>
                <div class="d-flex justify-content-center text-center w-100 my-2">
                    <button class="btn fs-4" style="background: #ff7700; color: #fff"><i
                            class="fa-solid fa-address-card mx-2"></i>CONFIRA O CLIPPING DO PROJETO</button>
                </div>
            </div>
            <div>
                <h3 class="fs-3 fw-bold mt-5 mb-3 text-center" style="color: #0389b7">SPOTS DE RÁDIO DO PROJETO E-IDOSO
                </h3>
                <a href="" class="hover w-100"><img class="w-100" src="{{ asset('assets/img/clipping.png') }}"
                        alt=""></a>
            </div>
        </div>

    </section>


    <article style="min-height: 70vh">
        <div class="container">
            <h3 class="fs-3 fw-bold mt-5 mb-3 text-center" style="color: #0389b7">
                INTRODUÇÃO AO CURSO
            </h3>
            <iframe class="w-100 h-100 my-3" src="https://www.youtube.com/embed/IqMFkgy76q8?si=gyG15nVxpzPJVea3"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center my-5">
                <div class="col-12 col-md-6">
                    <iframe class="w-100" height="346"
                        src="https://www.youtube.com/embed/BAlWjvlhS3w?si=cf59n73hwYlToPrs" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-6">
                    <iframe class="w-100" height="346"
                        src="https://www.youtube.com/embed/XNz2s09Eaew?si=5-wZ-0jU8Il8UDSs" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center my-5">
                <div class="col-12 col-md-6">
                    <iframe class="w-100" height="315"
                        src="https://www.youtube.com/embed/_CLVV7drSC4?si=xz444-wFpHZPKatc" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-6">
                    <iframe class="w-100" height="315"
                        src="https://www.youtube.com/embed/QdY4I1zc7MM?si=nlSn2_s4iOG-mUXV" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </article>


    {{-- <article style="min-height: 70vh">
        <div class="container">
            <h3 class="fs-3 fw-bold mt-5 mb-3 text-center" style="color: #0389b7">
                WORKSHOPS DO PROJETO
            </h3>
            <div class="row">
                <div class="col-12 col-md-6">
                    <h4 class="fs-5 fw-bold mt-5 mb-3 text-center" style="color: #0389b7">
                        EDUCAÇÃO FINANCEIRA E SEUS DESAFIOS AO EVELHECER</h4>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ahSoBAI3GQI?si=Jgep8sdof5pfdD1L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div>
                            <img src="" style="width: 50px; height: 50px;" onclick="abrirGaleria('{{ asset('assets/img/') }}')"
                            src="{{ asset('assets/img/') }}"  alt="">
                            
                        </div>
                </div>
            </div>
        </div>

        <div class="galeria-modal" onclick="fecharGaleria()">
            <div class="p-2" style="position: relative" >
                <span>X</span>
                <img src="" alt="">
            </div>
        </div>
    </article> --}}

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
@endsection
