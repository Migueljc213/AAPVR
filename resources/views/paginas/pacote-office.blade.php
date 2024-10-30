@extends('paginas.layout-pages.default')

@section('titulo', 'Projetos')


@section('content')
    <section id="projetos" class="d-flex align-items-center justify-content-center justify-content-md-center"
        style="background: url({{ asset('assets/img/ProjetosFundo.svg') }}) no-repeat; min-height: 100vh">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-center" style="gap:20px;">
            <div class="d-flex align-items-center ">
                <div class="d-flex flex-column justify-content-center justify-content-md-center" style="position: relative;">
                    <img src="{{ asset('assets/img/PacoteOfficeBanner.svg') }}" alt="" width="800">

                    <div class="titulo-banner" style="bottom: 0;left: 10%;">
                        <h3 class=" fw-bold px-3 "
                            style="position: absolute !important; right: -10%; top:85%; font-size: 4rem; color: #fff; background:var(--cor-secundary); text-transform: uppercase ">
                            para idosos</h3>
                    </div>
                    <div class="titulo-banner" style="bottom: -80px;left: 10%;">
                        <h3 class="fw-bold px-2 "
                            style="position: absolute !important;  right: -10%; top:70%;font-size: 2rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                            inclusão digital</h3>
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
                <h1 class="fs-3 fw-bold mt-5 mb-3" style="color: #0389b7">ESSE É O E-IDOSO PACOTE OFFICE</h1>
                <span class="fs-5 fw-bold mt-2 mb-3 text-center text-md-start" style="color: #ff7700">UM PROGRAMA DO GRUPO
                    AAPVR, CSN E PREFEITURA DE VOLTA REDONDA</span class="fs-5 fw-bold mt-2 mb-3 text-center text-md-start"
                    style="color: #ff7700">
                <p class="text-start mx-3" class="#000">Com apoio da CSN, Prefeitura Municipal de Volta Redonda, Conselho
                    Municipal de Defesa dos Direitos da Pessoa Idosa e Fundo Municipal dos Direitos do Idoso, o programa
                    e-idoso, de inclusão digital para pessoas da terceira idade, organizado pela nossa Associação, é sucesso
                    total. Foram finalizadas 17 turmas, com 10 alunos no máximo, para melhor aproveitamento. O curso de
                    inclusão digital tem duração de 10 horas e todos recebem certificados ao final.
                    <br><br>
                    O objetivo do Programa é promover a inclusão digital do idoso, aumentando a possibilidade de inserção no
                    mercado de trabalho através das ferramentas de apoio administrativo (Pacote Office), a inserção também
                    no mundo do entretenimento através das plataformas digitais, como por exemplo, o YouTube.
                    <br><br>
                    Além de aprender a navegar e usar os programas disponíveis, os alunos fazem amizades no curso, com um
                    ajudando o outro, conforme depoimento da aluna Rogéria da Conceição Pereira Tavares: “Fiquei muito
                    satisfeita e realizando um sonho. Sempre tive vergonha de entrar em turmas de jovens e, por isso, não
                    consegui aprender até hoje. Agora, tenho certeza que estou no lugar certo.”
                    <br><br>
                    Para o presidente da nossa Associação, Ubirajara Vaz, este benefício não seria possível sem a ajuda dos
                    parceiros: “O apoio da CSN, da Prefeitura Municipal, do Fundo Municipal dos Direitos do Idoso e do
                    Conselho Municipal de Defesa dos Direitos da Pessoa Idosa é fundamental para este projeto e quem ganha
                    são os idosos que participam e passam a se sentir integrados no mundo digital”, afirmou Ubirajara Vaz.
                </p>
                <button class="btn fw-bold text-uppercase w-100 mt-4 rounded-pill p-2"
                    style="background: #ff7700; color: #fff"><i class="fa-solid fa-file-lines px-1"></i>acesse a plataforma
                    e conheça um pouco mais do
                    projeto</button>
            </div>
        </div>
    </section>
    <article class="mt-4 w-100 mb-3">
        <div class="container rounded p-3 hover">
            <img src="{{ asset('assets/img/apoiadoresOffice.svg') }}" class="w-100" alt="">
        </div>
    </article>

    <section>
        <div class="container">
            <div class="d-flex justify-content-center flex-column text-center">
                <h1 class="fs-3 fw-bold mt-5 mb-5 text-center" style="color: #0389b7">CLIPPING PROJETO VIVA</h1>
                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/drive/folders/1yq2gSfrvPKeZwuJns03zieG7w7Dn4yT9"
                       ><img class="w-100 img-fluid" src="{{ asset('assets/img/OfficeImagem1.svg') }}"
                       style="max-width: 500px"></a>
                </div>

                <button class="btn fw-bold text-uppercase w-100 mt-4 rounded-pill p-2"
                    style="background: #ff7700; color: #fff"><i class="fa-solid fa-file-lines px-1"></i>acesse a plataforma
                    e conheça um pouco mais do
                    projeto</button>
            </div>
            <div style="min-height: 50vh">
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <h1 class="fs-3 fw-bold mt-5 mb-3 text-center" style="color: #0389b7">CONHEÇA O PACOTE OFFICE</h1>
                    <div class="d-flex justify-content-center align-item-center flex-wrap" style="gap: 10px">
                        <div><iframe src="https://www.youtube.com/embed/YIUyq47lguA?si=notPeo3VXxBkcNc5"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div><iframe src="https://www.youtube.com/embed/oQ8Q4z9GdOk?si=mLDfjg720KXeFkBL"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div><iframe src="https://www.youtube.com/embed/BS9ToUWy648?si=cux5YJDjECfjJvS8"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div>
            <h2 class="fs-3 fw-bold mt-5 mb-3 text-center" style="color: #0389b7">HABILITADOS NA ERA DIGITAL</h2>
            <p class="fs-5 fw-light  mt-5 mb-3 text-center" style="color: #ff7700">Aprendizado nas principais ferramentas do
                Microsoft Office</p>
            <img src="{{ asset('assets/img/LogoOffice.svg') }}" class="w-100 mb-5 mt-2 hover" alt="">
        </div>

    </section>

    <section style="height: auto">
     
            <h1 class="fs-3 fw-bold mt-5 mb-3 text-center" style="color: #0389b7">GALERIA DE FOTOS</h1>
            @if ($fotos)
                <x-galeria :fotos="$fotos" />
            @else
                <div class="card">
                    <h3>Nenhuma Foto encontrada</h3>
                </div>
            @endif
    
    </section>

@endsection
