<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/34517ddc12.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<style>

</style>
<header class="" style="background:#ffff;">
    <div class="container d-flex justify-content-between align-items-center" style=" max-height:140px">
        <div class="my-3 navbar-brand">
            <a class="logo" href="{{ route('home') }}"><img src="{{ asset('assets/img/logoAppvr.svg') }}"
                    alt="Logo" height="70px"></a>
        </div>
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto d-flex align-items-center">
                        <li class=" nav-item" style="position: relative;">
                            <a class="dropdown nav-link" href="{{ route('convenio') }}">Quem Somos </a>
                            <div class="dropdownNav p-0">
                                <ul class="p-0">
                                    <li class="p-2">
                                        <a class="nav-link" href="{{ route('premios-titulos') }}">Prêmios e Títulos</a>
                                    </li>
                                    <li class="p-2">
                                        <a class="nav-link" href="{{ route('servicos') }}">Serviços</a>
                                    </li>
                                    <li class="p-2">
                                        <a class="nav-link" href="{{ route('link') }}">Link Úteis</a>
                                    </li>


                                </ul>
                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('sobre') }}">Convênios</a>
                        </li>
                        <li class="nav-item" style="position: relative;">
                            <a class="dropdown nav-link" href="{{ route('guia-usuario') }}">Guia do Associado</a>
                            <div class="dropdownNav p-0">
                                <ul class="p-0">
                                    <li class="p-2">
                                        <a class="nav-link" href="{{ route('servicos') }}">Contatos</a>
                                    </li>
                                    <li class="p-2">
                                        <a class="nav-link" href="{{ route('projetos') }}">Serviços</a>
                                    </li>
                                    <li class="p-2">
                                        <a class="nav-link" href="{{ route('servicos') }}">Link Úteis</a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('agenda') }}">Marcação de Consultas</a>
                        </li>

                        <li class="nav-item" style="position: relative;">
                            <a class="pb-3 dropdown nav-link " href="{{ route('sobre') }}">Responsabilidade <br>
                                Social</a>
                            <div class="dropdownNav p-0">
                                <ul class="p-0">
                                    <li class="p-2">
                                        <a class="nav-link" href="{{ route('servicos') }}">Apostila- Título UPE 2023 &
                                            2024</a>
                                    </li>
                                    <li class="p-2">
                                        <a class="nav-link" href="{{ route('projetos') }}">Projetos</a>
                                    </li>
                                    <li class="p-2">
                                        <a class="nav-link" href="{{ route('servicos') }}">Serviços</a>
                                    </li>
                                    <li class="p-2">
                                        <a class="nav-link" href="{{ route('servicos') }}">
                                            CIPA</a>
                                    </li>
                                    <li class="p-2">
                                        <a class="nav-link" href="{{ route('servicos') }}">
                                            PORTARIA CEBAS</a>
                                    </li>
                                    <li class="p-2">
                                        <a class="nav-link" href="{{ route('servicos') }}">
                                            TERMO DE FORMENTO</a>
                                    </li>
                                    <li class="p-2">
                                        <a class="nav-link" href="{{ route('servicos') }}">
                                            BALANÇO PATRIMONIAL</a>
                                    </li>
                                    <li class="p-2">
                                        <a class="nav-link" href="{{ route('servicos') }}">
                                            LGPD</a>
                                    </li>


                                </ul>
                            </div>
                        </li>

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/admin/dashboard') }}" target="__blank"
                                        class="rounded-md px-3 py-2 nav-link ">
                                        Dashboard
                                    </a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" target="__blank"
                                        class="rounded-md px-3 py-2  nav-link">
                                        Login
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" target="__blank"
                                                class="rounded-md px-3 py-2 nav-link">
                                                Registrar
                                            </a>
                                        @endif
                                    </li> --}}
                            @endauth
                        @endif
                </div>



                <style>
                    .navbar-expand-lg {
                        position: relative;
                        background: #fff;
                        padding: 10px 30px;
                    }

                    .navbar-collapse.ativa {
                        position: absolute;
                        top: 100%;
                        left: -40px;
                        right: 0;
                        z-index: 1000;
                        /* Alta prioridade para sobrepor outros elementos */
                        background: #fff;
                        border-radius: 8px;
                    }

                    .navbar-collapse.ativa li {
                        margin: 16px 0px;
                    }

                    .navbar-toggler {
                        display: none
                    }

                    @media(max-width:1200px) {
                        .navbar-toggler {
                            display: block
                        }

                        .navbar-collapse {
                            display: none
                        }

                        .navbar-collapse.ativa {
                            display: block;
                        }
                    }
                </style>

                <script>
                    const btnHamburgue = document.querySelector('.navbar-toggler');
                    const navegacao = document.querySelector('.navbar-collapse');

                    const larguraMinima = 1000;

                    function verificarLargura() {
                        if (window.innerWidth > larguraMinima) {
                            navegacao.classList.remove('ativa');
                        }
                    }

                    if (window.innerWidth < larguraMinima) {
                        btnHamburgue.addEventListener('click', () => {
                            navegacao.classList.toggle('ativa');
                        });
                    }

                    // Verifica a largura ao redimensionar a janela
                    window.addEventListener('resize', verificarLargura);
                    verificarLargura()

                    
                    const dropdownBtn = document.querySelectorAll('.dropdown')
                    const dropdownNav = document.querySelectorAll('.dropdownNav')

                    console.log(dropdownBtn)

                    Array.from(dropdownBtn).forEach((btn) => {
                        btn.addEventListener('mouseenter', () => {
                            btn.nextElementSibling.classList.add('ativo');

                        })
                        btn.nextElementSibling.addEventListener('mouseleave', () => {
                            timeoutId = setTimeout(() => {
                                btn.nextElementSibling.classList.remove('ativo');
                            }, 200);

                        })
                    })
                </script>
</header>
