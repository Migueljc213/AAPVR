@extends('paginas.layout-pages.default')

@section('titulo', 'Agenda Médica')


@section('content')
    <div class="banner-home"
        style="background-image: url('/assets/img/LinkBannerFundo.svg'); min-height: 90vh; position: relative;">
        <div class="container d-flex justify-content-center  justify-content-md-start" style="margin: 0 auto; ">
            <div class="d-flex " style="align-items: center; min-height: 100vh; z-index:1; margin-left: 40px">
                <div>
                    <div class="pb-3">
                        <img src="{{ asset('assets/img/LogoAppvrBranca.svg') }}" alt="" width="120">
                    </div>
                    <div class="pb-3 ">
                        <h1 class="p-1 fw-bold px-3"
                            style="font-size: 5rem; color: #fff; background:var(--cor-secundary); display:inline-block;text-transform: uppercase">
                            Links úteis
                        </h1>
                    </div>
                    <div class="pb-3">
                        <h2 class="p-1 fw-bold"
                            style="font-size: 3.3rem; color: #fff; background: var(--cor-primary); display:inline-block;text-transform: uppercase">
                            mais informações a um click</h2>
                    </div>
                </div>
            </div>
            <div>
                <img class="img-home" src="{{ asset('assets/img/LinkImagem.svg') }}" alt="" width="400"
                    style="position: absolute; bottom: 140px; right: 80px; height: 90vh; margin-right: 40px">
            </div>
        </div>
    </div>

    <section class="d-flex align-items-center justify-content-center" style="min-height: 80vh">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pt-4">
                    <ul>
                        <li class="pt-4" >
                            <a class="d-flex align-items-center" href="" style="gap:20px;">
                                <img src="{{ asset('assets/img/LogoLinkBlack.svg') }}" alt="">
                                <p> Associação Eclética de Aposentados e Pensionistas da Previdência Social do Estado de
                                    Minas Gerais (ASEAPPREVS)</p>
                            </a>
                        </li>
                        <li class="pt-4" >
                            <a class="d-flex align-items-center" href="" style="gap:20px;">
                                <img src="{{ asset('assets/img/LogoLinkBlack.svg') }}" alt="">
                                <p> Previdência Social - Aposentadoria</p>
                            </a>
                        </li>
                        <li class="pt-4">
                            <a class="d-flex align-items-center" href="" style="gap:20px;">
                                <img src="{{ asset('assets/img/LogoLinkBlack.svg') }}" alt="">
                                <p> Rede Brasil Atual</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 pt-4">
                    <ul>
                        <li class="pt-4">
                            <a class="d-flex align-items-center" href="" style="gap:20px;">
                                <img src="{{ asset('assets/img/LogoLinkBlack.svg') }}" alt="">
                                <p> Rede Ibero-Americana de Associações de Idosos do Estado de Minas Gerais</p>
                            </a>
                        </li>
                        <li class="pt-4">
                            <a class="d-flex align-items-center" href="" style="gap:20px;">
                                <img src="{{ asset('assets/img/LogoLinkBlack.svg') }}" alt="">
                                <p>Meu Inss - A forma mais fácil de utilizar os serviços do INSS.</p>
                            </a>
                        </li>
                        <li class="pt-4" >
                            <a class="d-flex align-items-center" href="" style="gap:20px;">
                                <img src="{{ asset('assets/img/LogoLinkBlack.svg') }}" alt="">
                                <p> Sindicato dos Trabalhadores em Telecomunicações de Minas Gerais – Sinttel-MG</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
