<table class="w-full text-sm text-left rtl:text-right text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="pl-6 pr-4 py-3">
                Título
            </th>
            @if ($type == "notice")
                <th scope="col" class="px-4 py-3 text-center">
                    Campanha Salarial
                </th>
            @endif
            @if ($type == "notice")
                <th scope="col" class="px-4 py-3 text-center">
                    Em Alta
                </th>
            @endif
            <th scope="col" class="px-4 py-3">
                Data
            </th>
            <th scope="col" class="px-4 py-3">
                Última modificação
            </th>
            <th scope="col" class="px-4 py-3">
                Editar
            </th>
            <th scope="col" class="pl-4 pr-6 py-3">
                Deletar
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $dataItem)
            <tr class="odd:bg-white even:bg-gray-50">
                <th scope="row" class="pl-6 pr-4 font-medium text-gray-900">
                    {!! nl2br(e(strlen($dataItem->title) > 20 ? substr($dataItem->title, 0, 20) . "..." : $dataItem->title)) !!}
                </th>
                @if ($type == "notice")
                    <th scope="row" class="px-4 py-4 font-medium text-gray-900">
                        <div class="flex justify-center items-center">
                            {!!
                                $dataItem->salary_campaign
                                    ? "<img src='/images/icons/checked.svg' class='w-5' alt='Sim'>"
                                    : "<img src='/images/icons/not.svg' class='w-5' alt='Sim'>"
                            !!}
                        </div>
                    </th>
                @endif
                @if ($type == "notice")
                    <th scope="row" class="px-4 py-4 font-medium text-gray-900">
                        <div class="flex justify-center items-center">
                            {!!
                                $dataItem->is_trending
                                    ? "<img src='/images/icons/checked.svg' class='w-5' alt='Sim'>"
                                    : "<img src='/images/icons/not.svg' class='w-5' alt='Sim'>"
                            !!}
                        </div>
                    </th>
                @endif
                <th scope="row" class="px-4 py-4 font-medium text-gray-900">
                    {{ date("d/m/Y", strtotime($dataItem->created_at)) }}
                </th>
                <th scope="row" class="px-4 py-4 font-medium text-gray-900">
                    {{ date("d/m/Y", strtotime($dataItem->updated_at)) }}
                </th>
                <td class="px-4 py-4">
                    <a href="/system/{{ $type }}-update-form/{{ $dataItem->id }}" class="w-fit text-white bg-[#5974C4] hover:bg-[#485d9e] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center gap-2">
                        <img src="/images/icons/edit.svg" alt="Editar">
                        Editar
                    </a>
                </td>
                <td class="pl-4 pr-6 py-4">
                    <x-delete-modal
                        :id="$dataItem->id"
                        :title="'Você tem certeza de que deseja deletar este registro?'"
                        :type="$type"
                    />
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="px-4 py-4 text-center text-gray-900">
                    Ainda não há registros.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
