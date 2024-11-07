@extends('paginas.layout-pages.default')

@section('titulo', 'Noticîas')


@section('content')




    <section style="min-height: 60vh" class="d-flex aling-items-center mt-3">
        <div class="container d-flex align-items-start justify-content-center" style="gap:40px">
            <div class="max-width:300px !important">
                <img src="{{ asset($noticia['img']) }}" alt="" width="100%" height="100%">
            </div>
            <div class="mt-5">
                <h1 class="fs-2 fw-bold mt-2 mb-3 text-center " style="color: #ff7700">{{ $noticia['name'] }}
                </h1>
                <p class="fs-5 fw-bold mt-5 mb-3 text-center" style="color: #0389b7">{{ $noticia['description'] }}</p>
            </div>
        </div>

    </section>

    <article style="min-height: 50vh" class="mt-5">
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
            <div class="text-center mt-5">
                <a href="{{ route('noticia.index') }}" class="btn fs-5 fw-bold"
                    style="background: var(--cor-secundary); color: #fff">Ver mais</a>
            </div>
        </div>


    </article>

    <section class="container comentarios">
        @if ($errors->any())
            <div class="alert alert-danger w-25 my-2">
                <ul class="mb-0">

                    <li>{{ $errors->first() }}</li>

                </ul>
            </div>
        @endif
        <h1 class="fs-6 fw-bold mt-5  " style="color: #0389b7;">Deixe o seu comentário:</h1>
        <form action="{{ route('comentarios.store') }}" method="POST" class="my-4">
            @csrf
            <input type="hidden" name="noticia_id" id="noticia_id" value="{{ $noticia->id }}">
            <div class="row">
                <div class="col-12 col-md-4">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome...">
                </div>
                <div class="col-12 col-md-4">
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email...">
                </div>
                <div class="col-12 col-md-4">
                    <input type="text" name="url" class="form-control" id="url" placeholder="Url...">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <textarea name="conteudo" class="form-control px-2" id="conteudo" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mt-2">Enviar</button>
            </div>

        </form>

    </section>

    @if ($comentarios->isNotEmpty())
        <section class="container">
            <h3 class="fs-6 fw-bold my-3 mb-5  " style="color: #0389b7;">Comentários: <h3>
                    <div class="row text-start">
                        @foreach ($comentarios as $comentario)
                            <p class="fw-bold fs-6">{{ $comentario->nome }}</p>
                            <p class="fs-6 fw-light mx-3">{{ $comentario->conteudo }}</p>
                        @endforeach
                    </div>
                    {{ $comentarios->links('vendor.pagination.bootstrap-5') }}
        </section @endif

    @endsection
