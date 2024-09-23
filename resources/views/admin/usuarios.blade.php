<x-app-layout>
    <style>
        #modalNewUser {
            background-color: rgba(0, 0, 0, .5);
            height: 100vh;
            width: 100vw;
            position: fixed;
            top: 0;
            left: 0;
            display: none;
            z-index: 1;
        }

        #modalNewUser div {
            background: #fff;
            margin: 0 auto;
            min-width: 400px;
            box-shadow: 0 0 0 10px white;
            box-sizing: border-box;
            position: relative;
            border-radius: 12px;
            padding: 10px
        }

        #modalNewUser div span {
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

        #modalNewUser.ativo {
            display: flex
        }
     
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button id="modalBtnOpen" class="btn btn-primary my-3 mx-2" onclick="newNews()" data-bs-toggle="tooltip" data-bs-placement="top" title="Novo usuário">Novo Usuário</button>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin: 0 10px">
                <div class="p-6 text-gray-900 " tyle="min-width: 80vw; ">
                    <table class="responsive-table  p-3 text-center" style="min-width: 100%; ">
                        <thead class="p-3" style="border: solid 1px gray;">
                            <tr class="text-start">
                                <th class="p-2">Nome</th>
                                <th class="p-2">Email</th>
                                <th class="p-2">CPF</th>
                                <th class="p-2">Açoes</th>
                            <tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $user)
                                <tr class="text-start">
                                    <td class="p-1">{{ $user['name'] }}</td>
                                    <td class="p-1">{{ $user['email'] }}</td>
                                    <td class="p-1 ">{{ $user['cpf'] }}</td>
                                    <td class="p-1 d-flex  align-items-center text-start" style="gap: 10px;">
                                        <a  href="{{ route('user.destroy', ['id' => $user['id']]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Apagar usuário"
                                            class="btn btn-danger btn-sm" ><i class="fa-solid fa-trash"></i></a>
                                        <a href="{{ route('user.edit', ['id' => $user['id']]) }}"  
                                            class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar usuário"><i class="fa-solid fa-gear "
                                                style="color: #fff"></i></a>
                                        <form action="{{ route('user.updateStatus', ['id' => $user['id']]) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="checkbox" name="status" data-bs-toggle="tooltip" data-bs-placement="top" title="Ativar/Desativar usuário" style="width: 15px; height: 15px; cursor: pointer; border-radius: 4px" onchange="this.form.submit()"
                                                {{ $user->status == 'active' ? 'checked' : '' }}> 
                                        </form>
                                    </td>
                                <tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
    <div id="modalNewUser" class="justify-content-center align-items-center">
        <div>
            <span class="modalBtnClose">X</span>
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="mb-2">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="cpf">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <label for="role">Nivel do Usuário</label>
                <select name='role' id='role'>
                    <option value="">Nivel do Usuário</option>
                    <option value="admin">Administrador</option>
                    <option value="user">Usuario</option>
                </select>
                <div class="d-flex align-items-center justify-content-end" style="gap: 20px">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button class="modalBtnClose" class="btn ">Fechar</button>
                </div>
            </form>

        </div>
    </div>

    <script>
        function newNews() {
            const modal = document.getElementById('modalNewUser');
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

</x-app-layout>
