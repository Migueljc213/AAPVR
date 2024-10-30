@extends('paginas.layout-pages.default')

@section('titulo', 'LGPD')


@section('content')

    <section class="d-flex justify-content-center align-items-center" style="height: 80vh;background: var(--cor-primary)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <img src="{{asset('assets/img/iconeLGPD.png')}}" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <p>

                        A Lei Geral de Proteção de Dados Pessoais, Lei nº 13.709/2018, é a legislação brasileira que regula
                        as
                        atividades de tratamento de dados pessoais e que também altera os artigos 7º e 16 do Marco Civil da
                        Internet.
                        <br><br>
                        Encarregado<br>
                        As atribuições do encarregado, descritas nos incisos I a IV do § 2º do art. 41 da Lei federal nº
                        13.709,
                        serão exercidas pelo Analista:
                        <br><br>
                        Jorge Luiz Ribeiro – jorgelpr@aapvr.com.br
                        <br>
                        <a href="https://www.gov.br/mds/pt-br/acesso-a-informacao/privacidade-e-protecao-de-dados/lgpd"
                            style="color: #fff;" class="btn px-0">Saiba Mais Clicando aqui.</a>
                    </p>
                </div>
            </div>
        </div>

    </section>
@endsection
