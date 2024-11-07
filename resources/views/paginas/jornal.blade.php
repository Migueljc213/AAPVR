@extends('paginas.layout-pages.default')

@section('titulo', 'Projetos')


@section('content')
    <section id="projetos" class="d-flex align-items-center justify-content-center"
        style="object-fit:contain;  background: url({{ asset('assets/img/Fundo.svg') }}) no-repeat; min-height: 100vh;">
        <div class="container d-flex align-items-center justify-content-center" style="gap:20px;">
            <div class="d-flex align-items-center ">
                <div class="d-flex flex-column justify-content-center" style="position: relative;">
                    <img src="{{ asset('assets/img/jornalBanner.svg') }}" alt="" width="800">

                    <div class="titulo-banner" style="bottom: 0;left: 10%;">
                        <h3 class=" fw-bold px-3 "
                            style="position: absolute !important; right: 20%; top:85%; font-size: 4rem; color: #fff; background:var(--cor-secundary); text-transform: uppercase ">
                            Jornal</h3>
                    </div>

                </div>
            </div>

        </div>

    </section>
    <section>
        <div class="container my-5">
            <h1 class="fs-2 fw-bold text-start my-4" style="color: #0389b7; border-bottom: 1px solid #0389b7">Destaque</h1>
            @if ($noticias->isNotEmpty())
                <div class="row d-flex justify-content-center align-items-center">
                    @foreach ($noticias as $noticia)
                        <div class="col-12 col-md-3 d-flex justify-content-center align-items-center">
                            <div class="d-flex flex-column justify-content-center mt-3 ">
                                <a class="d-flex flex-column justify-content-center text-center"
                                    href="{{ route('noticia.show', ['id' => $noticia['id']]) }}"
                                    style="text-decoration: none">
                                    <img style="width: 300px; height: 200px; object-fit: contain"
                                        src="{{ asset($noticia['img']) }}" alt="">
                                    <div class="d-flex justify-content-center">
                                        <h2 class="fs-6 fw-bold mt-2 mb-3 "
                                            style="color: var(--cor-secundary); max-width: 250px">
                                            {{ $noticia->name }}</h2>
                                    </div>

                                    <span class="text-center" style="color: #000">Ler mais -></span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

@endsection
