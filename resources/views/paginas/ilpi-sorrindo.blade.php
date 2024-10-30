@extends('paginas.layout-pages.default')

@section('titulo', 'Projetos')


@section('content')
    <section id="projetos" class="d-flex align-items-center justify-content-center justify-content-md-start"
        style="background: url({{ asset('assets/img/ProjetosFundo.svg') }}) no-repeat; min-height: 100vh">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-start" style="gap:20px;">
            <div class="d-flex align-items-center ">
                <div class="d-flex flex-column justify-content-center justify-content-md-start" style="position: relative;">
                    <img src="{{ asset('assets/img/Banner-ilpi.svg') }}" alt="" width="600">

                    <div class="titulo-banner" style="bottom: 0;left: 10%;">
                        <h3 class=" fw-bold px-3 "
                            style="position: absolute !important; right: -50%; top:70%; font-size: 5rem; color: #fff; background:var(--cor-secundary); text-transform: uppercase ">
                            para idosos</h3>
                    </div>
                    <div class="titulo-banner" style="bottom: -80px;left: 10%;">
                        <h3 class="fw-bold px-2 "
                            style="position: absolute !important;  right: 0%; top:60%;font-size: 2rem; color: #fff; background: var(--cor-primary); display:inline-block;">
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
    <article class="mt-4 w-100 mb-5">
        <div class="container rounded p-3 hover" style="background: linear-gradient(to right, #0389b7 50%, #2eb8d2);">
            <img src="{{ asset('assets/img/logos_end.svg') }}" class="w-100" alt="">
        </div>

    </article>

    <section>
        <div class="container">
            <div>
                <h1 class="fs-3 fw-bold mt-5 mb-3" style="color: #0389b7">CLIPPING PROJETO VIVA</h1>
                <img src="" alt="">
                <button class="btn fw-bold text-uppercase w-100 mt-4 rounded-pill p-2"
                    style="background: #ff7700; color: #fff"><i class="fa-solid fa-file-lines px-1"></i>acesse a plataforma
                    e conheça um pouco mais do
                    projeto</button>
            </div>
            <div>
                <h1 class="fs-3 fw-bold mt-5 mb-3" style="color: #0389b7">CONHEÇA O PACOTE OFFICE</h1>
                <div class="d-flex justify-content-center align-item-center flex-wrap" style="gap: 30px;">
                    <div><iframe class="w-100" src="https://www.youtube.com/watch?v=YIUyq47lguA" frameborder="0"></iframe>
                    </div>
                    <div><iframe class="w-100" src="https://www.youtube.com/watch?v=oQ8Q4z9GdOk" frameborder="0"></iframe>
                    </div>
                    <div><iframe class="w-100"src="https://www.youtube.com/watch?v=BS9ToUWy648" frameborder="0"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h1  class="fs-3 fw-bold my-3 mb-3 text-center" style="color: #0389b7">GALERIA DE FOTOS</h1>
        
        </div>
    </section>

@endsection
