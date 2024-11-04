<x-app-layout>
    <div class="justify-content-center align-items-center">
        <div class="container py-3" style="box-shadow: 4px 4px 4px rgba(0,0,0,0.5); max-width: 400px;">
            <h1 class="text-center fw-bold" style="color: black">Editar Passeio</h1>
            <form action="{{ route('passeios.update', ['id' => $passeio['id']]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" name="titulo" id="titulo"
                        value="{{ $passeio->titulo }}">
                </div>

                <div class="mb-2">
                    <label for="subtitulo" class="form-label">Subtítulo</label>
                    <input type="text" class="form-control" name="subtitulo" id="subtitulo"
                        value="{{ $passeio->subtitulo }}">
                </div>
                <div class="mb-2">
                    <label for="imagem1" class="form-label">1º Imagem</label>
                    <div class="d-flex align-items-center">
                        <img src="{{ Storage::url($passeio->imagem1) }}" alt="Imagem atual" style="max-width: 80px;"
                        class="rounded px-2">
                        <input type="file" class="form-control" name="imagem1" id="imagem1"
                            value="{{ $passeio->imagem1 }}">
                    
                    </div>
                </div>
                <div class="mb-2">
                    <label for="imagem2" class="form-label">2º Imagem</label>
                    <div class="d-flex align-items-center">
                        <img src="{{ Storage::url($passeio->imagem2) }}" alt="Imagem atual" style="max-width: 80px;"
                        class="rounded px-2">
                        <input type="file" class="form-control" name="imagem2" id="imagem2"
                            value="{{ $passeio->imagem2 }}">
                    
                    </div>
                </div>
                <div class="mb-2">
                    <label for="imagem3" class="form-label">3º Imagem</label>
                    <div class="d-flex align-items-center">
                        <img src="{{ Storage::url($passeio->imagem3) }}" alt="Imagem atual" style="max-width: 80px;"
                        class="rounded px-2">
                        <input type="file" class="form-control" name="imagem3" id="imagem3"
                            value="{{ $passeio->imagem3 }}">
                    
                    </div>
                </div>
                <div class="mb-2">
                    <label for="imagem4" class="form-label">4º Imagem</label>
                    <div class="d-flex align-items-center">
                        <img src="{{ Storage::url($passeio->imagem4) }}" alt="Imagem atual" style="max-width: 80px;"
                        class="rounded px-2">
                        <input type="file" class="form-control" name="imagem4" id="imagem4"
                            value="{{ $passeio->imagem4 }}">
                    
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-end" style="gap: 20px">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button class="modalBtnClose" class="btn ">Fechar</button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
