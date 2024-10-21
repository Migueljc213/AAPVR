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
        <div class="container d-flex align-items-center justify-content-center" style="gap:90px;">
            <div class="mt-5" style="position: relative;">
                <div class="d-flex flex-column">
                    <img src="{{ asset('assets/img/LoginImagem.svg') }}" alt="" >
                    <span class="fw-bold fs-4 my-4 px-4" style="color: #fff">APPVR</span>
                </div>
                <div style="position: absolute !important;bottom: 40%;left: 20%;">
                    <p class=" p-1 fw-bold px-2"
                        style="font-size: 2rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                        ATENDIMENTO 100%</p>
                </div>
                <div style=" position: absolute !important;bottom: 20%;left: 30%;">
                    <h3 class="p-1 fw-bold px-3"
                        style="font-size: 5rem; color: #fff; background:var(--cor-secundary); ">
                        DEDICADO</h3>
                </div>
            </div>
            <div id="form-login" class="d-flex flex-column justify-content-center mt-2" style="min-width: 400px"
                class="px-3">
       
                <div style="width: 100%">
                    <x-guest-layout>
                        <h1 class="fw-bold my-2 text-center text-uppercase" style="color: #fff">Cadastro</h1>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="cpf" :value="__('CPF')" />
                                <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf"
                                    :value="old('cpf')" required autofocus autocomplete="cpf" />
                                <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('login') }}">
                                    {{ __('Já tem Registro?') }}
                                </a>

                                <x-primary-button class="ms-4">
                                    {{ __('Registrar') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </x-guest-layout>
                </div>
            </div>
        </div>

    </section>

</body>
