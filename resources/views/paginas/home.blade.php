@extends('paginas.layout-pages.default')

@section('titulo', 'Home')


@section('content')
    <div class="banner-home"

        style="background-image: url({{ asset($banner[0]['img']) }}); min-height: 90vh; position: relative;">
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
                <img class="img-home" src="{{ asset('assets/img/HomeBannerPessoa.svg') }}" alt=""
                    style="position: absolute; bottom: 0; right: 80px; height: 90vh; margin-right: 40px">
            </div>
        </div>
    </div>
    <div>
        <div style="background: #fff; min-height: 40vh">
            <div class="nav-home container d-flex  justify-content-center "
                style="gap:30px; position: absolute;  bottom: -320px;right: 100px; margin: 0 auto;">
                <a class="link-home" href="#" style="text-decoration: none !important;">
                    <div class=" my-3 d-flex align-items-center justify-content-center"
                        style="background: linear-gradient(135deg, #49c1e5 0%, #0480a6 80%); border-radius: 12px;  min-height: 300px; box-shadow: 10px 10px 10px 4px rgba(0, 0, 0, 0.3); width: 250px">
                        <div class="d-flex flex-column justify-content-start text-center p-4 align-items-center"
                            style="">
                            <img class="my-3" src="{{ asset('assets/img/home/img1.svg') }}" alt="">
                            <h4 class="fs-4 " style="color: #fff">MARCAÇÃO DE <br> CONSULTAS</h4>
                        </div>
                    </div>
                </a>
                <a class="link-home" href="#" style="text-decoration: none !important; ">
                    <div class=" my-3 d-flex align-items-center justify-content-center"
                        style="background: linear-gradient(135deg, #49c1e5 0%, #0480a6 80%); border-radius: 12px;  min-height: 300px; box-shadow: 10px 10px 10px 4px rgba(0, 0, 0, 0.3); width: 250px">
                        <div class="d-flex flex-column justify-content-start text-center p-4 align-items-center"
                            style="">
                            <img class="my-3" src="{{ asset('assets/img/home/img2.svg') }}" alt="">
                            <h4 class="fs-4 " style="color: #fff">CONVÊNCIOS</h4>
                        </div>
                    </div>
                </a>
                <a class="link-home" href="#" style="text-decoration: none !important; ">
                    <div class=" my-3 d-flex align-items-center justify-content-center"
                        style="background: linear-gradient(135deg, #49c1e5 0%, #0480a6 80%); border-radius: 12px;  min-height: 300px; box-shadow: 10px 10px 10px 4px rgba(0, 0, 0, 0.3); width: 250px">
                        <div class="d-flex justify-content-start flex-column  text-center p-4 align-items-center"
                            style="">
                            <img class="my-3" src="{{ asset('assets/img/home/img3.svg') }}" alt="">
                            <h4 class="fs-4 " style="color: #fff">GUIA DO <br> ASSOCIADO</h4>
                        </div>
                    </div>
                </a>
                <a class="link-home" href="#" style="text-decoration: none !important; ">
                    <div class=" my-3 d-flex align-items-center justify-content-center"
                        style="background: linear-gradient(135deg, #49c1e5 0%, #0480a6 80%); border-radius: 12px;  min-height: 300px; box-shadow: 10px 10px 10px 4px rgba(0, 0, 0, 0.3); width: 250px">
                        <div class="d-flex justify-content-start  flex-column  text-center p-2 align-items-center"
                            style="">
                            <img class="my-3" src="{{ asset('assets/img/home/img4.svg') }}" alt="">
                            <h4 class="fs-4 " style="color: #fff">RESPONSABILIDADE <br> SOCIAl</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <section id="conheca-appvr" class="d-flex align-items-center justify-content-center"
        style="background: #fff; min-height: 80vh; ">
        <div class="container d-flex align-items-center justify-content-center flex-wrap">
            <div class="mt-5" style="margin-right: 60px; max-width:350px">
                <h1 class="fw-bold mb-3" style="color: var(--cor-primary)">CONHEÇA O GRUPO APPVR</h1>
                <p>A AAPVR é uma associação filantrópica e beneficente, que tem como objetivo promover a melhoria da
                    qualidade de vida da população e seus associados, através de assistência social, saúde, educação,
                    esporte, cultura e lazer. O Associado tem ao seu lado uma entidade reconhecidamente sólida, onde a nossa
                    tradição é se dedicar ao bem estar da família.</p>
            </div>
            <div class="mt-3">
                <iframe width="660" height="415" src="https://www.youtube.com/embed/5gN2EBRZ49w?si=EOYzgZY0jLRmYg3G"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>

    </section>

    <article id="btn-associado" class=" d-flex justify-content-center align-items-center" style="min-height: 90vh">
        <a class="" href="">
            <img src="{{ asset('assets/img/HomeSeja.svg') }}" alt="Seja Associado" style="max-width: 900px">
            <h2>SEJA UM ASSOCIADO</h2>

        </a>
    </article>

    <article id="noticias" class="d-flex justify-content-center align-items-center flex-column"
        style="background: url({{ asset('assets/img/FundoNoticias.svg') }}) no-repeat; min-height:90vh;  height:auto;">
        <h1 style="color: #fff" class="text-center py-3 fw-light mt-3">NOTÍCIAS</h1>
        <div class="container d-flex justify-content-center align-items-center flex-wrap pb-5"
            style="gap:30px; background:#49c1e5;">
            @foreach($news as $new)
            <div style="position: relative">
                <img src="{{ asset($new['img']) }}" alt="" style="max-width: 300px !important;">
                <div
                    style="position: absolute; bottom: 0;  opacity: 0.5; background-color: #fff; width: 100%; border-radius: 12px; cursor: pointer; padding: 0px 4px;  min-height: 25%; ">
                </div>
                <div
                    style="position: absolute; bottom: 0; background: transparent !important;  opacity:1; width: 100%; border-radius: 12px; cursor: pointer; padding: 0px 4px;  min-height: 25%">
                    <h3 class="fw-bold py-2 px-2 fs-5" style="color: var(--cor-primary); opacity: 1; background: transparent !important;"> {{$new['name']}}
                    </h3>
                    <div class="d-flex align-items-end mt-4 mb-0 justify-content-center">
                        <p class="mb-0" style="color: #000">Saiba mais.
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div style="position: relative">
                <img src="{{ asset('assets/img/NoticiasIdoso2.svg') }}" alt="">
                <div
                    style="position: absolute; bottom: 0;  opacity: 0.5; background-color: #fff; width: 100%; border-radius: 12px; cursor: pointer; padding: 0px 4px;  min-height: 25%">
                </div>
                <div
                    style="position: absolute; bottom: 0; background: transparent !important;  opacity:1; width: 100%; border-radius: 12px; cursor: pointer; padding: 0px 4px;  min-height: 25%">
                    <h3 class="fw-bold py-2 px-2 fs-5"
                        style="color: var(--cor-primary); opacity: 1 !important; background: transparent !important;">COMO
                        SE PROTEGER
                        <br>DE CRIMES VIRTUAIS
                    </h3>
                    <div class="d-flex align-items-end mt-5 mb-0 justify-content-center">
                        <p class="mb-0" style="color: #000">Saiba mais.
                        </p>
                    </div>
                </div>
            </div>
            <div style="position: relative">
                <img src="{{ asset('assets/img/NoticiasIdoso1.svg') }}" alt="">
                <div
                    style="position: absolute; bottom: 0;  opacity: 0.5; background-color: #fff; width: 100%; border-radius: 12px; cursor: pointer; padding: 0px 4px; min-height: 25%">

                </div>
                <div
                    style="position: absolute; bottom: 0; background: transparent !important;  opacity:1; width: 100%; border-radius: 12px; cursor: pointer; padding: 0px 4px;  min-height: 25%">
                    <h3 class="fw-bold py-2 px-2 fs-5" style="color: var(--cor-primary); opacity: 1; background: transparent !important;">ASSITÊNCIA SOCIAL
                        <br>PROMOVE FESTAS <b>
                            E ARRAIÁ
                    </h3>
                    <div class="d-flex align-items-end mt-5 mb-0 justify-content-center">
                        <p class="mb-0" style="color: #000">Saiba mais.
                        </p>
                    </div>
                </div>
            </div> --}}
        </div>
    </article>
@endsection
