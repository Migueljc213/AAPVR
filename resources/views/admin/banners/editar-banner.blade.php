<x-app-layout>
    <div class="justify-content-center align-items-center">
        <div class="container py-3" style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5); max-width: 400px;">
            <form action="{{ route('banners.update', ['id' => $banner['id']]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="text-center fw-bold">Editar banner</h1>
                <div class="mb-2">
                    <label for="img" class="form-label fw-bold">URL IMAGEM*</label>
                    <input type="file" class="form-control" name="img" id="img" value="{{$banner['img']}}">
                </div>
                <div class="mb-2">
                    <label for="title" class="form-label fw-bold">Titulo*</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{$banner['title']}}">
                </div>

                <div class="mb-2">
                    <label for="description" class="form-label fw-bold">Descrição*</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{$banner['description']}}">
                </div>
                <div class="mb-2">
                    <label for="link" class="form-label fw-bold">Link*</label>
                    <input type="text" class="form-control" name="link" id="link" value="{{$banner['link']}}">
                </div>

                <div class="d-flex align-items-center justify-content-end" style="gap: 20px">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button onclick="{{redirect()->route('banners.index')->with('null')}}" class="btn ">Voltar</button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
