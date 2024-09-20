<!DOCTYPE html>
<html lang="en">


<body>
    <x-navbar/>
    <main style="min-height: 80vh">
        @yield('content')
    </main>

    <footer style="background:var(--cor-primary)">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center justify-content-start my-2  flex-wrap" style="min-height: 100px">
                <div class="d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/LogoAppvrBranca.svg') }}" alt="" width="80"
                        class="mx-2">
                    <img src="{{ asset('assets/img/LogoCebas.svg') }}" alt="" width="80" class="mx-2">
                </div>
                <nav>
                    <ul class="nav-footer my-3">
                        <li class="nav-item mb-2"><a class="nav-link" href="{{ route('sobre') }}">quem Somos</a></li>
                        <li class="nav-item mb-2"><a class="nav-link" href="{{ route('convenio') }}">convênios</a></li>
                        <li class="nav-item mb-2"><a class="nav-link"href="{{ route('agenda') }}">marcação de
                                consultas</a>
                        </li>
                        <li class="nav-item mb-2"><a class="nav-link" href="{{ route('guia-usuario') }}">guia do
                                associado</a></li>
                        <li class="nav-item mb-2"><a class="nav-link" href="{{ route('servicos') }}">responsabilidade
                                social</a></li>
                    </ul>
                </nav>
            </div>
            <div class="d-flex flex-column text-center">
                <h5 style="color: #ffff; font-size:1rem; ">SIGA NOSSAS <br> REDES SOCIAIS</h5>
                <div class="d-flex justify-content-around align-items-center" style="height: 50px">
                    <a href=""><i style="color: #ffff" class="fa-brands fa-facebook  fa-2x"></i></a>
                    <a href=""><i style="color: #ffff" class="fa-brands fa-instagram fa-2x"></i></a>
                    <a href=""><i style="color: #ffff" class="fa-brands fa-square-whatsapp fa-2x"></i></a>
                </div>
            </div>

        </div>
    </footer>
  
</body>

</html>
