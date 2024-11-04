<x-app-layout>
    <div class="justify-content-center align-items-center">
        <div class="container py-3" style="box-shadow: 4px 4px 4px rgba(0,0,0,0.5); max-width: 400px;">
            <h1 class="text-center fw-bold" style="color: black">Editar workshop</h1>
            <form action="{{ route('workshops.update', ['id' => $workshop['id']]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" name="titulo" id="titulo"
                        value="{{ $workshop->titulo }}">
                </div>

                <div class="mb-2">
                    <label for="video" class="form-label">Link do video</label>
                    <input type="text" class="form-control" name="video" id="video"
                        value="{{ $workshop->video }}">
                </div>
                <div class="mb-2">
                    <label for="imagem1" class="form-label">1º Imagem</label>
                    <div class="d-flex align-items-center">
                        <img src="{{ Storage::url($workshop->imagem1) }}" alt="Imagem atual" style="max-width: 80px;"
                        class="rounded px-2">
                        <input type="file" class="form-control" name="imagem1" id="imagem1"
                            value="{{ $workshop->imagem1 }}">
                    
                    </div>
                </div>
                <div class="mb-2">
                    <label for="imagem2" class="form-label">2º Imagem</label>
                    <div class="d-flex align-items-center">
                        <img src="{{ Storage::url($workshop->imagem2) }}" alt="Imagem atual" style="max-width: 80px;"
                        class="rounded px-2">
                        <input type="file" class="form-control" name="imagem2" id="imagem2"
                            value="{{ $workshop->imagem2 }}">
                    
                    </div>
                </div>
                <div class="mb-2">
                    <label for="imagem3" class="form-label">3º Imagem</label>
                    <div class="d-flex align-items-center">
                        <img src="{{ Storage::url($workshop->imagem3) }}" alt="Imagem atual" style="max-width: 80px;"
                        class="rounded px-2">
                        <input type="file" class="form-control" name="imagem3" id="imagem3"
                            value="{{ $workshop->imagem3 }}">
                    
                    </div>
                </div>
                <div class="mb-2">
                    <label for="imagem4" class="form-label">4º Imagem</label>
                    <div class="d-flex align-items-center">
                        <img src="{{ Storage::url($workshop->imagem4) }}" alt="Imagem atual" style="max-width: 80px;"
                        class="rounded px-2">
                        <input type="file" class="form-control" name="imagem4" id="imagem4"
                            value="{{ $workshop->imagem4 }}">
                    
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
