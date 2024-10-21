<div>
    <div class="page">
        <div class="page-wrapper">
            <div class="col-12">
                <div class="card container">

                    <div class="d-flex justify-content-start">
                        <button id="modalBtnOpen" class="btn btn-primary my-3 mx-2 " onclick="newNews()"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Novo usuário">Novo Usuário</button>
                    </div>

                    <div class=" d-flex justify-content-between align-items-center my-3">
                        <h1 class="fw-bold px-3 fs-3 fs-md-1">Lista de Usuários</h1>
                        <input type="text" class="form-control my-3 rounded w-50 fs-xm-6" wire:model.live='search'
                            placeholder="Pesquese o usuario...">
                    </div>

                    <table class="responsive-table table mx-2 " style="width: 100% ">
                        <thead class="p-3">
                            <tr class="text-start">
                                <th class="p-2">Nome</th>
                                <th class="p-2">Email</th>
                                <th class="p-2">CPF</th>
                                <th class="p-2">Açoes</th>
                            <tr>
                        </thead>
                        <tbody class="">
                            @foreach ($usuarios as $user)
                                <tr class="text-start px-2" wire:key="{{ $user->id }}">
                                    <td class="py-2 px-1">{{ $user['name'] }}</td>
                                    <td class="py-2 px-1">{{ $user['email'] }}</td>
                                    <td class="py-2 px-1 ">{{ $user['cpf'] }}</td>
                                    <td class="py-2 px-1 d-flex  align-items-center text-start" style="gap: 10px;">
                                        <a href="{{ route('user.destroy', ['id' => $user['id']]) }}"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Apagar usuário"
                                            class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                        <a href="{{ route('user.edit', ['id' => $user['id']]) }}"
                                            class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Editar usuário"><i class="fa-solid fa-gear "
                                                style="color: #fff"></i></a>
                                        <form action="{{ route('user.updateStatus', ['id' => $user['id']]) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="checkbox" name="status" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Ativar/Desativar usuário"
                                                style="width: 15px; height: 15px; cursor: pointer; border-radius: 4px"
                                                onchange="this.form.submit()"
                                                {{ $user->status == 'active' ? 'checked' : '' }}>
                                        </form>
                                    </td>
                                <tr>
                            @endforeach

                        </tbody>

                    </table>
                    <div class="mb-3 ">
                        {{ $usuarios->links('vendor.pagination.bootstrap-5', data: ['scrollTo' => false]) }}
                    </div>
                </div>

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
            </div>
        </div>
    </div>
    <div id="modalNew" class="justify-content-center align-items-center">
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
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button class="modalBtnClose" class="btn ">Fechar</button>
                </div>
            </form>

        </div>
    </div>
</div>
</div>

<script>
    function newNews() {
        const modal = document.getElementById('modalNewUser');
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

</div>
