@extends('paginas.layout-pages.default')

@section('titulo', 'Serviços')


@section('content')
    <div class="banner-home"
        style="background-image: url('/assets/img/ServicosBannerFundo.svg'); min-height: 90vh; position: relative;">
        <div class="container d-flex justify-content-center  justify-content-md-start" style="margin: 0 auto; ">
            <div class="d-flex " style="align-items: center; min-height: 100vh; z-index:1; margin-left: 40px">
                <div>
                    <div class="pb-3">
                        <img src="{{ asset('assets/img/LogoAppvrBranca.svg') }}" alt="" width="120">
                    </div>
                    <div class="pb-3">
                        <h2 class="p-1 fw-bold"
                            style="font-size: 3.3rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                            HÁ MAIS DE</h2>
                    </div>
                    <div class="pb-3 ">
                        <h1 class="p-1 fw-bold px-3"
                            style="font-size: 5rem; color: #fff; background:var(--cor-secundary); display:inline-block;">50
                            ANOS
                        </h1>
                    </div>
                    <div class="pb-3">
                        <h2 class="p-1 fw-bold"
                            style="font-size: 3.3rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                            FAZENDO
                            MAIS POR VOCÊ</h2>
                    </div>
                </div>
            </div>
            <div>
                <img class="img-home" src="{{ asset('assets/img/ServicosBannerPessoa.svg') }}" alt=""
                    style="position: absolute; bottom: 0; right: 80px; height: 90vh; margin-right: 40px">
            </div>
        </div>
    </div>

    <div>
        <div style="background: #fff; min-height: 30vh">
            <div class="nav-home container d-flex  justify-content-center "
                style="gap:30px; position: absolute;  bottom: -250px;right: 100px; margin: 0 auto;">
                <a class="link-home" href="#voltaredonda" style="text-decoration: none !important; ">
                    <div class=" my-3 d-flex align-items-center justify-content-center"
                        style="background: linear-gradient(135deg, #49c1e5 0%, #0480a6 80%); border-radius: 12px;  height: 200px; box-shadow: 10px 10px 10px 4px rgba(0, 0, 0, 0.3); width: 340px">
                        <div class="d-flex flex-column justify-content-center text-center p-4 align-items-center"
                            style="">
                            <h4 class="fs-3 " style="color: #fff">CONSULTAS <br>MÉDICAS</h4>
                        </div>
                    </div>
                </a>
                <a class="link-home" href="#esporte" style="text-decoration: none !important; ">
                    <div class=" my-3 d-flex align-items-center justify-content-center"
                        style="background: linear-gradient(135deg, #49c1e5 0%, #0480a6 80%); border-radius: 12px;  height: 200px; box-shadow: 10px 10px 10px 4px rgba(0, 0, 0, 0.3); width: 340px">
                        <div class="d-flex flex-column justify-content-center text-center p-4 align-items-center"
                            style="">

                            <h4 class="fs-3 " style="color: #fff">ESPORTE E <br> LAZER</h4>
                        </div>
                    </div>
                </a>
                <a class="link-home" href="#assistencia" style="text-decoration: none !important; ">
                    <div class=" my-3 d-flex align-items-center justify-content-center"
                        style="background: linear-gradient(135deg, #49c1e5 0%, #0480a6 80%); border-radius: 12px;  height: 200px; box-shadow: 10px 10px 10px 4px rgba(0, 0, 0, 0.3); width: 340px">
                        <div class="d-flex justify-content-center flex-column  text-center p-4 align-items-center"
                            style="">

                            <h4 class="fs-3 " style="color: #fff">ASSISTÊNCIA <br> SOCIAL E JURÍDICA</h4>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <section>
        <div class="titulo container px-2 py-1 flex-column text-start mb-3" style="position: relative; ">
            <div style="text-transform: uppercase; max-width: 400px">
                <h1 class=" fw-bold px-3 d-flex justify-content-center text-center "
                    style="font-size: 2rem; color: #fff; background:var(--cor-secundary);max-width: 380px; z-index: 1">
                    consultas médicas
                </h1>
            </div>
        </div>
    </section>

    <article>
        <div id="voltaredonda"
            class="container d-flex justify-content-center justify-content-md-start align-items-center text-start pt-3 flex-wrap">
            <img src="{{ asset('assets/img/CentroMedico.svg') }}" alt="" width="180">
            <div class="px-3">
                <h2 style="font-family:'Bebas Neue', sans-serif;text-transform: uppercase; color:var(--cor-primary);">centro
                    médico em volta redonda</h2>
                <p style=" color:var(--cor-primary);">dias de agendamento em cada especialidade</p>
            </div>
        </div>

    </article>
    <section>
        <div class="container my-3 titulo-box mt-5"
            style="border: 3px solid  #084b62; border-radius: 12px; position: relative; ">
            <div class="row">
                <h1 class="text-center fs-3"
                    style="background: #fff; color: #084b62; position: absolute; top:-20px;right: 40%; width: 250px;">
                    SERVIÇOS</h1>
                <div class="col-12  col-lg-4">
                    <ul class="text-center fs-5 p-2 mt-4">
                        <li style="color: #49c1e5" class="py-2">Angiologia</li>
                        <li style="color: #49c1e5" class="py-2"> Cardiologia</li>
                        <li style="color: #49c1e5" class="py-2">Cirugia geral</li>
                        <li style="color: #49c1e5" class="py-2"> Clínica Médica</li>
                        <li style="color: #49c1e5" class="py-2"> Dermatologia</li>
                        <li style="color: #49c1e5" class="py-2">Endocrinologia</li>
                        <li style="color: #49c1e5" class="py-2">Gastroenterologia</li>
                    </ul>
                </div>
                <div class="col-12  col-lg-4">
                    <ul class="text-center fs-5 p-2  mt-4">
                        <li style="color: #49c1e5" class="py-2">Geriatria</li>
                        <li style="color: #49c1e5" class="py-2"> Ginecologia</li>
                        <li style="color: #49c1e5" class="py-2"> Hematologia</li>
                        <li style="color: #49c1e5" class="py-2"> Mastologia</li>
                        <li style="color: #49c1e5" class="py-2"> Dermatologia</li>
                        <li style="color: #49c1e5" class="py-2">Neurologia</li>
                        <li style="color: #49c1e5" class="py-2">Nefrologia</li>
                    </ul>
                </div>
                <div class="col-12  col-lg-4">
                    <ul class="text-center fs-5 p-2  mt-4">
                        <li style="color: #49c1e5" class="py-2">Nutrição</li>
                        <li style="color: #49c1e5" class="py-2"> Ortopedia</li>
                        <li style="color: #49c1e5" class="py-2">Proctologia</li>
                        <li style="color: #49c1e5" class="py-2"> Pediatria</li>
                        <li style="color: #49c1e5" class="py-2"> Reumatologia</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <article>
        <div id="pirai"
            class="container d-flex justify-content-center justify-content-md-start align-items-center text-start pt-3 mt-5 flex-wrap">
            <img src="{{ asset('assets/img/PostoAvançado.svg') }}" alt="" width="180">
            <div class="px-3">
                <h2 style="font-family:'Bebas Neue', sans-serif;text-transform: uppercase; color:var(--cor-primary);">posto
                    avançado em barra do piraí</h2>
                <p style=" color:var(--cor-primary);">agendamento todos os dias</p>
            </div>
        </div>
    </article>
    <section>
        <div class="container my-3 titulo-box"
            style="border: 3px solid  #084b62; border-radius: 12px; position: relative; ">
            <div class="row">
                <h1 class="text-center fs-3"
                    style="background: #fff; color: #084b62; position: absolute; top:-20px;right: 40%; width: 250px;">
                    SERVIÇOS</h1>
                <div class="col-lg-4">
                    <ul class="text-center fs-5 p-2 mt-4">
                        <li style="color: #49c1e5" class="py-2">Angiologia</li>
                        <li style="color: #49c1e5" class="py-2"> Cardiologia</li>
                        <li style="color: #49c1e5" class="py-2">Cirugia geral</li>
                        <li style="color: #49c1e5" class="py-2"> Clínica Médica</li>
                        <li style="color: #49c1e5" class="py-2"> Dermatologia</li>
                        <li style="color: #49c1e5" class="py-2">Endocrinologia</li>
                        <li style="color: #49c1e5" class="py-2">Gastroenterologia</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="text-center fs-5 p-2  mt-4">
                        <li style="color: #49c1e5" class="py-2">Angiologia</li>
                        <li style="color: #49c1e5" class="py-2"> Cardiologia</li>
                        <li style="color: #49c1e5" class="py-2">Cirugia geral</li>
                        <li style="color: #49c1e5" class="py-2"> Clínica Médica</li>
                        <li style="color: #49c1e5" class="py-2"> Dermatologia</li>
                        <li style="color: #49c1e5" class="py-2">Endocrinologia</li>
                        <li style="color: #49c1e5" class="py-2">Gastroenterologia</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="text-center fs-5 p-2  mt-4">
                        <li style="color: #49c1e5" class="py-2">Angiologia</li>
                        <li style="color: #49c1e5" class="py-2"> Cardiologia</li>
                        <li style="color: #49c1e5" class="py-2">Cirugia geral</li>
                        <li style="color: #49c1e5" class="py-2"> Clínica Médica</li>
                        <li style="color: #49c1e5" class="py-2"> Dermatologia</li>
                        <li style="color: #49c1e5" class="py-2">Endocrinologia</li>
                        <li style="color: #49c1e5" class="py-2">Gastroenterologia</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <article>
        <div id="pinheiral"
            class="container d-flex justify-content-center justify-content-md-start align-items-center text-center text-md-start pt-3 mt-5 flex-wrap">
            <img src="{{ asset('assets/img/PostoAvançado2.svg') }}" alt="" width="180">
            <div class="px-3">
                <h2 style="font-family:'Bebas Neue', sans-serif;text-transform: uppercase; color:var(--cor-primary);">posto
                    avançado em pinheiral</h2>
                <p style=" color:var(--cor-primary);">agendamento todos os dias</p>
            </div>
        </div>
    </article>
    <section>
        <div class="container my-3 titulo-box"
            style="border: 3px solid  #084b62; border-radius: 12px; position: relative; ">
            <div class="row">
                <h1 class="text-center fs-3"
                    style="background: #fff; color: #084b62; position: absolute; top:-20px; right: 40%; width: 250px;">
                    SERVIÇOS</h1>
                <div class="col-lg-6">
                    <ul class="text-center fs-5 p-2 mt-4">
                        <li style="color: #49c1e5" class="py-2">Cardiologia</li>
                        <li style="color: #49c1e5" class="py-2"> Clínica Médica</li>
                        <li style="color: #49c1e5" class="py-2">Geriatria</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="text-center fs-5 p-2  mt-4">
                        <li style="color: #49c1e5" class="py-2">Gastroenterologia</li>
                        <li style="color: #49c1e5" class="py-2"> Neurologia</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div id="esporte" class="titulo container  px-2 py-1  text-start mb-3" style="position: relative; ">
            <div style="text-transform: uppercase; max-width: 400px">
                <h1 class=" fw-bold px-3 d-flex justify-content-center text-center "
                    style="font-size: 2rem; color: #fff; background:var(--cor-secundary);max-width: 380px; z-index: 1">
                    esporte e lazer
                </h1>
            </div>
        </div>


        <section class="mt-5">
            <div class="card-servicos container my-3 titulo-box"
                style="border: 3px solid  #084b62; border-radius: 12px; position: relative; ">
                <div class="row d-flex align-items-center flex-wrap">
                    <h1 class="text-center fs-4"
                        style="background: #fff; color: #084b62; position: absolute; top:-20px; right: 40%; width: 250px;">
                        SEDE CAMPESTRE</h1>
                    <div class="col-lg-6 text-center">
                        <img class="my-5" src="{{ asset('assets/img/SedeCampeste.svg') }}" alt="">
                    </div>
                    <div class="col-lg-6 my-4">
                        <p class="fs-5" style="color: #000">A Sede Campestre conta com uma enorme área verde para
                            atividades ao ar livre, contato com
                            animais, além de, toda a natureza que o cerca, para te proporcionar lazer, bem-estar e qualidade
                            de vida, dispondo, também, de:</p>
                        <ul class="p-0" style="color: #49c1e5">
                            <li>-PESQUE PAGUE</li>
                            <li>-PARQUE INFANTIL</li>
                            <li>-PISCINA</li>
                            <li>-RESTAURANTE</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>


        <section class="mt-5">
            <div class="card-servicos container my-3 titulo-box"
                style="border: 3px solid  #084b62; border-radius: 12px; position: relative; ">
                <div class="row d-flex align-items-center flex-wrap">
                    <h1 class="text-center fs-4"
                        style="background: #fff; color: #084b62; position: absolute; top:-20px; right: 40%; width: 250px;">
                        atividades físicas</h1>
                    <div class="col-lg-6 text-center">
                        <img class="my-5" src="{{ asset('assets/img/AtividadeFisica.svg') }}" alt="">
                    </div>
                    <div class="col-lg-6 my-4">
                        <p class="fs-5" style="color: #000">O nosso Centro de Prevenção à Saúde do Idoso conta com diversas atividades físicas que melhoram a sua qualidade de vida e o envelhecimento saudável, proporcionando bem-estar, interação social e saúde. Entre as modalidades de exercícios físicos que atuam em nosso espaço, contamos com:</p>
                        <ul class="p-0" style="color: #49c1e5">
                            <li>- MUSCULAÇÃO (ACADEMIA)</li>
                            <li>- GINÁSTICA</li>
                            <li>- HIDROGINÁSTICA</li>
                            <li>- HIDROTERAPIA</li>
                            <li>- YOGA</li>
                            <li>- PILATES</li>
                        </ul>
                    </div>

                    

                </div>
            </div>
        </section>    
        <section class="mt-5">
            <div class="card-servicos container my-3 titulo-box"
                style="border: 3px solid  #084b62; border-radius: 12px; position: relative; ">
                <div class="row d-flex align-items-center flex-wrap">
                    <h1 class="text-center fs-4"
                        style="background: #fff; color: #084b62; position: absolute; top:-20px; right: 40%; width: 250px;">
                        esporte cultara e turismo</h1>
                    <div class="col-lg-6 text-center">
                        <img class="my-5" src="{{ asset('assets/img/EsporteCultura.svg') }}" alt="">
                    </div>
                    <div class="col-lg-6 my-4">
                        <p class="fs-5" style="color: #000">A AAPVR também conta com diversas atividades complementares de recreação, como:</p>
                        <ul class="p-0" style="color: #49c1e5">
                            <li>- FUTEBOL ARTE</li>
                            <li>- BAILES</li>
                            <li>- TARDE CULTURAL</li>
                            <li>- SHOW DE PRÊMIOS</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

    </section>

    <article>
        <div id="assistencia" class="titulo container  px-2 py-1  text-start mb-3" style="position: relative; ">
            <div style="text-transform: uppercase; max-width: 400px">
                <h1 class=" fw-bold px-3 d-flex justify-content-center text-center align-items-center"
                    style="font-size:1.3rem; color: #fff; background:var(--cor-secundary); max-width: 380px; z-index: 1; height: 39px">
                    ASSISTÊNCIA SOCIAL E JURÍDICA
                </h1>
            </div>
        </div>
        <section class="mt-5">
            <div class="card-servicos container my-3 titulo-box"
                style="border: 3px solid  #084b62; border-radius: 12px; position: relative; ">
                <div class="row d-flex align-items-center flex-wrap">
                    <h1 class="text-center fs-4"
                        style="background: #fff; color: #084b62; position: absolute; top:-20px; right: 40%; width: 250px;">
                        Assistência social</h1>
                    <div class="col-lg-6 text-center">
                        <img class="my-5" src="{{ asset('assets/img/Assitencia.svg') }}" alt="">
                    </div>
                    <div class="col-lg-6 my-4">
                        <p class="fs-5" style="color: #000">Serviços, projetos sociais que promovem a interação e
                            fortalecem vínculos.</p>
                        <ul class="p-0" style="color: #49c1e5">
                            <li>- ARTESANATO</li>
                            <li>- AULAS DE TECLADO</li>
                            <li>- EDUCAÇÃO FINANCEIRA</li>
                            <li>- CORAL</li>
                            <li>- PROGRAMA DE INCLUSÃO DIGITAL</li>
                            <li>- TEATRO</li>
                            <li>- GRUPO DE CONVIVÊNCIA</li>
                            <li>- GRUPO DE AÇÃO VOLUNTÁRIA</li>
                            <li>- SERVIÇO DE PROTEÇÃO ESPECIAL (ILPI)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <div class="card-servicos container my-3 titulo-box"
                style="border: 3px solid  #084b62; border-radius: 12px; position: relative; ">
                <div class="row d-flex align-items-center flex-wrap">
                    <h1 class="text-center fs-4"
                        style="background: #fff; color: #084b62; position: absolute; top:-20px; right: 40%; width: 250px;">
                        Assistência jurídica</h1>
                    <div class="col-lg-6 text-center">
                        <img class="my-5" src="{{ asset('assets/img/Assitencia.svg') }}" alt="">
                    </div>
                    <div class="col-lg-6 my-4">
                        <p class="fs-5" style="color: #000"> Oferecemos também suporte jurídico e previdenciário em
                            diversas áreas do Direito, entre elas:</p>
                        <ul class="p-0" style="color: #49c1e5">
                            <li>- TRIBUTOS E IMPOSTOS</li>
                            <li>- PREVIDÊNCIA SOCIAL</li>
                            <li>- APOSENTADORIA</li>
                            <li>- INSS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </article>
@endsection
