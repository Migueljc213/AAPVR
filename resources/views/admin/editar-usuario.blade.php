<x-app-layout>
    <div class="justify-content-center align-items-center">
        <div class="container py-3" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5); max-width: 400px;">
            <form action="{{ route('user.update', ['id' => $noticia['id']]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="text-center fw-bold">Editar Noticia</h1>
                <div class="mb-2">
                    <label for="name" class="form-label fw-bold">Nome*</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$noticia['name']}}">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label fw-bold">Email*</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{$noticia['email']}}">
                </div>

                <div class="mb-2">
                    <label for="cpf" class="form-label fw-bold">CPF*</label>
                    <input type="text" class="form-control" name="cpf" id="cpf" value="{{$noticia['cpf']}}">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label fw-bold">Senha*</label>
                    <input type="text" class="form-control" name="password" id="password" value="{{$noticia['password']}}">
                </div>

                <div class="d-flex align-items-center justify-content-end" style="gap: 20px">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button onclick="{{redirect()->route('admin.noticias')->with('null')}}" class="btn ">Voltar</button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
