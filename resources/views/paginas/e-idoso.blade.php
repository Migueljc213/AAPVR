@extends('paginas.layout-pages.default')

@section('titulo', 'Projetos')


@section('content')
    <section id="projetos" class="d-flex align-items-center justify-content-center justify-content-md-start"
        style="background: url({{ asset('assets/img/ProjetosFundo.svg') }}) no-repeat; min-height: 100vh">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-start" style="gap:20px;">
            <div class="d-flex align-items-center ">
                <div class="d-flex flex-column justify-content-center justify-content-md-start" style="position: relative;">
                    <img src="{{ asset('assets/img/BannerEIdoso.svg') }}" alt="" width="700">

                    <div class="titulo-banner" style="bottom: 0;left: 10%;">
                        <h3 class=" fw-bold px-3 "
                            style="position: absolute !important; right: -40%; top:85%; font-size: 4rem; color: #fff; background:var(--cor-secundary); text-transform: uppercase ">
                            para idosos</h3>
                    </div>
                    <div class="titulo-banner" style="bottom: -80px;left: 10%;">
                        <h3 class="fw-bold px-2 "
                            style="position: absolute !important;  right: 0%; top:70%;font-size: 2rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                            inclusão digital</h3>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>

    </section>
    <section style="background: #fff; min-height: 70vh">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center flex-column text-center">
                <h1 class="fs-3 fw-bold mt-5 mb-3" style="color: #0389b7">INCLUSÃO DIGITAL PARA IDOSOS</h1>
                <p class="text-start mx-3" class="#000">O projeto E-Idoso consiste em capacitações para a utilização da
                    tecnologia de informação e comunicação ao público idoso residente nos municípios da região Sul
                    Fluminense. As oficinas englobam desde de conhecimentos básicos necessários para o uso de aplicativos e
                    navegação na internet a temas transversais de cidadania, qualidade de vida e educação financeira.
                    <br> <br>
                    O projeto visa introduzir o idoso às novas tecnologias e garantir que tenham mais qualidade de vida,
                    independência, segurança para navegar na rede e acesso à informação. A partir da iniciativa, esperas-se
                    colaborar para a redução da exclusão digital e isolamento social dos idosos, além de propor a troca de
                    conhecimento entre gerações com os instrutores.
                </p>
                <a href="https://eidoso.aapvr.com.br/artigo/projeto-e-idoso" target="__blank" class="btn fw-bold text-uppercase w-100 mt-4 rounded-pill p-2"
                    style="background: #ff7700; color: #fff"><i class="fa-solid fa-file-lines px-1"></i>acesse a plataforma
                    e conheça um pouco mais do
                    projeto</a>
            </div>
        </div>
    </section>

    <section>
        <div class="container" >
            <div>
                <h1 class="fs-3 fw-bold mt-5 mb-3 text-center" style="color: #0389b7">VEJAS AS LIVES DO PROJETO</h1>
                <div class="row">
                    <div class="col-12 col-md-6 my-4 text-center d-flex flex-column jutify-content-center">
                        <h4 class="fw-bold fs-5 mb-3" style="color: #ff7700">Live projeto E-IDOSO:
                            Direitos previdenciários</h4>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/VzpOKwaF5Yw?si=AImAUE23jOxds90V" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-md-6 my-4 text-center d-flex flex-column jutify-content-center">
                        <h4 class="fw-bold fs-5 mb-3" style="color: #ff7700">Live projeto E-IDOSO:
                            Direitos previdenciários</h4>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/0HjGlsFEQ20?si=KRna8YgL8zZxhJRj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-md-6 my-4 text-center d-flex flex-column jutify-content-center">
                        <h4 class="fw-bold fs-5 mb-3" style="color: #ff7700">Live projeto E-IDOSO:
                            Direitos previdenciários</h4>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/i25yh0VlvfM?si=469B-DRjI-iB1hKP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-md-6 my-4 text-center d-flex flex-column jutify-content-center">
                        <h4 class="fw-bold fs-5 mb-3" style="color: #ff7700">Live projeto E-IDOSO:
                            Direitos previdenciários</h4>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/mRtVCs-kP2w?si=bxu0NR88LSNHTt3c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <article class="mt-4 w-100 mb-5">
        <div class="container rounded p-3" >
            <img src="{{ asset('assets/img/LogosEIdoso.svg') }}" class="w-100" alt="">
        </div>

    </article>

@endsection
