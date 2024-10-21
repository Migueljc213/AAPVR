<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APPVR- Registro</title>
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


    <section id="login" class="d-flex align-items-center justify-content-center"
        style="background: #49c1e5; min-height: 100vh">
        <div class="container d-flex align-items-center justify-content-center" style="gap:50px;">
            <div>
                <div class="d-flex flex-column">
                    <img src="{{ asset('assets/img/LoginImagem.svg') }}" alt="" style="position: relative;">
                    <span class="fw-bold fs-4 my-4 px-4" style="color: #fff">APPVR</span>
                </div>
                <div style="position: absolute !important;bottom: 40%;left: 20%;">
                    <p class=" p-1 fw-bold px-2"
                        style="font-size: 2rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                        ATENDIMENTO 100%</p>
                </div>
                <div style=" position: absolute !important;bottom: 20%;left:30%;">
                    <h3 class="p-1 fw-bold px-3"
                        style="font-size: 5rem; color: #fff; background:var(--cor-secundary); ">
                        DEDICADO</h3>
                </div>
            </div>
            <div id="form-login" class="d-flex flex-column justify-content-center " style="width: 400px" class="px-3">
                <h1 class="fw-bold text-center " style="color: #fff">BEM-VINDO</h1>
                <span class="fw-bold text-center " style="text-transform: uppercase; color: #fff">acesse com suas
                    credenciais</span>
                <div style="width: 100%">
                    <x-guest-layout>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="cpf" :value="__('CPF')" />
                                <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf"
                                    onkeypress="formatCPF(this)" :value="old('cpf')" required autofocus
                                    autocomplete="username" />
                                <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Senha')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        name="remember">
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Lembre de me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua Senha?') }}
                                    </a>
                                @endif

                                <x-primary-button class="ms-3">
                                    {{ __('Login') }}
                                </x-primary-button>
                            </div>
                        </form>
                        <div class="d-flex align-items-center mt-2 justify-content-end">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('register') }}">
                            {{ __('Ainda não é cadastrado?') }}
                        </a>
                        </div>
                    </x-guest-layout>
                </div>
            </div>
        </div>

    </section>
    <script>
        function formatCPF(input) {
            let cpf = input.value.replace(/\D/g, '');
            if (cpf.length <= 11) {
                cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
                cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
                cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
                input.value = cpf;
            } else {
                input.value = input.value.slice(0, -1);
            }
        }
    </script>

</body>
