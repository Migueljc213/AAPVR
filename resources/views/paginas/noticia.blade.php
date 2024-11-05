@extends('paginas.layout-pages.default')

@section('titulo', 'Noticîas')


@section('content')

    <section style="min-height: 60vh" class="d-flex aling-items-center">
        <div class="container d-flex align-items-start justify-content-center" style="gap:40px">
            <div class="" style="object-fit: contain">
                <img style=" h-100" src="{{ asset($noticia['img']) }}" alt="">
            </div>
            <div class="mt-5">
                <h1 class="fs-2 fw-bold mt-2 mb-3 text-center text-md-start" style="color: #ff7700">{{ $noticia['name'] }}
                </h1>
                <p class="fs-5 fw-bold mt-5 mb-3 text-center" style="color: #0389b7">{{ $noticia['description'] }}</p>
            </div>
        </div>

    </section>

    <article style="min-height: 50vh" class="mt-5">
        <div class="container">

            <h5 class="fw-bold mt-5 mb-3 text-start" style="color: #0389b7">Notícias relacionadas</h5>
            <div class=" d-flex justify-content-center align-items-start flex-wrap"
                style="gap: 30px; border-top: 1px solid #0389b7">
                @foreach ($noticias as $noticia)
                    <div class="d-flex flex-column justify-content-center mt-3 ">
                        <a class="d-flex flex-column justify-content-center text-center"
                            href="{{ route('noticia.show', ['id' => $noticia['id']]) }}" style="text-decoration: none">
                            <img style="width: 300px; height: 250px; object-fit: contain" src="{{ asset($noticia['img']) }}"
                                alt="">
                            <div class="d-flex justify-content-center">
                                <h2 class="fs-6 fw-bold mt-5 mb-3 " style="color: #0389b7; max-width: 250px">
                                    {{ $noticia->name }}</h2>
                            </div>

                            <span class="text-center" style="color: #000">Ler mais -></span>
                        </a>
                    </div>
                @endforeach
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

    @if ($comentarios)
        <section class="container">
            
        <h3 class="fs-6 fw-bold my-3 mb-5  " style="color: #0389b7;">Comentários: <h3>
            <div class="row text-start">
                @foreach($comentarios as $comentario)
                    <p class="fw-bold fs-6">{{$comentario->nome}}</p>
                    <p class="fs-6 fw-light mx-3">{{$comentario->conteudo}}</p>
                @endforeach
            </div>
            {{ $comentarios->links('vendor.pagination.bootstrap-5') }}
        </section @endif

    @endsection
