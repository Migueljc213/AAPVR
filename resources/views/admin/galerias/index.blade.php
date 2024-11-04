<x-app-layout>

    <body>
        <div class="page">
            <div class="page-wrapper">
                <!-- Page header -->
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        <div class="row">
                            <a  class="col-12 col-md-2" href="{{ route('galeria.show', ['id' => 1]) }}" data-toggle="tooltip" data-placement="top" title="Click para abrir a lista de imagens do projeto Pacote-Office">
                                <div id="OpenPacote" style="height: 300px">

                                    <div class="rounded hover h-100 w-100 text-center d-flex justify-content-center flex-column text-center "
                                        style="background: url({{ asset('assets/img/Projetos5.png') }}) no-repeat; background-size: contain;
                                    margin:0 auto;">

                                    </div>

                                </div>
                            </a>
                            <a  class="col-12 col-md-2" href="{{ route('galeria.show', ['id' => 3]) }}" data-toggle="tooltip" data-placement="top" title="Click para abrir a lista de imagens do projeto Educação Financeira">
                                <div id="OpenPacote" style="height: 300px">

                                    <div class="rounded hover h-100 w-100 text-center d-flex justify-content-center flex-column text-center "
                                        style="background: url({{ asset('assets/img/Projetos4.png') }}) no-repeat; background-size: contain;
                                    margin:0 auto;">

                                    </div>

                                </div>
                            </a>
                            <a  class="col-12 col-md-2" href="{{ route('galeria.show', ['id' => 4]) }}" data-toggle="tooltip" data-placement="top" title="Click para abrir a lista de imagens do projeto Educação Financeira">
                                <div id="OpenPacote" style="height: 300px">

                                    <div class="rounded hover h-100 w-100 text-center d-flex justify-content-center flex-column text-center "
                                        style="background: url({{ asset('assets/img/Projetos6.png') }}) no-repeat; background-size: contain;
                                    margin:0 auto;">

                                    </div>

                                </div>
                            </a>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>

        </div>
    </body>



</x-app-layout>
