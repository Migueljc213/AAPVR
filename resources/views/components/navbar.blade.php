
<header class="" style="background:#ffff;">
    <div class="container d-flex justify-content-between align-items-center" style=" max-height:140px">
        <div class="my-3 navbar-brand">
            <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logoAppvr.svg') }}" alt="Logo"
                    height="80px"></a>
        </div>
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('sobre') }}">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('convenio') }}">Convênios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('agenda') }}">Marcação de Consultas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('guia-usuario') }}">Guia do Associado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('servicos') }}">Responsabilidade Social</a>
                        </li>
                </div>
                @if (Route::has('login'))
                    <nav class="-mx-3 d-flex flex-1 justify-end">
                        <ul class=" navbar-nav">

                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/admin/dashboard') }}" class="rounded-md px-3 py-2 nav-link ">
                                        Dashboard
                                    </a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2  nav-link">
                                        Login
                                    </a>
                                </li>
                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 nav-link">
                                            Registrar
                                        </a>
                                </li>
                    @endif
                @endauth
                </ul>
        </nav>
        @endif

</header>