@extends('paginas.layout-pages.default')

@section('titulo', 'Guia Usuário')


@section('content')
    <div class="banner-home"
        style="background-image: url({{ asset('/assets/img/GuiaBanner.svg') }}); min-height: 90vh; position: relative;    background-size: cover; 
            background-position: center; ">
        <div class="container d-flex justify-content-center  justify-content-md-start" style="margin: 0 auto; ">
            <div class="d-flex " style="align-items: center; min-height: 100vh; z-index:1; margin-left: 40px">
                <div>
                    <div class="pb-3">
                        <img src="{{ asset('assets/img/LogoAppvrAzul.svg') }}" alt="" width="120">
                    </div>
                    <div class="pb-3 ">
                        <h1 class="p-1 fw-bold px-3"
                            style="font-size: 5rem; color: #fff; background:var(--cor-secundary); display:inline-block; text-transform: uppercase">
                            guia do usuário
                        </h1>
                    </div>
                    <div class="pb-3">
                        <h2 class="p-1 fw-bold"
                            style="font-size: 3.3rem; color: #fff; background: var(--cor-primary); display:inline-block;text-transform: uppercase">
                            encontre aqui o que precisa</h2>
                    </div>
                </div>
            </div>
            <div>
               
            </div>
        </div>
    </div>
    <div>
        <div style="background: #fff; min-height: 30vh">
            <div class="nav-home container d-flex  justify-content-center "
                style="gap:30px; position: absolute;  bottom: -280px;right: 100px; margin: 0 auto;">
                <a class="link-home" href="{{ route('servicos') }}" style="text-decoration: none !important; ">
                    <div class=" my-3 d-flex align-items-center justify-content-center"
                        style="background: linear-gradient(135deg, #49c1e5 0%, #0480a6 80%); border-radius: 12px;  height: 300px; box-shadow: 10px 10px 10px 4px rgba(0, 0, 0, 0.3); width: 300px">
                        <div class="d-flex flex-column justify-content-center text-center px-4 py-3 align-items-center"
                            style="">
                            <img src="{{ asset('assets/img/Serviços.svg') }}" alt="">
                            <h4 class="fs-3 pt-3" style="color: #fff">Serviços</h4>
                        </div>
                    </div>
                </a>
                <a class="link-home" href="{{ route('link') }}" style="text-decoration: none !important; ">
                    <div class=" my-3 d-flex align-items-center justify-content-center"
                        style="background: linear-gradient(135deg, #49c1e5 0%, #0480a6 80%); border-radius: 12px;  height: 300px; box-shadow: 10px 10px 10px 4px rgba(0, 0, 0, 0.3); width: 300px">
                        <div class="d-flex flex-column justify-content-center text-center px-4 py-3 align-items-center"
                            style="">

                            <img src="{{ asset('assets/img/link.svg') }}" alt="">
                            <h4 class="fs-3 pt-3" style="color: #fff">Links Úteis</h4>
                        </div>
                    </div>
                </a>
                <a class="link-home" href="{{ route('agenda') }}" style="text-decoration: none !important; ">
                    <div class=" my-3 d-flex align-items-center justify-content-center"
                        style="background: linear-gradient(135deg, #49c1e5 0%, #0480a6 80%); border-radius: 12px;  height: 300px; box-shadow: 10px 10px 10px 4px rgba(0, 0, 0, 0.3); width: 300px">
                        <div class="d-flex justify-content-center flex-column  text-center px-4 py-3 align-items-center"
                            style="">
                            <img src="{{ asset('assets/img/marcacao.svg') }}" alt="">
                            <h4 class="fs-3 pt-3" style="color: #fff">MARCAÇÃO DE <br>CONSULTAS</h4>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <article class="d-flex justify-content-center align-items-center" style="background: #fff; min-height:60vh;">
        <div class="container d-flex justify-content-center align-items-start flex-wrap mb-4" style="gap:80px">
            <div>
                <h1 class="fw-bold" style="color: var(--cor-primary);font-family:'Bebas Neue', sans-serif;">REDES SOCIAIS
                </h1>
                <div>
                    <div class="d-flex justify-content-center align-items-center flex-column" style=" gap:20px;">
                        <div>
                            <a href="https://www.youtube.com/channel/UCDtfTw8DRXY9w-jd1zMfs2g" target="__blank"><img src="{{ asset('assets/img/icon4.svg') }}" alt=""
                                    width="60px"></a>
                            <a href="https://www.instagram.com/aap_vr/?hl=pt-br" target="__blank"><img src="{{ asset('assets/img/icon5.svg') }}" alt=""
                                    width="60px"></a>
                            <a href="https://www.facebook.com/AAPVROficial/" target="__blank"><img src="{{ asset('assets/img/icon3.svg') }}" alt=""
                                    width="60px"></a>
                        </div>
                        <div>
                            <a href="{{route('noticia.index')}}" target="__blank"><img src="{{ asset('assets/img/icon2.svg') }}" alt=""
                                    width="60px"></a>
                                {{--Blog--}}
                            <a href="https://www.aapvr.org.br/jornal-informativo/" target="__blank"><img src="{{ asset('assets/img/icon1.svg') }}" alt=""
                                    width="60px"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="fw-bold" style="color: var(--cor-primary);font-family:'Bebas Neue', sans-serif;">ENTRE EM CONTATO
                </h1>
                <div>
                    <div class="d-flex justify-content-start align-items-start flex-column" style="height: 50px: gap:20px;">
                        <div>
                            <p style="text-decorption: none; color: #000" class="mb-2" href=""><i
                                    style="color:#000; padding-right: 8px" class="fa-solid fa-envelope"></i>TEL: (24) 2102-1909</p>
                        </div>
                        <div>
                            <a style="text-decoration: none; color: #000" href="mailto:ouvidoria@aappvr.com.br"><i
                                    style="color:#000; padding-right: 8px"
                                    class="fa-solid fa-phone"></i>ouvidoria@aappvr.com.br</a>
                        </div>
                        <a href="https://api.whatsapp.com/send/?phone=552421021901&text=Ol%C3%A1%2C+gostaria+de+me+associar%21&type=phone_number&app_absent=0" target="__blank" class="btn fs-4 px-3 mt-4"
                            style="background: #43bf2e; color: #fff; border-radius: 12px"><i
                                style=" color: #fff; padding-right: 8px" class="fa-brands fa-whatsapp"></i>Whatsapp</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
