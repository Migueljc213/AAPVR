@extends('paginas.layout-pages.default')

@section('titulo', 'Agenda Médica')


@section('content')
    <div class="banner-home"
        style="background-image: url('/assets/img/AgendaBanner.svg'); min-height: 90vh; position: relative;">
        <div class="container d-flex justify-content-center  justify-content-md-start" style="margin: 0 auto; ">
            <div class="d-flex " style="align-items: center; min-height: 100vh; z-index:1; margin-left: 40px">
                <div>
                    <div class="pb-3">
                        <img src="{{ asset('assets/img/LogoAppvrAzul.svg') }}" alt="" width="120">
                    </div>
                    <div class="pb-3 ">
                        <h1 class="p-1 fw-bold px-3"
                            style="font-size: 5rem; color: #fff; background:var(--cor-secundary); display:inline-block;">
                            AGENDA MÉDICA
                        </h1>
                    </div>
                    <div class="pb-3">
                        <h2 class="p-1 fw-bold"
                            style="font-size: 3.3rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                            SAIBA QUANDO AGENDA SUA CONSULTA</h2>
                    </div>
                </div>
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
                            <h4 class="fs-3 " style="color: #fff">CENTREO MÉDICO EM <br>VOLTA REDONDA</h4>
                        </div>
                    </div>
                </a>
                <a class="link-home" href="#pirai" style="text-decoration: none !important; ">
                    <div class=" my-3 d-flex align-items-center justify-content-center"
                        style="background: linear-gradient(135deg, #49c1e5 0%, #0480a6 80%); border-radius: 12px;  height: 200px; box-shadow: 10px 10px 10px 4px rgba(0, 0, 0, 0.3); width: 340px">
                        <div class="d-flex flex-column justify-content-center text-center p-4 align-items-center"
                            style="">

                            <h4 class="fs-3 " style="color: #fff">POSTO AVANÇADO EM <br> BARRA DO PIRAÍ</h4>
                        </div>
                    </div>
                </a>
                <a class="link-home" href="#pinheiral" style="text-decoration: none !important; ">
                    <div class=" my-3 d-flex align-items-center justify-content-center"
                        style="background: linear-gradient(135deg, #49c1e5 0%, #0480a6 80%); border-radius: 12px;  height: 200px; box-shadow: 10px 10px 10px 4px rgba(0, 0, 0, 0.3); width: 340px">
                        <div class="d-flex justify-content-center flex-column  text-center p-4 align-items-center"
                            style="">

                            <h4 class="fs-3 " style="color: #fff">POSTO AVANÇADO EM <br> PINHEIRAL</h4>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <section>
        <div class="container px-2 py-1 d-flex justify-content-center align-items flex-column text-center mb-3"
            style="background: var(--cor-primary); border-radius: 12px;text-transform: uppercase">
            <h2 class="fw-bold fs-1 pt-2" style="color: #fff; font-family:'Bebas Neue', sans-serif;
 ">horário para marcação
                de consultas</h2>
            <p style="color: #fff  " class="fs-5">8H ÀS 14H DE SEGUNDA A SEXTA-FEIRA PELO TELEFONE: (24) 2102-1909 * OPÇÃO
                7</p>
        </div>
    </section>

    <article>
        <div id="voltaredonda" class="container d-flex justify-content-center justify-content-md-start align-items-center text-start pt-3 flex-wrap">
            <img src="{{ asset('assets/img/CentroMedico.svg') }}" alt="" width="180">
            <div class="px-3">
                <h2 style="font-family:'Bebas Neue', sans-serif;text-transform: uppercase; color:var(--cor-primary);">centro
                    médico em volta redonda</h2>
                <p style=" color:var(--cor-primary);">dias de agendamento em cada especialidade</p>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-around align-items-start">
                <div class="col-md-4 col-lg-2 mt-2 d-flex justify-content-center flex-column">
                    <h5 class="px-3 py-1 text-center" style="color: #fff; background: #49c1e5; display: inline-block">
                        SEGUNDA-FEIRA</h5>
                    <p class="text-center" style="color: #0480a6">NEFROLOGIA <br>
                        OFTALMOLOGIA</p>
                </div>
                <div class=" col-md-4 col-lg-2 mt-2 d-flex justify-content-center flex-column">
                    <h5 class="px-3 py-1 text-center" style="color: #fff; background: #49c1e5; display: inline-block">
                        TERÇA-FEIRA</h5>
                    <p class="text-center" style="color: #0480a6">GERIATRIA
                        MASTOLOGIA
                        ORTOPEDIA</p>
                </div>
                <div class="col-md-4 col-lg-2 mt-2 d-flex justify-content-center flex-column">
                    <h5 class="px-3 py-1 text-center" style="color: #fff; background: #49c1e5; display: inline-block">
                        QUARTA-FEIRA</h5>
                    <p class="text-center" style="color: #0480a6">ANGIOLOGIA
                        CARDIOLOGIA
                        UROLOGIA</p>
                </div>
                <div class="col-md-4 col-lg-2 mt-2 d-flex justify-content-center flex-column">
                    <h5 class="px-3 py-1 text-center" style="color: #fff; background: #49c1e5; display: inline-block">
                        QUINTA-FEIRA</h5>
                    <p class="text-center" style="color: #0480a6">GINECOLOGIA
                        DERMATOLOGIA
                        OTORRINOLARINGOLOGIA
                        PSIQUIATRIA</p>
                </div>
                <div class="col-md-4 col-lg-2 mt-2 d-flex justify-content-center flex-column">
                    <h5 class="px-3 py-1 text-center" style="color: #fff; background: #49c1e5; display: inline-block">
                        SEXTA-FEIRA</h5>
                    <p class="text-center" style="color: #0480a6">NEFROLOGIA
                        OFTALMOLOGIA</p>
                </div>

            </div>
        </div>
    </article>
    <section>
        <div  class="container my-3 servico-box mt-5" style="border: 3px solid  #084b62; border-radius: 12px; position: relative; ">
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
        <div id="pirai" class="container d-flex justify-content-center justify-content-md-start align-items-center text-start pt-3 mt-5 flex-wrap">
            <img src="{{ asset('assets/img/PostoAvançado.svg') }}" alt="" width="180">
            <div class="px-3">
                <h2 style="font-family:'Bebas Neue', sans-serif;text-transform: uppercase; color:var(--cor-primary);">posto
                    avançado em barra do piraí</h2>
                <p style=" color:var(--cor-primary);">agendamento todos os dias</p>
            </div>
        </div>
    </article>
    <section>
        <div  class="container my-3 servico-box" style="border: 3px solid  #084b62; border-radius: 12px; position: relative; ">
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
        <div id="pinheiral" class="container d-flex justify-content-center justify-content-md-start align-items-center text-center text-md-start pt-3 mt-5 flex-wrap">
            <img src="{{ asset('assets/img/PostoAvançado2.svg') }}" alt="" width="180">
            <div class="px-3">
                <h2 style="font-family:'Bebas Neue', sans-serif;text-transform: uppercase; color:var(--cor-primary);">posto
                    avançado em pinheiral</h2>
                <p style=" color:var(--cor-primary);">agendamento todos os dias</p>
            </div>
        </div>
    </article>
    <section>
        <div  class="container my-3 servico-box" style="border: 3px solid  #084b62; border-radius: 12px; position: relative; ">
            <div class="row">
                <h1 class="text-center fs-3"
                    style="background: #fff; color: #084b62; position: absolute; top:-20px; right: 40%; width: 250px;">SERVIÇOS</h1>
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
@endsection
