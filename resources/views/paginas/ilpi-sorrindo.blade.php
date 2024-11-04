@extends('paginas.layout-pages.default')

@section('titulo', 'Projetos')


@section('content')
    <section id="projetos" class="d-flex align-items-center justify-content-center "
        style="background: url({{ asset('assets/img/ProjetosFundo.svg') }}) no-repeat; min-height: 100vh">
        <div class="container d-flex align-items-center justify-content-center " style="gap:20px;">
            <div class="d-flex align-items-center ">
                <div class="d-flex flex-column justify-content-center " style="position: relative;">
                    <img src="{{ asset('assets/img/Banner-ilpi.svg') }}" alt="" width="1000">

                    <div class="titulo-banner" style="bottom: 0;left: 10%;">
                        <h3 class=" fw-bold px-3 "
                            style="position: absolute !important; right: 0%; top:80%; font-size: 5rem; color: #fff; background:var(--cor-secundary); text-transform: uppercase ">
                            para idosos</h3>
                    </div>
                    <div class="titulo-banner" style="bottom: -80px;left: 10%;">
                        <h3 class="fw-bold px-2 "
                            style="position: absolute !important;  right: 0%; top:70%;font-size: 2rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                            ILPI-SORRINDO</h3>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>

    </section>
    <section style="background: #fff; min-height: 80vh">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center flex-column text-center">
                <h1 class="fs-3 fw-bold mt-5 mb-3" style="color: #0389b7">
                    ESSE É O PROJETO ILPI SORRINDO</h1>
                <span class="fs-5 fw-bold mt-2 mb-3 text-center text-md-start" style="color: #ff7700">
                    UM PROGRAMA DO GRUPO AAPVR E GOVERNO FEDERAL
                </span>
                <p class="text-start mx-3 fs-5" class="#000">O ILPI Sorrindo é um projeto da nossa Associação, em parceria
                    com o Ministério da Mulher, da Família e dos Direitos Humanos e Secretaria Nacional de Promoção e Defesa
                    dos Direitos da Pessoa Idosa, que promove a melhoria da qualidade de vida e oficinas de valorização da
                    vida aos idosos da Instituição de Longa Permanência João Miguel da Silva e comunidade em geral. As
                    atividades e oficinas oferecidas incluem dança, música, artes, oficinas interativas e contação de
                    histórias, estímulos variados que são fatores diferenciais para o envelhecimento saudável!
                    <br><br>
                    A iniciativa oferece ainda atendimento odontológico direcionado às necessidades do público idoso
                    (Odontogeriatria) da ILPI e em situação de vulnerabilidade.
                    Também são realizados vários passeios culturais para os idosos do ILPI, que conheceram bibliotecas,
                    exposições de arte e pontos turísticos em outras cidades da região.
                    É mais um sucesso da parceria AAPVR – Governo Federal!entir integrados no mundo digital”, afirmou
                    Ubirajara Vaz.
                </p>

            </div>
        </div>
    </section>
    <article class="container mt-4 w-100 mb-5">
        <div class="mx-5 p-3 hover" style="background: linear-gradient(to right, #0389b7 50%, #2eb8d2);border-radius: 26px">
            <img src="{{ asset('assets/img/logos_end.svg') }}" class="w-100" alt="">
        </div>

    </article>

    <section class="container">
        <h2 class="fs-3 fw-bold mt-5 mb-3 text-center" style="color: #0389b7">
            ATENDIMENTOS DO ILPI SORRINDO</h2>
        <p class="fs-5 fw-bold mt-2 mb-3 text-center" style="color: #ff7700">
            Atendimentos odontológicos realizados aos residentes da ILPI e comunidade.
        </p>
        @if ($fotos != null)
            <x-galeria :fotos="$fotos" />
        @endif
    </section>

    <section class="container">
        <h2 class="fs-3 fw-bold mt-5 mb-3 text-center" style="color: #0389b7">
            OFICINAS DA ILPI SORRINDO</h2>
        <div class="row align-items-center my-3">
            <div class="col-12 col-md-6 my-3 d-flex flex-column justify-content-center">
                <h4 class="fs-5 fw-bold mt-2 mb-3 text-center" style="color: #ff7700">OFICINA DE DANÇA E MÚSICA</h4>
                <img class="" src="{{ asset('assets/img/oficina1.svg') }}" alt="">
            </div>
            <div class="col-12 col-md-6 my-3 d-flex flex-column justify-content-center">
                <h4 class="fs-5 fw-bold mt-2 mb-3 text-center" style="color: #ff7700">OFICINA DE CONTAÇÃO DE HISTÓRIA</h4>
                <img class="" src="{{ asset('assets/img/oficina2.svg') }}" alt="">
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="col-12 col-md-8 d-flex flex-column justify-content-center text-center">
                <h4 class="fs-5 fw-bold mt-2 mb-3 text-center" style="color: #ff7700">OFICINAS INTERATIVAS</h4>
                <img class="" src="{{ asset('assets/img/oficina3.svg') }}" alt="">
            </div>
        </div>
    </section>

    @if ($passeios)
        <section class="container">
            <div class="row">
                @foreach ($passeios as $passeio)
                    <div class="col-12 col-md-6 text-center">
                        <h2  class="fs-3 fw-bold mt-5 mb-3 text-center" style="color: #0389b7">{{ $passeio->titulo }}</h1>
                            <p class="fs-5 fw-bold mt-2 mb-2 text-center" style="color: #ff7700">{{ $passeio->subtitulo }}</p>
                            <div class="d-flex align-items-center justify-content-center mb-5" style="gap: 16px">
                                <img class="object-fit-cover hover rounded" width="120" height="120" src="{{ asset($passeio->imagem1) }}"
                                    onclick="abrirGaleria('{{ asset($passeio->imagem1) }}')" alt=""
                                    height="50vh">
                                <img class="object-fit-cover hover rounded" width="120" height="120" src="{{ asset($passeio->imagem2) }}"
                                    onclick="abrirGaleria('{{ asset($passeio->imagem2) }}')" alt=""
                                    height="50vh">
                                <img class="object-fit-cover hover rounded" width="120" height="120" src="{{ asset($passeio->imagem3) }}"
                                    onclick="abrirGaleria('{{ asset($passeio->imagem3) }}')" alt=""
                                    height="50vh">
                                <img class="object-fit-cover hover rounded" width="120" height="120" src="{{ asset($passeio->imagem4) }}"
                                    onclick="abrirGaleria('{{ asset($passeio->imagem4) }}')" alt=""
                                    height="50vh">
                            </div>
                    </div>
                @endforeach
            </div>

        </section>

        <div class="galeria-modal" onclick="fecharGaleria()">
            <span>X</span>
            <img src="" alt="">
        </div>
    @endif



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
