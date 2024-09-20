<x-app-layout>
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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 " tyle="min-width: 80vw;">
                    <button id="modalBtnOpen" class="btn btn-primary my-3" onclick="add()">Criar Banner</button>

                    <table class="p-3 text-center" style="min-width: 100%;">
                        <thead class="p-3" style="border: solid 1px gray;">
                            <tr>
                                <th class="p-2">Imagem</th>
                                <th class="p-2">Nome</th>
                                <th class="p-2">Descrição</th>
                                <th class="p-2">Açoes</th>
                            <tr>
                        </thead>
                        <tbody class="mt-3">
                            @foreach ($banners as $banner)
                                <tr >
                                    <td class="p-1 py-2 d-flex justify-content-center">
                                        <p><img src="{{ asset($banner['img']) }}" alt="" width="80"></p>
                                    </td>
                                    <td class="p-1 py-2">
                                        <p>{{ $banner['title'] }}</p>
                                    </td>
                                    <td class="p-1 py-2">
                                        <p>{{ $banner['description'] }}</p>
                                    </td>

                                    <td class="p-1  " style="gap: 10px;">
                                        <a href="{{ route('banners.edit', ['id' => $banner['id']]) }}"
                                            class="btn btn-info btn-sm">
                                            <i class="fa-solid fa-gear" style="color: #fff"></i>
                                        </a>
                                        <a href="{{ route('banners.destroy', ['id' => $banner['id']]) }}"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa-solid fa-trash" style="color: #fff"></i>
                                        </a>


                                    </td>

                                <tr>
                            @endforeach

                        </tbody>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('fail'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </table>

                </div>
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
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button class="modalBtnClose" class="btn ">Fechar</button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>

<script>
    function add() {
        const modal = document.getElementById('modalNew');
        const modalBtnOpen = document.getElementById('modalBtnOpen');
        const modalBtnClose = document.querySelectorAll('.modalBtnClose');
        console.log()

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
