@extends('paginas.layout-pages.default')

@section('titulo', 'Projetos')


@section('content')
    <section id="projetos" class="d-flex align-items-center justify-content-center justify-content-md-start"
        style="background: url({{ asset('assets/img/ProjetosFundo.svg') }}) no-repeat; min-height: 100vh">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-start" style="gap:20px;">
            <div class="d-flex align-items-center ">
                <div class="d-flex flex-column justify-content-center justify-content-md-start" style="position: relative;">
                    <img src="{{ asset('assets/img/ProjetosBannerPessoa.svg') }}" alt="" width="600">

                    <div class="titulo-banner" style="bottom: 0;left: 10%;">
                        <h3 class=" fw-bold px-3 "
                            style="position: absolute !important; right: -30%; top:55%; font-size: 5rem; color: #fff; background:var(--cor-secundary); text-transform: uppercase ">
                            PROJETOS</h3>
                    </div>
                    <div  class="titulo-banner"  style="bottom: -80px;left: 10%;">
                        <h3 class="fw-bold px-2 "
                            style="position: absolute !important;  right: 22%; top:80%;font-size: 2rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                            APPVR</h3>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>

    </section>
    <section style="background: #fff; min-height: 100vh">
        <div class="container">
            <div class="my-5" style="background: linear-gradient(to right, #0389b7 50%, #2eb8d2); border-radius: 12px">
                <h1 class="fs-5 fw-bold p-2 text-center" style="text-transform: uppercase; color: #fff">confira na íntegra
                    todos os termos de fomento dos projetos AAPVR</h1>
            </div>
            <div>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-md-6 col-xl-4 mb-3 d-flex justify-content-center align-items-center" style="gap:10;position: relative">
                        <img class="projetos_img" src="{{ asset('assets/img/Projetos1.png') }}" width="350"
                            alt="">
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 mb-3 d-flex justify-content-center align-items-center" style="gap:10;position: relative">
                        <img class="projetos_img" src="{{ asset('assets/img/Projetos2.png') }}" width="350"
                            alt="">
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 mb-3 d-flex justify-content-center align-items-center" style="gap:10;position: relative">
                        <img class="projetos_img" src="{{ asset('assets/img/Projetos3.png') }}" width="350"
                            alt="">
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-12 col-md-6 col-xl-3 mb-3 d-flex justify-content-center align-items-center" style="gap:10;position: relative">
                        <img class="projetos_img" src="{{ asset('assets/img/Projetos4.png') }}" width="250"
                            alt="">
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 mb-3 d-flex justify-content-center align-items-center" style="gap:10;position: relative">
                        <img class="projetos_img" src="{{ asset('assets/img/Projetos5.png') }}" width="250"
                            alt="">
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 mb-3 d-flex justify-content-center align-items-center" style="gap:10;position: relative">
                        <img class="projetos_img" src="{{ asset('assets/img/Projetos6.png') }}" width="250"
                            alt="">
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 mb-3 d-flex justify-content-center align-items-center" style="gap:10;position: relative">
                        <img class="projetos_img" src="{{ asset('assets/img/Projetos7.png') }}" width="250"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <article class="parceiros-texto" style="background: #fff; min-height: 60vh">
        <div class="container d-flex justify-content-center flex-column">
            <h1 class="fw-bold my-5 text-center" style="color: #0389b7">NOSSOS PARCEIROS APOIADORES</h1>
            <p class="fs-6 fs-sm-5 mb-3 text-center" style="margin: 0 80px; color: #000">A Associação dos Aposentados e Pensionistas de Volta
                Redonda é uma organização reconhecida como Utilidade
                Pública Municipal com mais de 49 anos de história. Com uma caminhada de tradição e credibilidade, a AAPVR
                segue transformando vidas através de Projetos dedicados a assistir e transformar a realidade das pessoas.
                Oferecendo programas que oportunizam o acesso, o crescimento e a atenção.</p>
        </div>
    </article> 
     <section>
        <div class="container">
            <div class="p-4 mb-5" style="background: linear-gradient(to right, #0389b7 50%, #2eb8d2); border-radius: 12px; width: 100%;">
                <img class="logos" src="{{ asset('assets/img/Logos.svg') }}" width="100%" alt="">
            </div>
        </div>

    </section>
@endsection
