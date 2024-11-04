@extends('paginas.layout-pages.default')

@section('titulo', 'Projetos')


@section('content')
    <section id="projetos" class="d-flex align-items-center justify-content-center justify-content-md-start"
        style="background: url({{ asset('assets/img/ProjetosFundo.svg') }}) no-repeat; min-height: 100vh">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-start" style="gap:20px;">
            <div class="d-flex align-items-center ">
                <div class="d-flex flex-column justify-content-center justify-content-md-start" style="position: relative;">
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
            <a href="https://issuu.com/docsgrupoaap" target="_blank"
                class="btn fw-bold text-uppercase w-100 mt-5 rounded-pill p-2" style="background: #ff7700; color: #fff"><i
                    class="fa-solid fa-file-lines px-1"></i>acesse a plataforma e
                conheça um pouco mais do
                projeto</a>
        </div>
    </article>

    <article>
        <div class=" container d-flex justify-content-center align-items-start my-4 flex-wrap" style="gap: 30px;">
            <div class="row d-flex align-items-start">
                <div class=" col-12 col-md-6 d-flex justify-content-center align-items-center flex-column ">
                    <h2 class="fs-3 fw-bold mt-5  text-uppercase" style="color: #0389b7">projeto viva na mídia</h2>
                    <p class="text-center">Acompanhe o projeto viva atrávés das mídias parceiras. Escolha o veículo e clique
                        na imagem para
                        conferir
                        a matéria na integra</p>
                    <img src="{{ asset('assets/img/VivaMidia.svg') }}" alt="" class="w-100 h-100">
                </div>

                <div class=" col-12 col-md-6 d-flex justify-content-center align-items-center text-center flex-column ">
                    <h2 class="fs-3 fw-bold mt-5 text-uppercase text-center" style="color: #0389b7">spots de rádio</h2>
                    <p class="text-center">Acompanhe o projeto viva atrávés das rádios parceiras do Grupo AAPVR</p>
                    <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay"
                        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1597786344&color=%232cb7cf&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                    <div
                        style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;">
                        <a href="https://soundcloud.com/grupoaap" title="Comunicação Marketing Grupo AAP" target="_blank"
                            style="color: #cccccc; text-decoration: none;">Comunicação Marketing Grupo AAP</a> · <a
                            href="https://soundcloud.com/grupoaap/spot-projeto-viva-210823" title="SPOT PROJETO VIVA 210823"
                            target="_blank" style="color: #cccccc; text-decoration: none;">SPOT PROJETO VIVA 210823</a>
                    </div>
                    <h2 class="fs-3 fw-bold mt-5 " style="color: #0389b7">CLIPPING PROJETO VIVA</h2>
                    <p>Veja o clipping completo do projeto VIVA ao longo do ano de 2022 e 2023.</p>
                    <button class="btn fw-bold text-uppercase w-100 mt-3 rounded-pill p-2"
                        style="background: #ff7700; color: #fff; font-size: 1rem"><i
                            class="fa-solid fa-file-lines px-1"></i>confira o clipping completo de
                        todas as mídias</button>
                </div>
            </div>
        </div>

    </article>

    <section class="my-5" style="height: 70vh">
        <div class="container w-100 h-100">
            <iframe class="w-100 h-100" src="https://www.youtube.com/embed/ic2lD0ZjjFo?si=rmgsneff9I2zhikx"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>

    <section style="min-height: 80vh">
        <div class="container">
            <h2 class="fs-3 fw-bold mt-5 text-uppercase text-center mb-5" style="color: #0389b7">GALERIA DE ATIVIDADES</h2>

            <div class="row my-3 d-flex align-items-center">
                <div class="col-12 col-md-6 text-center" style="max-height: 60vh">
                    <h4 class="fw-bold text-uppercase text-center" style="color: #ff7700">
                        ACADEMIA VIVA
                    </h4>
                    <p>Quem foi que disse que musculação é coisa de jovem? A nossa Academia prova o contrário. A maioria dos
                        inscritos é de pessoas idosas, que, orientados pelo professor, ganham mais saúde e vitalidade.d </p>
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/ueWul545KTE?si=sFHpNjkJbYga7bA2" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-start align-items-center text-start flex-wrap"
                    style="gap:20px">
                    <img src="{{ asset('assets/img/viva1.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/viva1.jpg') }}')" style="object-fit: cover"
                        alt="" class="hover" width="120" height="120">
                    <img src="{{ asset('assets/img/viva2.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/viva2.jpg') }}')" style="object-fit: cover"
                        alt="" class="hover" width="120" height="120">
                    <img src="{{ asset('assets/img/viva3.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/viva3.jpg') }}')" style="object-fit: cover"
                        alt="" class="hover" width="120" height="120">
                    <img src="{{ asset('assets/img/viva4.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/viva4.jpg') }}')" style="object-fit: cover"
                        alt="" class="hover" width="120" height="120">
                    <img src="{{ asset('assets/img/viva5.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/viva5.jpg') }}')" style="object-fit: cover"
                        alt="" class="hover" width="120" height="120">
                    <img src="{{ asset('assets/img/viva6.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/viva6.jpg') }}')" style="object-fit: cover"
                        alt="" class="hover" width="120" height="120">
                    <img src="{{ asset('assets/img/viva7.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/viva7.jpg') }}')" style="object-fit: cover"
                        alt="" class="hover" width="120" height="120">
                    <img src="{{ asset('assets/img/viva8.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/viva8.jpg') }}')" style="object-fit: cover"
                        alt="" class="hover" width="120" height="120">
                    <img src="{{ asset('assets/img/viva9.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/viva9.jpg') }}')" style="object-fit: cover"
                        alt="" class="hover" width="120" height="120">
                    <img src="{{ asset('assets/img/viva10.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/viva10.jpg') }}')" style="object-fit: cover"
                        alt="" class="hover" width="120" height="120">
                </div>
            </div>

            <div class="row my-3 d-flex align-items-start mt-5">
                <div class="col-12 col-md-6 text-center" style="max-height: 60vh">
                    <h4 class="fw-bold text-uppercase text-center" style="color: #ff7700">
                        AULA DE YOGA
                    </h4>
                    <p>Surgido na Índia há mais de 5.000 anos, o Yoga também é muito procurado na AAPVR, como uma filosofia
                        de vida e trabalho da mente e do corpo simultaneamente. É praticado, também com orientação
                        profissional, em Volta Redonda e Barra do Piraí.</p>
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/wGifHmSeT70?si=uspFhf6dbbgafYCT" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-start align-items-center text-start flex-wrap"
                    style="gap:20px">
                    <img src="{{ asset('assets/img/yoga1.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga1.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/yoga2.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga2.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/yoga3.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga3.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/yoga4.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga4.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/yoga5.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga5.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/yoga6.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga6.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/yoga7.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga7.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/yoga8.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga8.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/yoga9.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga9.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/yoga11.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga11.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/yoga12.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga12.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/yoga13.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga13.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/yoga14.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga14.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/yoga15.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga15.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/yoga16.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/yoga16.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                </div>
            </div>
            <div class="row my-3 d-flex align-items-start mt-5">
                <div class="col-12 col-md-6 text-center" style="max-height: 60vh">
                    <h4 class="fw-bold text-uppercase text-center" style="color: #ff7700">
                        DANÇA DE SALÃO
                    </h4>
                    <p>Quase todo mundo gosta de dançar, mas muitos só têm coragem de praticar depois participar das aulas
                        de dança de salão. E os alunos podem colocar o que aprendem em prática nos bailes da própria AAPVR.
                    </p>
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/BzOJLoa-KQY?si=3M54ealEJ9_fefJb" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-start align-items-center text-start flex-wrap"
                    style="gap:20px">
                    <img src="{{ asset('assets/img/salao1.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/salao1.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/salao2.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/salao2.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/salao3.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/salao3.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/salao4.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/salao4.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/salao5.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/salao5.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/salao6.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/salao6.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/salao7.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/salao7.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/salao8.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/salao8.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/salao9.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/salao9.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/salao10.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/salao10.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/salao11.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/salao11.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/salao12.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/salao12.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                </div>
            </div>
            <div class="row my-3 d-flex align-items-start mt-5">
                <div class="col-12 col-md-6 text-center" style="max-height: 60vh">
                    <h4 class="fw-bold text-uppercase text-center" style="color: #ff7700">
                        CAMINHADA
                    </h4>
                    <p>Um dos projetos mais procurados da AAPVR, o Caminharte veio para ajudar na manutenção e até
                        recuperação da saúde das pessoas idosas que procuram a entidade. É realizado, com orientação de
                        profissionais, em Volta Redonda e Barra do Piraí.
                    </p>
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/H8d_VGzUwj4?si=zJcpJimLcAzNA1RD" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-start align-items-center text-start flex-wrap"
                    style="gap:20px">
                    <img src="{{ asset('assets/img/corrida1.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/corrida1.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/corrida2.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/corrida2.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/corrida3.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/corrida3.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/corrida4.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/corrida4.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                </div>
            </div>

            <div class="row my-3 d-flex align-items-start mt-5">
                <div class="col-12 col-md-6 text-center" style="max-height: 60vh">
                    <h4 class="fw-bold text-uppercase text-center" style="color: #ff7700">
                        FUTEBOL ARTE

                    </h4>
                    <p>Este projeto mostra que não existe idade para a prática do esporte: tanto em Volta Redonda, quanto em
                        Barra do Piraí, participam idosos dos 60 aos 83 anos. Todos afirmam que tiveram sensível melhora na
                        saúde depois que começaram a participar do Futebol Arte.
                    </p>
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/PP9xgY-Z5Pg?si=uge8hTCg0EleTjI4" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-start align-items-center text-start flex-wrap"
                    style="gap:20px">
                    <img src="{{ asset('assets/img/futebol1.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/futebol1.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/futebol2.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/futebol2.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/futebol3.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/futebol3.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/futebol4.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/futebol4.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/futebol5.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/futebol5.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/futebol6.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/futebol6.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/futebol7.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/futebol7.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/futebol8.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/futebol8.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/futebol9.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/futebol9.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/futebol10.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/futebol10.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">

                </div>
            </div>

            <div class="row my-3 d-flex align-items-start mt-5">
                <div class="col-12 col-md-6 text-center" style="max-height: 60vh">
                    <h4 class="fw-bold text-uppercase text-center" style="color: #ff7700">
                        GINÁSTICA
                    </h4>
                    <p>Manter o corpo em movimento é uma das melhores formas de viver a “melhor idade” e a gisnástica é uma
                        ótima opção para quem deseja ter uma rotina de exercícios. Para os idosos, a prática de exercícios
                        regulares auxilia no fortalecimento do sistema cardiovascular, na prevenção do aparecimento de
                        doenças crônicas e também a manter a mente saudável, por exemplo. São inúmeros benefícios!
                    </p>
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/uXjg9CYXIbs?si=PkKVaFrqm5iEN_2p" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-start align-items-center text-start flex-wrap"
                    style="gap:20px">
                    <img src="{{ asset('assets/img/ginastica1.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/ginastica1.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/ginastica2.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/ginastica2.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/ginastica3.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/ginastica3.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/ginastica4.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/ginastica4.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/ginastica5.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/ginastica5.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/ginastica6.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/ginastica6.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/ginastica7.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/ginastica7.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/ginastica8.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/ginastica8.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/ginastica9.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/ginastica9.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/ginastica10.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/ginastica10.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">

                </div>
            </div>
            <div class="row my-3 d-flex align-items-start mt-5">
                <div class="col-12 col-md-6 text-center mt-3" style="max-height: 60vh">
                    <h4 class="fw-bold text-uppercase text-center" style="color: #ff7700">
                        PILATES
                    </h4>
                    <p>O Pilates é uma prática reconhecida por seus benéficios ao corpo, também, como uma forma de
                        reabilitação. Fonte efetiva de bem-estar, também é oferecida as pessoas idosas dos municípios de
                        Volta Redonda e Barra do Piraí.
                    </p>
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/CYTGWf6Fn_Q?si=Gy1ijdpTM1K09aJD" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-start align-items-center text-start flex-wrap"
                    style="gap:20px">
                    <img src="{{ asset('assets/img/pilates1.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/pilates1.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/pilates2.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/pilates2.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/pilates3.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/pilates3.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/pilates4.jpg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/pilates4.jpg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">


                </div>
            </div>
            <div class="row my-3 d-flex align-items-start mt-5">
                <div class="col-12 col-md-6 text-center" style="max-height: 60vh">
                    <h4 class="fw-bold text-uppercase text-center" style="color: #ff7700">
                        TAI CHI CHUAN
                    </h4>
                    <p>O Tai Chi Chuan é uma prática considerada de arte marcial e reconhecida, também, como uma forma de
                        meditação em movimento. Fonte efetiva de energia, também é oferecida as pessoas idosas dos
                        municípios de Volta Redonda e Barra do Piraí.
                    </p>
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/yAdySNdkw0g?si=DSrlirpz0eVyCgVB" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-start align-items-center text-start flex-wrap"
                    style="gap:20px">
                    <img src="{{ asset('assets/img/tai1.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/tai1.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/tai2.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/tai2.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/tai3.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/tai3.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/tai4.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/tai4.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/tai5.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/tai5.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/tai6.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/tai6.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/tai7.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/tai7.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/tai8.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/tai8.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">
                    <img src="{{ asset('assets/img/tai9.jpeg') }}"
                        onclick="abrirGaleria('{{ asset('assets/img/tai9.jpeg') }}')" style="object-fit: cover"
                        alt="" width="120" height="120">


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
@endsection
