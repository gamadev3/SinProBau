<table class="w-full text-sm text-left rtl:text-right text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3">
                Título
            </th>
            <th scope="col" class="px-6 py-3">
                Data
            </th>
            <th scope="col" class="px-6 py-3">
                Última modificação
            </th>
            <th scope="col" class="px-6 py-3">
                Editar
            </th>
            <th scope="col" class="px-6 py-3">
                Deletar
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $notice)
            <tr class="odd:bg-white even:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $notice->title }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ date("d/m/Y", strtotime($notice->created_at)) }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ date("d/m/Y", strtotime($notice->updated_at)) }}
                </th>
                <td class="px-6 py-4">
                    <a href="/news-update-form/{{ $notice->id }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar</a>
                </td>
                <td class="px-6 py-4">
                    <x-delete-modal
                        :id="$notice->id"
                        :title="'Você tem certeza de que deseja deletar esta notícia?'"
                    />
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
