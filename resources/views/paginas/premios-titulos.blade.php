@extends('paginas.layout-pages.default')

@section('titulo', 'Prêmios e Títulos')


@section('content')
    <div class="banner-home"
        style="background-image: url('/assets/img/PremiosBannerFundo.svg'); min-height: 90vh; position: relative;">
        <div class="container d-flex" style="margin: 0 auto; ">
            <div class="d-flex " style="align-items: center; min-height: 100vh; z-index:1; margin-left: 40px">
                <div>
                    <div class="pb-3">
                        <img src="{{ asset('assets/img/LogoAppvrBranca.svg') }}" alt="" width="120">
                    </div>
                    <div class="pb-3">
                        <h2 class="p-1 fw-bold fs-1 fs-3-md"
                            style=" color: #fff; background: var(--cor-primary); display:inline-block;">
                            VEJA NOSSOS</h2>
                    </div>
                    <div class="pb-3 ">
                        <h1 class="p-1 fw-bold px-3 "
                            style="font-size: 5rem; color: #fff; background:var(--cor-secundary); display:inline-block; text-transform: uppercase">
                            prêmios e títulos
                        </h1>
                    </div>
                </div>
            </div>
            <div>
                <img class="img-home" src="{{ asset('assets/img/PremiosBannerPessoa.svg') }}" alt=""
                    style="position: absolute; bottom: 0; right: 80px; height: 90vh; margin-right: 40px">
            </div>
        </div>
    </div>

    <div  class="container d-flex d-flex justify-content-center flex-column">
        <div id="premios" class="mx-md-5">
            <div class="d-flex justify-content-center text center my-5">
                <h1 class="text-center" style="color: var(--cor-primary); text-transform: uppercase; margin:0 auto; ">AAPVR:
                    VOLUNTARIADO E VOCAÇÃO PARA SERVIR!</h1>
            </div>
            <p style="color: #000">Ao longo dos seus 50 anos de bons serviços prestados aos associados e população em geral,
                a Associação dos
                Aposentados e Pensionistas de Volta Redonda recebeu muitos títulos e honrarias, o que prova a sua vocação
                para a
                melhoria da qualidade de vida e bem-estar geral. De Diploma concedido à Diretoria pelos próprios
                funcionários, a
                grupos de ajuda humanitária e a maior comenda legislativa do Estado do Rio de Janeiro, a Medalha Tiradentes,
                a
                AAPVR vem sendo reconhecida, seguidamente, como uma grande instituição de utilidade pública. <br> <br>
                Abaixo, alguns dos títulos e honrarias recebidos pela Associação:</p>
            <ul class="">
                <li> href=""> * Titulo de Utilidade pública municipal Volta Redonda desde 18/05/1984 –Lei Municipal
                    1876
                </a></li>

                <li>* Título de Utilidade Pública estadual – Moção de Congratulação – Assembleia Legislativa
                    do
                    Estado
                    do Rio de Janeiro – 27/09/1995. </a></li>

                    <li>* Medalha Tiradentes da ALERJ – autor: Deputado Nelson Gonçalves – 20/05/1998.</li>

                <li>* Diploma de Honra – Polícia Militar do Estado do Rio de Janeiro – 29/02/1996.</li>

                <li>* Diploma de Agradecimento Rotaract Club Volta Redonda – 26/06/2004.</li>

                <li>* Certificado de Agradecimento à Diretoria pelos Funcionários – 19/05/2005</li>
                <li>* Placa Parceira da Unimed de Volta Redonda – 14/01/2007.</li>

                <li>* Medalha pelo 50º aniversário do Instituto Poligrafico da Itália.</li>

                <li>* Moção de Congratulação Câmara de Volta Redonda – 2003 – 2006 – 2008 (3) – 2010 – 2011 –
                    2022.
            </li>

                <li>* Medalha Getúlio Vargas de Mérito Legislativo – Câmara Municipal de VR – 01/09/2008.</li>

                <li>* Certificado de Amigo do Grupo Vih-Ver – de ajuda aos portadores do vírus HIV.</li>

                <li>* Honra ao Mérito Coopene – 6/5/2009.</li>

                <li>* Certificado Reconhecimento Perene Loja Maçônica Independência e Luz II.</li>

                <li>* Moção de Congratulações Câmara Municipal de Barra Mansa – 2004 e 2008.</li>

                <li>* Moção de Aplausos da Câmara de Pinheiral – 6/6/2006 – 2009.</li>

                <li>* Certificado Amigo da OAB de Volta Redonda – 25/08/2010.</li>

                <li>* Moção de Aplauso e Louvor – Autor: Deputado Delegado Antonio Furtado – Câmara Federal –
                    04/05/2022.</li>
                   
            </ul>
        </div>
        <div class="d-flex justify-content-center" >
            <a class="px-3 py-2 btn fs-5 fs-md-3 my-3" href="https://drive.google.com/drive/folders/18M_NdIIUmOZiFEWw7_NGAAkA6d1njBS2" style="background: var(--cor-secundary); color: #fff; text-transform: uppercase;border-radius: 12px; "><img src="{{asset('assets/img/premio.svg')}}" width="40" alt="" class="mx-3">veja aqui nossos prêmios e títulos</a>
        </div>
    </div>
    
@endsection
