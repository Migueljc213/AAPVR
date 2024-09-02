@extends('paginas.layout-pages.default')

@section('titulo', 'Convênios')


@section('content')
    <section id="login" class="d-flex align-items-center justify-content-center"
        style="background: url({{ asset('assets/img/ConvenioBackground.svg') }}); min-height: 100vh">
        <div class="container d-flex align-items-center justify-content-center" style="gap:20px;">
            <div>
                <div class="d-flex flex-column">
                    <img src="{{ asset('assets/img/ConveniosImagem.svg') }}" alt="" style="position: relative;">
                </div>
                <div style="position: absolute !important;bottom: 15%;left: 10%;">
                    <p class=" p-1 fw-bold px-2"
                        style="font-size: 2rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                        ATENDIMENTO 100%</p>
                </div>
                <div style=" position: absolute !important;bottom: 0;left: 10%;">
                    <h3 class="p-1 fw-bold px-3"
                        style="font-size: 5rem; color: #fff; background:var(--cor-secundary); text-transform: uppercase ">
                        vantagens</h3>
                </div>
                <div style="position: absolute !important;bottom: -80px;left: 10%;">
                    <p class=" p-1 fw-bold px-2"
                        style="font-size: 2rem; color: #fff; background: var(--cor-primary); display:inline-block;">
                        APPVR</p>
                </div>
            </div>
            <div>
                <h2 class="text-center text-md-start" style="color: #fff; font-size: 1rem; ">
                    O Clube de Vantagens AAh2-VR é um programa de benefícios exclusivos para associados e funcionários da
                    AAP-VR que visa aproximar e fidelizar associados.
                    <br> <br>
                    São descontos, promoções ou formas diferenciadas de pagamento, numa rede de estabelecimentos de
                    segmentos diversificados. São mais de 25 segmentos, como água e gás, alimentação, aparelhos auditivos,
                    atividades físicas, clínicas médicas e exames, clínica veterinária, cursos e instituições de ensino,
                    farmácias, estética e beleza, laboratórios, odontologia, óticas, papelaria e presente, roupas e
                    acessórios, serviços para automóveis, terapias diversas, e serviços de turismo e eventos.
                </h2>
                <span class=" d-flex text-center" style="color: #ffde00">
                    O Grupo AAP-VR não se responsabilizará pelos serviços
                    prestados aos associados pela empresa parceira.Sempre consultar
                    Regulamentos, Convênios e Tabelas vigentes.
                </span>
            </div>
        </div>

    </section>
    <article>
        <div class="container">
            <h1 class="fs-1 my-5 " style="color:var(--cor-primary);font-family: 'Bebas Neue'; margin-left: 50px">CATEGORIAS</h1>
            <div class="row d-flex justify-content-around align-items-start" style="gap: 10px; font-size: .8rem">
                <div class="col-12 col-md-4 col-lg-2" style="text-transform: uppercase">
                    <ul class="d-flex align-items-start justify-content-center flex-column">
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px" >
                            <img src="{{asset('assets/img/categorias/img1.svg')}}" alt="" width='80' height='80' >
                            <p class="fw-bold" style="color: #22647b; ">advocacia</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img2.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">casa e
                                decoração</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img3.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">hospitais</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img4.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">planos
                                assistenciais</p>
                        </li>
                       
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-2" style="text-transform: uppercase">
                    <ul class="d-flex align-items-start justify-content-center flex-column">
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img5.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">alimentação
                                e bebidas</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img6.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">alimentação
                                e bebidas</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img7.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">odontologia</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img8.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">papelaria
                                e presentes</p>
                        </li>
                       
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-2" style="text-transform: uppercase">
                    <ul class="d-flex align-items-start justify-content-center flex-column">
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img9.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">papelaria
                                e presentes</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img10.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">educação</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img11.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">ótica</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img12.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">saúde, médicos
                                e clínicas</p>
                        </li>
                       
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-2" style="text-transform: uppercase">
                    <ul class="d-flex align-items-start justify-content-center flex-column">
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img13.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">aparelhos
                                auditivos</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img14.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">empréstimos</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img15.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">acessórios</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img16.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">saúde, exames
                                e laboratórios</p>
                        </li>
                       
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-2" style="text-transform: uppercase">
                    <ul class="d-flex align-items-start justify-content-center flex-column">
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img17.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">beleza e
                                estética</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img18.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">esporte
                                e lazer</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img19.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">pet</p>
                        </li>
                        <li class="d-flex align-items-start justify-content-center pb-2 mb-4" style="gap:10px">
                            <img src="{{asset('assets/img/categorias/img20.svg')}}" alt="" width='80' height='80'>
                            <p class="fw-bold" style="color: #22647b; ">viagens, cultura
                                e turismo</p>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </article>

    <article>
        <div class="container">
            <h1 class="fs-1 my-5 " style="color:var(--cor-primary);font-family: 'Bebas Neue'; margin-left: 50px; text-transform: uppercase">nossos convênios</h1>
            <h3 class="fs-1 my-5 " style="color:#22647b;font-family: 'Bebas Neue'; margin-left: 50px; text-transform: uppercase">advocacia</h3>
            <div id="nosso-convenio" class="d-flex align-items-center justify-content-center " style="gap: 10px">
                <div class="col-12 col-md-6 col-lg-3 p-3 mb-3" style=" background: linear-gradient(to right, #0389b7, #2eb8d2); border-radius: 12px">
                    <h4 class="fw-bold fs-5" style="color: #fff">RAIO X DA SUA
                        APOSENTADORIA</h4>
                    <p style="color: #fff; font-size: .8rem">Rua Luis Ponce, 160 – Centro – Barra Mansa – RJ<br>
                        Telefone: (24) 97402-9383<br>
                        Serviços oferecidos: Planejamento Previdenciário para aposentados, ações de requerimento, indenizatórias, revisionais, etc.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3 mb-3" style=" background: linear-gradient(to right, #0389b7, #2eb8d2); border-radius: 12px">
                    <h4 class="fw-bold fs-5" style="color: #fff">RAIO X DA SUA
                        APOSENTADORIA</h4>
                    <p style="color: #fff; font-size: .8rem">Rua Luis Ponce, 160 – Centro – Barra Mansa – RJ<br>
                        Telefone: (24) 97402-9383<br>
                        Serviços oferecidos: Planejamento Previdenciário para aposentados, ações de requerimento, indenizatórias, revisionais, etc.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3 mb-3" style=" background: linear-gradient(to right, #0389b7, #2eb8d2); border-radius: 12px">
                    <h4 class="fw-bold fs-5" style="color: #fff">RAIO X DA SUA
                        APOSENTADORIA</h4>
                    <p style="color: #fff; font-size: .8rem">Rua Luis Ponce, 160 – Centro – Barra Mansa – RJ<br>
                        Telefone: (24) 97402-9383<br>
                        Serviços oferecidos: Planejamento Previdenciário para aposentados, ações de requerimento, indenizatórias, revisionais, etc.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3 mb-3" style=" background: linear-gradient(to right, #0389b7, #2eb8d2); border-radius: 12px">
                    <h4 class="fw-bold fs-5" style="color: #fff">RAIO X DA SUA
                        APOSENTADORIA</h4>
                    <p style="color: #fff; font-size: .8rem">Rua Luis Ponce, 160 – Centro – Barra Mansa – RJ<br>
                        Telefone: (24) 97402-9383<br>
                        Serviços oferecidos: Planejamento Previdenciário para aposentados, ações de requerimento, indenizatórias, revisionais, etc.</p>
                </div>
            </div>

            <h3 class="fs-1 my-5 " style="color:#22647b;font-family: 'Bebas Neue'; margin-left: 50px; text-transform: uppercase">alimentos e bebidas</h3>
            <div id="nosso-convenio" class="d-flex align-items-center justify-content-center " style="gap: 10px">
                <div class="col-12 col-md-6 col-lg-3 p-3 mb-3" style=" background: linear-gradient(to right, #0389b7, #2eb8d2); border-radius: 12px">
                    <h4 class="fw-bold fs-5" style="color: #fff">ARMAZEM DIET</h4>
                    <p style="color: #fff; font-size: .8rem">Rua Luis Ponce, 160 – Centro – Barra Mansa – RJ<br>
                        Telefone: (24) 97402-9383<br>
                        Serviços oferecidos: Planejamento Previdenciário para aposentados, ações de requerimento, indenizatórias, revisionais, etc.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3 mb-3" style=" background: linear-gradient(to right, #0389b7, #2eb8d2); border-radius: 12px">
                    <h4 class="fw-bold fs-5" style="color: #fff">ARMAZEM DIET</h4>
                    <p style="color: #fff; font-size: .8rem">Rua Luis Ponce, 160 – Centro – Barra Mansa – RJ<br>
                        Telefone: (24) 97402-9383<br>
                        Serviços oferecidos: Planejamento Previdenciário para aposentados, ações de requerimento, indenizatórias, revisionais, etc.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3 mb-3" style=" background: linear-gradient(to right, #0389b7, #2eb8d2); border-radius: 12px">
                    <h4 class="fw-bold fs-5" style="color: #fff">ARMAZEM DIET</h4>
                    <p style="color: #fff; font-size: .8rem">Rua Luis Ponce, 160 – Centro – Barra Mansa – RJ<br>
                        Telefone: (24) 97402-9383<br>
                        Serviços oferecidos: Planejamento Previdenciário para aposentados, ações de requerimento, indenizatórias, revisionais, etc.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3 mb-3" style=" background: linear-gradient(to right, #0389b7, #2eb8d2); border-radius: 12px">
                    <h4 class="fw-bold fs-5" style="color: #fff">ARMAZEM DIET</h4>
                    <p style="color: #fff; font-size: .8rem">Rua Luis Ponce, 160 – Centro – Barra Mansa – RJ<br>
                        Telefone: (24) 97402-9383<br>
                        Serviços oferecidos: Planejamento Previdenciário para aposentados, ações de requerimento, indenizatórias, revisionais, etc.</p>
                </div>
            </div>
            

            <h3 class="fs-1 my-5 " style="color:#22647b;font-family: 'Bebas Neue'; margin-left: 50px; text-transform: uppercase">APARELHOs AUDITIVOs</h3>
            <div id="nosso-convenio" class="d-flex align-items-start justify-content-center " style="gap: 10px">
                <div class="col-12 col-md-6 col-lg-3 p-3 mb-3" style=" background: linear-gradient(to right, #0389b7, #2eb8d2); border-radius: 12px">
                    <h4 class="fw-bold fs-5" style="color: #fff">JMS APARELHOS
                        AUDITIVOS</h4>
                    <p style="color: #fff; font-size: .8rem">Largo 9 de Abril, 27/803, Vila Stª Cecília, Volta Redonda –  RJ<br>
                        Telefone: (24) 3342-9144<br>
                        Serviços Oferecidos: Aparelhos auditivos</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3 mb-3" style=" background: linear-gradient(to right, #0389b7, #2eb8d2); border-radius: 12px">
                    <h4 class="fw-bold fs-5" style="color: #fff">RAIO X DA SUA
                        APOSENTADORIA</h4>
                    <p style="color: #fff; font-size: .8rem">Rua Luis Ponce, 160 – Centro – Barra Mansa – RJ<br>
                        Telefone: (24) 97402-9383<br>
                        Serviços oferecidos: Planejamento Previdenciário para aposentados, ações de requerimento, indenizatórias, revisionais, etc.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3 mb-3" style=" background: linear-gradient(to right, #0389b7, #2eb8d2); border-radius: 12px">
                    <h4 class="fw-bold fs-5" style="color: #fff">RAIO X DA SUA
                        APOSENTADORIA</h4>
                    <p style="color: #fff; font-size: .8rem">Rua Luis Ponce, 160 – Centro – Barra Mansa – RJ<br>
                        Telefone: (24) 97402-9383<br>
                        Serviços oferecidos: Planejamento Previdenciário para aposentados, ações de requerimento, indenizatórias, revisionais, etc.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3 mb-3" style=" background: linear-gradient(to right, #0389b7, #2eb8d2); border-radius: 12px">
                    <h4 class="fw-bold fs-5" style="color: #fff">RAIO X DA SUA
                        APOSENTADORIA</h4>
                    <p style="color: #fff; font-size: .8rem">Rua Luis Ponce, 160 – Centro – Barra Mansa – RJ<br>
                        Telefone: (24) 97402-9383<br>
                        Serviços oferecidos: Planejamento Previdenciário para aposentados, ações de requerimento, indenizatórias, revisionais, etc.</p>
                </div>
            </div>
        </div>
    </article>
@endsection
