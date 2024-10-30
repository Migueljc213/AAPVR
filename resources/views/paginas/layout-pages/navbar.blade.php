<div>
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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Quem Somos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('sobre') }}">Sobre nós</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('premios-titulos') }}">Prêmios e
                                            Títulos</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('servicos') }}">Serviços</a></li>
                                    <li><a class="dropdown-item" href="{{ route('link') }}">Link Úteis</a></li>
                                    <li><a class="dropdown-item" href="{{ route('estatuto') }}">Estatuto</a></li>
                                    <li><a class="dropdown-item" href="{{ route('governanca') }}">Governança</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownGuia" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Guia do Associado
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownGuia">
                                    <li><a class="dropdown-item" href="{{ route('guia-usuario') }}">Guia do Usuário</a></li>
                                    <li><a class="dropdown-item" href="{{ route('link') }}">Links Úteis</a></li>
                                </ul>
                            </li>

                            <!-- Marcação de Consultas - Menu Simples -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('agenda') }}">Marcação de Consultas</a>
                            </li>

                            <!-- Responsabilidade Social - Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownResponsabilidade"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Responsabilidade <br> Social
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownResponsabilidade">
                                    <li><a class="dropdown-item" href="{{ route('titulo-upe') }}">Apostila - Título UPE
                                            2023
                                            & 2024</a></li>
                                    <li><a class="dropdown-item" href="{{ route('projetos') }}">Projetos</a></li>
                                    <li><a class="dropdown-item" href="{{ route('servicos') }}">Serviços</a></li>
                                    <!-- Pendente -->
                                    <li><a class="dropdown-item" href="{{ route('cipa') }}">CIPA</a></li>
                                    <li><a class="dropdown-item" href="{{ route('portaria') }}">Portaria CEBAS</a></li>
                                    <!--link para pdf-->
                                    <li><a class="dropdown-item" href="{{ route('termos-fomento') }}">Termo de
                                            Fomento</a></li>
                                    <!--link para pdf-->
                                    <li><a class="dropdown-item" href="{{ route('balanco') }}">Balanço
                                            Patrimonial</a>
                                    </li>
                                    <!-- Pendente -->
                                    <li><a class="dropdown-item" href="{{ route('lgpd') }}">LGPD</a></li>
                                </ul>
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
                        </ul>
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
                            right: 0;

                            z-index: 1000;
                            /* Alta prioridade para sobrepor outros elementos */
                            background: #fff;
                            border-radius: 8px;
                        }

                        .navbar-collapse.ativa .dropdown-menu {
                            z-index: 1000;
                            background: #fff;
                            padding: 4px !important;
                            box-sizing: border-box;
                            overflow: scroll;

                        }

                        .navbar-collapse.ativa .dropdown-item {
                            z-index: 1000;
                            background: #fff;
                            padding: 4px !important;

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


                        btnHamburgue.addEventListener('click', () => {
                            navegacao.classList.toggle('ativa');
                        });


                        // Verifica a largura ao redimensionar a janela
                        window.addEventListener('resize', verificarLargura);
                        verificarLargura()
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </header>


</div>
