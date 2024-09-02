@extends('paginas.layout-pages.default')

@section('titulo', 'Login')


@section('content')
    <section id="login" class="d-flex align-items-center justify-content-center"
        style="background: #49c1e5; min-height: 100vh">
        <div class="container d-flex align-items-center justify-content-center" style="gap:50px;">
            <div>
                <div class="d-flex flex-column">
                    <img src="{{ asset('assets/img/LoginImagem.svg') }}" alt="" style="position: relative;">
                    <span class="fw-bold fs-4 my-4 px-4" style="color: #fff">APPVR</span>
                </div>
                <div  style="position: absolute !important;bottom: 15%;left: 30%;">
                    <p class=" p-1 fw-bold px-2"
                        style="font-size: 2rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                        ATENDIMENTO 100%</p>
                </div>
                <div style=" position: absolute !important;bottom: 0;left: 40%;">
                    <h3 class="p-1 fw-bold px-3" style="font-size: 5rem; color: #fff; background:var(--cor-secundary); ">
                        DEDICADO</h3>
                </div>
            </div>
            <div id="form-login" class="d-flex flex-column justify-content-center" style="width: 300px" class="px-3">
                <h1 class="fw-bold" style="color: #fff">BEM-VINDO</h1>
                <span class="fw-bold" style="text-transform: uppercase; color: #fff">acesse com suas credenciais</span>
                <div style="width: 100%">
                    <form class="d-flex flex-column justify-content-center" action="" style="width: 100%">
                        <input type="text" class="form-control mb-3" name="" id="" placeholder="CPF">
                        <input type="text" class="form-control mb-3" name="" id="" placeholder="Senha">
                        <a href="" class="btn btn-primary">Enviar</a>
                        <a href="">Esqueceu a senha?</a>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
