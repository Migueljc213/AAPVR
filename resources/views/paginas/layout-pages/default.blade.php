<!DOCTYPE html>
<html lang="en">

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
