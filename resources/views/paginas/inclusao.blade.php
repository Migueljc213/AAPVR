@extends('paginas.layout-pages.default')

@section('titulo', 'Projetos')


@section('content')
    <section id="projetos" class="d-flex align-items-center justify-content-center justify-content-md-start"
        style="background: url({{ asset('assets/img/ProjetosFundo.svg') }}) no-repeat; min-height: 100vh">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-start" style="gap:20px;">
            <div class="d-flex align-items-center ">
                <div class="d-flex flex-column justify-content-center justify-content-md-start" style="position: relative;">
                    <img src="{{ asset('assets/img/InclusaoBannerPessoa.svg') }}" alt="" width="600">

                    <div class="titulo-banner" style="bottom: 0;left: 10%;">
                        <h3 class=" fw-bold px-3 "
                            style="position: absolute !important; right: -50%; top:70%; font-size: 5rem; color: #fff; background:var(--cor-secundary); text-transform: uppercase ">
                            para idosos</h3>
                    </div>
                    <div class="titulo-banner" style="bottom: -80px;left: 10%;">
                        <h3 class="fw-bold px-2 "
                            style="position: absolute !important;  right: 0%; top:60%;font-size: 2rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                            inclusão digital</h3>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>

    </section>
    <section style="background: #fff; min-height: 80vh">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center flex-column text-center">
                <h1 class="fs-3 fw-bold mt-5 mb-3" style="color: #0389b7">INCLUSÃO DIGITAL PARA IDOSOS</h1>
                <p class="text-start mx-3" class="#000">Atualmente, quem não domina pelo menos o básico no uso da internet
                    passa por sérias dificuldades. Afinal, vários serviços, como a obtenção do contracheque dos aposentados
                    e pensionistas ou declaração de imposto de renda, só são obtidos por este meio. Pensando nisso, a
                    Associação dos Aposentados e Pensionistas de Volta Redonda, em parceria com a Secretaria Nacional de
                    Promoção e Defesa dos Direitos da Pessoa Idosa e com o Ministério da Mulher, da Família e dos Direitos
                    Humanos, está promovendo o Projeto de Inclusão Digital para Idosos.
                    <br><br>
                    O curso, que conta com aulas em Volta Redonda, Barra do Piraí e Pinheiral, é destinado a pessoas com 60
                    anos ou mais e é gratuito. Nas aulas, as pessoas aprendem a navegar na internet, acessar sites com
                    segurança, utilizar redes sociais e outros serviços.
                    <br><br>
                    O projeto foi conquistado pela AAP-VR graças a uma emenda parlamentar. E que, nas aulas, as pessoas
                    aprendam a navegar na internet, acessar sites com segurança, utilizar redes sociais e outros serviços.
                    <br><br>
                    O Projeto de Inclusão Digital chega em boa hora, quando todos nós, independentemente de idade ou
                    condição social, precisamos evitar estar o mais por dentro possível das coisas da internet. O Curso de
                    Inclusão Digital irá facilitar muito a vida dos que participarem.
                </p>
                <button class="btn fw-bold text-uppercase w-100 mt-4 rounded-pill p-2"
                    style="background: #ff7700; color: #fff"><i></i>acesse a plataforma e conheça um pouco mais do
                    projeto</button>
            </div>
        </div>
    </section>
    <article class="mt-4 w-100 mb-5" >
        <div class="container rounded p-3" style="background: linear-gradient(to right, #0389b7 50%, #2eb8d2);">
            <img src="{{ asset('assets/img/logos_end.svg') }}" class="w-100" alt="">
        </div>

    </article>
@endsection
