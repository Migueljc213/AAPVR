@extends('paginas.layout-pages.default')

@section('titulo', 'Sobre nós')


@section('content')
    <div class="banner-home"
        style="background-image: url('/assets/img/HistoriaBannerFundo.svg'); min-height: 90vh; position: relative;">
        <div class="container d-flex justify-content-center  justify-content-md-start " style="margin: 0 auto; ">
            <div class="d-flex mb-5 align-items-center  align-items-md-end "
                style=" min-height: 100vh; z-index:1; margin-left: 40px; text-transform: uppercase;">
                <div class="">
                    <div class="pb-3">
                        <img src="{{ asset('assets/img/LogoAppvrAzul.svg') }}" alt="" width="120">
                    </div>
                    <div class="pb-3 ">
                        <h2 class="p-1 fw-bold"
                            style="font-size: 3.3rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                            conheça a</h2>
                    </div>
                    <div class="pb-3 ">
                        <h1 class="p-1 fw-bold px-3"
                            style="font-size: 5rem; color: #fff; background:var(--cor-secundary); display:inline-block;">
                            nossa história
                        </h1>
                    </div>

                </div>
            </div>
            <div>
                <img class="img-home" src="{{ asset('assets/img/HistoriaBannerPessoa.svg') }}" alt=""
                    style="position: absolute; bottom: 0; right: 80px; height: 90vh; margin-right: 40px">
            </div>
        </div>
    </div>
    <section class="d-flex align-items-center justify-content-center"
        style="min-height: 70vh; font-family: 'Roboto'; color: #000">
        <div class="container">
            <div class="mx-5 my-3 text-center text-md-start">
                <p>Fundada em 20 de maio de 1973, a Associação dos Aposentados e Pensionistas de Volta Redonda é uma
                    organização
                    da sociedade civil, de direito privado, sem fins lucrativos, reconhecida de Utilidade Pública Municipal,
                    Estadual e Federal.
                    <br><br>
                    A AAPVR tem caráter filantrópico, beneficente, e tem como objetivo promover, por meio da assistência
                    social,
                    da saúde humana, da educação, do esporte, da cultura e do lazer, a melhoria da qualidade de vida dos
                    idosos
                    e dos seus associados, sem distinção de cor, sexo, nacionalidade, raça, profissão, credo religioso ou
                    político.
                    <br><br>
                    A AAPVR surgiu da união e da organização da classe dos aposentados e pensionistas e hoje é considerada
                    uma
                    das maiores associações de classe da América Latina, prestando serviços de assistência médica,
                    odontológica
                    e social aos idosos, associados e seus dependentes e comunidade em geral, defendendo seus direitos e
                    interesses.
                    <br><br>
                    A AAPVR atua em defesa dos direitos sociais, culturais e de saúde para melhor qualidade de vida dos
                    idosos e
                    população em geral e se propõe a ser excelente na promoção da saúde e na defesa dos direitos dos
                    beneficiados, com compromisso, responsabilidade e atendimento humanizado.
                </p>
            </div>
        </div>
    </section>
    <article>
        <div class="container">
            <div class="d-flex align-items-center justify-content-around flex-wrap">
                <div class="d-flex flex-column text-center justify-content-center" style="max-width: 300px">
                    <i style="color: var(--cor-primary)" class="fa-solid fa-bullseye fa-10x"></i>
                    <h3 class="fw-bold py-3"
                        style="color: var(--cor-secundary);text-transform: uppercase;font-family:'Bebas Neue'">Missão</h3>
                    <p>Atuar em defesa dos direitos sociais, culturais e de saúde para melhor qualidade de vida às pessoas
                    </p>
                </div>
                <div class="d-flex flex-column text-center justify-content-center" style="max-width: 300px">
                    <i style="color: var(--cor-primary)" class="fa-regular fa-lightbulb fa-10x"></i>
                    <h3 class="fw-bold py-3"
                        style="color: var(--cor-secundary);text-transform: uppercase;font-family:'Bebas Neue'">Visão</h3>
                    <p>Ser excelente na promoção da saúde e na defesa dos direitos das pessoas</p>
                </div>
                <div class="d-flex flex-column text-center justify-content-center" style="max-width: 300px">
                    <i style="color: var(--cor-primary)" class="fa-solid fa-star fa-10x"></i>
                    <h3 class="fw-bold py-3"
                        style="color: var(--cor-secundary); text-transform: uppercase;font-family:'Bebas Neue'">Valores</h3>
                    <p>Compromisso
                        Responsabilidade
                        Atendimento Humanizado</p>
                </div>
            </div>
        </div>
    </article>

    <section>

        <div class="titulo container  px-2 py-1  text-start mb-3 mt-5" style="position: relative; ">
            <div style="text-transform: uppercase; max-width: 400px">
                <h1 class=" fw-bold px-3 d-flex justify-content-center text-center "
                    style="font-size: 2rem; color: #fff; background:var(--cor-secundary);max-width: 380px; z-index: 1">
                    nossos fundadores

                </h1>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex align-items-start">
                <div class="col-md-3 d-flex justify-content-center text-center flex-column ">
                    <img src="{{ asset('assets/img/Fundador1.svg') }}" alt="Ascentino Vicente"
                        style="max-width:220px; margin: 0 auto;">
                    <p class="fs-3 fw-bold mb-1" style="color: #000; font-family: 'Bebas Neue'">Ascentino Vicente</p>
                    <span class=" fw-bold">(in memorian)</span>
                </div>
                <div class="col-md-3 d-flex justify-content-center text-center flex-column">
                    <img src="{{ asset('assets/img/Fundador2.svg') }}" alt="carlindo dias"
                        style="max-width:220px; margin: 0 auto;">
                    <p class="fs-3 fw-bold mb-1" style="color: #000; font-family: 'Bebas Neue'">Carlindo Dias</p>
                    <span class=" fw-bold">(in memorian)</span>
                </div>
                <div class="col-md-3 d-flex justify-content-center text-center flex-column">
                    <img src="{{ asset('assets/img/Fundador3.svg') }}" alt="Carlos Augusto Ribeiro"
                        style="max-width:220px; margin: 0 auto;">
                    <p class="fs-3 fw-bold mb-1" style="color: #000; font-family: 'Bebas Neue'">Carlos Augusto Ribeiro</p>
                    <span class=" fw-bold">(in memorian)</span>
                </div>
                <div class="col-md-3 d-flex justify-content-center text-center flex-column">
                    <img src="{{ asset('assets/img/Fundador4.svg') }}" alt="Antônio Frizzas"
                        style="max-width:220px; margin: 0 auto;">
                    <p class="fs-3 fw-bold mb-1" style="color: #000; font-family: 'Bebas Neue'">Antônio Frizzas</p>
                    <span class="fw-bold">(in memorian)</span>
                </div>

            </div>
            <div class="row d-flex align-items-start justify-content-center my-5">
                <div class="col-md-3 d-flex justify-content-center text-center flex-column">
                    <img src="{{ asset('assets/img/Fundador5.svg') }}" alt="José Maria Melgaço Fº"
                        style="max-width:220px; margin: 0 auto;">
                    <p class="fs-3 fw-bold mb-1" style="color: #000; font-family: 'Bebas Neue'">José Maria Melgaço Fº</p>
                    <span class=" fw-bold">(in memorian)</span>
                </div>
                <div class="col-md-3 d-flex justify-content-center text-center flex-column">
                    <img src="{{ asset('assets/img/Fundador6.svg') }}" alt="Moacyr Thomaz de Aquino"
                        style="max-width:220px; margin: 0 auto;">
                    <p class="fs-3 fw-bold mb-1" style="color: #000; font-family: 'Bebas Neue'">Moacyr Thomaz de Aquino</p>
                    <span class=" fw-bold">(in memorian)</span>
                </div>
                <div class="col-md-3 d-flex justify-content-center text-center flex-column">
                    <img src="{{ asset('assets/img/Fundador7.svg') }}" alt="Ascentino Vicente"
                        style="max-width:220px; margin: 0 auto;">
                    <p class="fs-3 fw-bold mb-1" style="color: #000; font-family: 'Bebas Neue'">sebastião
                        dos santos</p>
                    <span class=" fw-bold">(in memorian)</span>
                </div>

            </div>
        </div>
    </section>
@endsection
