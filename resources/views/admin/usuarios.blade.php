<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 " tyle="min-width: 80vw;">
                    <table class="p-3 text-center" style="min-width: 100%;">
                        <thead class="p-3" style="border: solid 1px gray;">
                            <tr>
                                <th class="p-2">Nome</th>
                                <th class="p-2">Email</th>
                                <th class="p-2">CPF</th>
                                <th class="p-2">Açoes</th>
                            <tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $user)
                                <tr>
                                    <td class="p-1">{{ $user['id'] }}</td>
                                    <td class="p-1">{{ $user['name'] }}</td>
                                    <td class="p-1">{{ $user['email'] }}</td>
                                    <td class="p-1">{{ $user['cpf'] }}</td>
                                    <td class="p-1 d-flex" style="gap: 10px;">
                                        <a href="{{route('user.destroy', ['id' => $user['id']])}}" class="btn btn-danger btn-sm"><i
                                                class="fa-solid fa-trash"></i></a>
                                        <a href="{{route('user.edit', ['id' => $user['id']])}}" class="btn btn-info btn-sm"><i
                                                class="fa-solid fa-gear " style="color: #fff"></i></a>
                                        
                                    </td>
                                <tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
