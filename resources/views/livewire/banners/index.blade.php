<div>

    <style>
        #modalNew {
            background-color: rgba(0, 0, 0, .5);
            height: 100vh;
            width: 100vw;
            position: fixed;
            top: 0;
            left: 0;
            display: none;
            z-index: 1;
        }

        #modalNew div {
            background: #fff;
            margin: 0 auto;
            min-width: 400px;
            box-shadow: 0 0 0 10px white;
            box-sizing: border-box;
            position: relative;
            border-radius: 12px;
            padding: 10px
        }

        #modalNew div span {
            position: absolute;
            top: -30px;
            right: -30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            z-index: 1;
            border: 4px solid white;
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, .3);
            background-color: red;
            color: white;
            cursor: pointer;
            font-family: monospace;
            font-size: 1.2rem;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center
        }

        #modalNew.ativo {
            display: flex
        }
    </style>

    <body>

        <div class="page">
            <div class="page-wrapper">
                <div class="col-12">
                    <div class="card container">

                        <div class="d-flex justify-content-start">
                            <button id="modalBtnOpen" class="btn btn-primary my-3 mx-2 " onclick="newNews()"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Novo usuário">Novo Banner</button>
                        </div>

                        <div class=" d-flex justify-content-between my-3">
                            <h1 class="fw-bold px-3 fs-3 fs-md-1">Lista de Banners</h1>
                            <input type="text" class="form-control mb-3 rounded w-50"
                                wire:model.live='search' placeholder="Pesquise banners...">
                        </div>

                        <table class="table rounded mx-2"  style="width: 100% ">
                        
                            <thead class="px-2">
                                <tr class="text-start">
                                    <th class="p-2">Imagem</th>
                                    <th class="p-2">Nome</th>
                                    <th class="p-2">Descrição</th>
                                    <th class="p-2">Açoes</th>

                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($banners as $banner)
                                    <tr >
                                        <td class="py-2 px-1 ">
                                            <p><img src="{{ asset($banner['img']) }}" alt="" width="80">
                                            </p>
                                        </td>
                                        <td class="py-2 px-1">
                                            <p>{{ $banner['title'] }}</p>
                                        </td>
                                        <td class="py-2 px-1">
                                            <p>{{ $banner['description'] }}</p>
                                        </td>

                                        <td class="py-2 px-1" style="gap: 10px;">
                                            <a href="{{ route('banners.edit', ['id' => $banner['id']]) }}"
                                                class="btn btn-info btn-sm rounded-2">
                                                <i class="fa-solid fa-gear fa-1x" style="color: #fff"></i>
                                            </a>
                                            <a href="{{ route('banners.destroy', ['id' => $banner['id']]) }}"
                                                class="btn btn-danger btn-sm rounded-2">
                                                <i class="fa-solid fa-trash fs-1x" style="color: #fff"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mb-3 ">
                            {{ $banners->links() }}
                        </div>

                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('fail'))
                        <div class="alert alert-success">
                            {{ session('fail') }}
                        </div>
                    @endif
                </div>




            </div>
        </div>

        <div id="modalNew" class="justify-content-center align-items-center">
            <div>
                <span class="modalBtnClose">X</span>
                <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label for="img" class="form-label">URL IMAGEM</label>
                        <input type="file" class="form-control" name="img" id="img">
                    </div>
                    <div class="mb-2">
                        <label for="title" class="form-label">Titulo</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>

                    <div class="mb-2">
                        <label for="description" class="form-label">Descrição</label>
                        <input type="text" class="form-control" name="description" id="description">
                    </div>
                    <div class="mb-2">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" name="link" id="link">
                    </div>

                    <div class="d-flex align-items-center justify-content-end" style="gap: 20px">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button class="modalBtnClose" class="btn ">Fechar</button>
                    </div>
                </form>

            </div>
        </div>
        <script>
            function add() {
                const modal = document.getElementById('modalNew');
                const modalBtnOpen = document.getElementById('modalBtnOpen');
                const modalBtnClose = document.querySelectorAll('.modalBtnClose');
           

                modalBtnOpen.addEventListener('click', () => {
                    modal.classList.add('ativo')
                });

                modalBtnClose.forEach(Btn => {
                    Btn.addEventListener('click', () => {
                        modal.classList.remove('ativo')
                    })
                });

            }
        </script>
    </body>
</div>
