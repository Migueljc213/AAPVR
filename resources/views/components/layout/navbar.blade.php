<div>
    <header class="navbar navbar-expand-md d-print-none">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a class="d-flex align-items-center" href=".">
                    <img src="{{ asset('assets/img/LogoAppvrAzul.svg') }}" alt="" style="max-width: 50px">
                    <h1 class="fw-bold m-0 px-1" style="color: #0489b7">AAPVR</h1>
                </a>
            </h1>
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="d-flex align-items-center items-center px-2 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <span class="avatar avatar-sm" style="background-image: url({{ Auth::user()->avatar }})"></span>
                        <div class="d-none d-xl-flex px-2">{{ Auth::user()->name }}</div>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Perfil') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Deslogar') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>



        </div>
</div>
</header>
<header class="navbar-expand-md">
    <div class=" navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Home
                            </span>
                        </a>
                    </li>


                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-ferramentas" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Ferramentas
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item my-1 fw-semibold" href="{{ route('banners.index') }}">
                                        Banners
                                    </a>
                                    <a class="dropdown-item my-1 fw-semibold" href="{{ route('noticias.index') }}">
                                        Noticias

                                    </a>
                                </div>
                           
                            </div>
                    </li> --}}
                    <li class="nav-item ">
                        <a class="nav-link d-flex align-items-center " href="{{ route('noticias.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->

                                <i class="fas fa-blog"></i>
                            </span>
                            <span class="nav-link-title">
                                Blog
                            </span>
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link d-flex align-items-center " href="#navbar-ferramentas">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                <i class="fas fa-newspaper"></i>
                            </span>
                            <span class="nav-link-title">
                                Jornal
                            </span>
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('user.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                <i class="fas fa-users"></i>
                            </span>
                            <span class="nav-link-title">
                                Usuários
                            </span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('galeria.index') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="fas fa-images"></i>
                            </span>
                            <span class="nav-link-title">
                                Galerias de Imagens
                            </span>
                        </a>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-ferramentas" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                <i class="fas fa-tools"></i>
                            </span>
                            <span class="nav-link-title">
                                Ferramentas
                            </span>

                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns ">
                                <div class="dropdown-menu-column">
                                    <a class="text-center dropdown-item my-2 fw-semibold  "
                                        href="{{ route('passeios.index') }}">
                                        Passeios da ILPI Sorrindo
                                    </a>
                                    <a class="dropdown-item my-2 fw-semibold" href="{{ route('workshops.index') }}">
                                        Workshops da Educação Financeira
                                    </a>
                                </div>

                            </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/mail-opened -->
                                <i class="fas fa-globe"></i>
                            </span>
                            <span class="nav-link-title">
                                Site
                            </span>
                        </a>
                    </li>

                </ul>
                {{-- <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                    <form action="./" method="get" autocomplete="off" novalidate>
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                    <path d="M21 21l-6 -6" />
                                </svg>
                            </span>
                            <input type="text" value="" class="form-control" placeholder="Search…"
                                aria-label="Search in website">
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
</header>
</div>
