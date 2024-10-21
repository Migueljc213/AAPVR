@extends('paginas.layout-pages.default')

@section('titulo', 'Projetos')


@section('content')
    <section id="projetos" class="d-flex align-items-center justify-content-center justify-content-md-start"
        style="background: url({{ asset('assets/img/ProjetosFundo.svg') }}) no-repeat; min-height: 100vh">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-start" style="gap:20px;">
            <div class="d-flex align-items-center ">
                <div class="d-flex flex-column justify-content-center justify-content-md-start"
                    style="position: relative;">
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
                            VIVA</h3>
                    </div>
                    <div class="img-banner" style="position: absolute; top: 0; right: -80%;">
                        <img src="{{ asset('assets/img/VivaLogo.svg') }}" alt="" width="500">
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
                <h1 class="fs-2 fw-bold mt-5 " style="color: #0389b7">ESSE É O PROJETO VIVA</h1>
                <span class="fs-5 fw-bold mt-2 mb-3" style="color: #ff7700">UM PROGRAMA DO GRUPO AAPVR E GOVERNO
                    FEDERAL</span>
                <p class="text-start mx-3" class="#000">Criado por iniciativa da AAPVR em parceria com o GOVERNO FEDERAL,
                    pelo Termo de Fomento nº 910493/2021 (publicado nesta página), o Projeto Viva, que proporciona à pessoa
                    idosa boas condições físicas e psicológicas, melhorando consideravelmente a qualidade de vida, é sucesso
                    total. Até o seu encerramento, em 18 de maio, foram 505 beneficiários, sendo 450 idosos e os demais com
                    alguma deficiência ou mobilidade reduzida. Oitenta e duas pessoas idosas se inscreveram em mais de uma
                    atividade esportiva e, no final do período, tinham sido realizados mais de 17 mil atendimentos em
                    atividades como ginástica, alongamento, caminhadas, futebol, dança de salão, bailes, oficinas
                    terapêuticas e outras. Além de não interromper o projeto, o presidente da nossa Associação, Ubirajara
                    Vaz, já anuncia o Viva II para 2024.
                    Nesta página, você encontra fotos, vídeos, spot que rodou nas rádios e matérias que foram publicadas
                    pela mídia, como jornais e sites.
                    <br>
                    <br>
                    Vem para a AAP!
                </p>

            </div>
        </div>
    </section>
    <article class="mt-4 w-100 mb-5">
        <div class="container">
            <div class=" rounded p-3 mb-3" style="background: linear-gradient(to right, #0389b7 50%, #2eb8d2);">
                <img src="{{ asset('assets/img/logos_end.svg') }}" class="w-100" alt="">

            </div>
            <button class="btn fw-bold text-uppercase w-100 mt-5 rounded-pill p-2"
                style="background: #ff7700; color: #fff"><i class="fa-solid fa-file-lines px-1"></i>acesse a plataforma e conheça um pouco mais do
                projeto</button>
        </div>
    </article>

    <article>
        <div class=" container d-flex justify-content-center align-items-start my-4 flex-wrap" style="gap: 30px;">
            <div class="row">
                <div class=" col-12 col-md-6 d-flex justify-content-center align-items-center flex-column ">
                    <h2 class="fs-3 fw-bold mt-5  text-uppercase" style="color: #0389b7">projeto viva na mídia</h2>
                    <p>Acompanhe o projeto viva atrávés das mídias parceiras. Escolha o veículo e clique na imagem para
                        conferir
                        a matéria na integra</p>
                    <img src="{{ asset('assets/img/VivaMidia.svg') }}" alt="" class="w-100 h-100">
                </div>

                <div class=" col-12 col-md-6 d-flex justify-content-center align-items-center flex-column ">
                    <h2 class="fs-3 fw-bold mt-5 text-uppercase" style="color: #0389b7">spot de rádio</h2>
                    <p>Acompanhe o projeto viva atrávés das mídias parceiras. Escolha o veículo e clique na imagem para
                        conferir
                        a matéria na integra</p>
                    <iframe src="https://www.youtube.com/watch?v=ahSoBAI3GQI" class="w-100 h-100"
                        style="max-height: 600px !important" frameborder="0"></iframe>
                    <h2 class="fs-3 fw-bold mt-5 " style="color: #0389b7">CLIPPING PROJETO VIVA</h2>
                    <p>Veja o clipping completo do projeto VIVA ao longo do ano de 2022 e 2023.</p>
                    <button class="btn fw-bold text-uppercase w-100 mt-3 rounded-pill p-2"
                        style="background: #ff7700; color: #fff; font-size: .7rem"><i class="fa-solid fa-file-lines px-1"></i>confira o clipping completo de
                        todas as mídias</button>
                </div>
            </div>
        </div>

    </article>

    <section class="my-5" style="height: 70vh">
        <div class="container w-100 h-100">
            <iframe src="https://www.youtube.com/watch?v=ahSoBAI3GQI" class="w-100 h-100" frameborder="0"></iframe>
        </div>
    </section>

    <section style="min-height: 80vh">
        <div class="container">
            <h2 class="fs-3 fw-bold mt-5 text-uppercase text-center mb-5" style="color: #0389b7">GALERIA DE ATIVIDADES</h2>

            <div class="row my-3 d-flex align-items-start">
                <div class="col-md-6 " style="max-height: 60vh">
                    <h4 class="fw-bold text-uppercase text-center" style="color: #ff7700">atividade o1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad </p>
                    <iframe src="https://www.youtube.com/watch?v=ahSoBAI3GQI" frameborder="0" class="w-100 h-50"></iframe>
                </div>
                <div class="col-md-6 d-flex justify-content-start align-items-center text-start" style="gap:30px">
                    <img src="{{ asset('assets/img/AgendaBanner.svg') }}" alt="" width="100" height="100">
                </div>
            </div>

            <div class="row my-5 d-flex align-items-start">
                <div class="col-md-6">
                    <h4 class="fw-bold text-uppercase text-center" style="color: #ff7700">atividade o1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad </p>
                    <iframe src="https://www.youtube.com/watch?v=ahSoBAI3GQI" frameborder="0" class="w-100"></iframe>
                </div>
                <div class="col-md-6 d-flex justify-content-start align-items-center text-start" style="gap:30px">
                    <img src="{{ asset('assets/img/AgendaBanner.svg') }}" alt="" width="100" height="100">
                </div>
            </div>

        </div>
    </section>
@endsection
