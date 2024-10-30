@extends('paginas.layout-pages.default')

@section('titulo', 'BALANÇO PATRIMONIAL -AAPVR')


@section('content')

    <section class=" d-flex justify-content-center align-items-center" style="height: 100vh; background: var(--cor-primary)">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="w-100 my-5 hover" style="height: 50vh;">
                <a class="w-100 mt-3" target="__blank" href="https://drive.google.com/drive/folders/1THqiWtlRKrjBAXhCI2R7W--FUy-tCzLa" class="hover"> <img
                        src="{{ asset('assets/img/balancoPatrimonial.png') }}" class="w-100" alt=""></a>

            </div>
        </div>
    </section>
@endsection
