@extends('paginas.layout-pages.default')

@section('titulo', 'Projetos')


@section('content')
    <section>
        <div class="container">
            <h1 class="fs-2 fw-bold text-start my-4" style="color: #0389b7; border-bottom: 1px solid #0389b7">Notícias</h1>
            @if ($noticias->isNotEmpty())
                <div class="row d-flex justify-content-center">
                    @foreach ($noticias as $noticia)
                        <div class="col-12 col-md-4 d-flex justify-content-center">
                            <div class="d-flex flex-column justify-content-center mt-3 ">
                                <a class="d-flex flex-column justify-content-center text-center"
                                    href="{{ route('noticia.show', ['id' => $noticia['id']]) }}"
                                    style="text-decoration: none">
                                    <img style="width: 300px; height: 250px; object-fit: contain"
                                        src="{{ asset($noticia['img']) }}" alt="">
                                    <div class="d-flex justify-content-center">
                                        <h2 class="fs-6 fw-bold mt-5 mb-3 " style="color: #0389b7; max-width: 250px">
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
