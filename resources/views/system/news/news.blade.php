@extends("layouts.system")

@section("title", "SINPROBAU - Sistema")

@section("content")
    <div class="w-full flex flex-col gap-8 p-7 md:p-10">
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
            <h1 class="font-bold text-3xl text-center">Cadastrar Notícias</h1>

            <div class="w-full sm:w-fit flex justify-between items-center flex-col sm:flex-row gap-2">
                <x-search :url="'noticias'" />

                <a href="/sistema/noticia-formulario" class="w-full h-12 text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:ring-[#A5D6A7] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none flex items-center gap-2 self-end">
                    <img src="/images/icons/plus.svg" alt="Cadastrar notícia">
                    Cadastrar notícia
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            @if (session("success"))
                <div class="py-2">
                    <x-success :message="session('success')" />
                </div>
            @endif
            <div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="pl-6 pr-4 py-3">
                                Título
                            </th>
                            <th scope="col" class="px-2 py-3 text-center">
                                Campanha Salarial
                            </th>
                            <th scope="col" class="px-2 py-3 text-center">
                                Em Alta
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Data
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Última modificação
                            </th>
                            <th scope="col" class="px-2 py-3">
                                Editar
                            </th>
                            <th scope="col" class="pl-4 pr-6 py-3">
                                Deletar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($news as $notice)
                            <tr class="odd:bg-white even:bg-gray-50">
                                <th scope="row" class="pl-6 pr-4 font-medium text-gray-900">
                                    {!! nl2br(e(strlen($notice->title) > 20 ? substr($notice->title, 0, 20) . "..." : $notice->title)) !!}
                                </th>
                                <th scope="row" class="px-2 py-4 font-medium text-gray-900">
                                    <div class="flex justify-center items-center">
                                        {!!
                                            $notice->salary_campaign
                                                ? "<img src='/images/icons/checked.svg' class='w-5' alt='Sim'>"
                                                : "<img src='/images/icons/not.svg' class='w-5' alt='Sim'>"
                                        !!}
                                    </div>
                                </th>
                                <th scope="row" class="px-2 py-4 font-medium text-gray-900">
                                    <div class="flex justify-center items-center">
                                        {!!
                                            $notice->is_trending
                                                ? "<img src='/images/icons/checked.svg' class='w-5' alt='Sim'>"
                                                : "<img src='/images/icons/not.svg' class='w-5' alt='Sim'>"
                                        !!}
                                    </div>
                                </th>
                                <th scope="row" class="px-2 py-4 font-medium text-gray-900">
                                    {{ date("d/m/Y", strtotime($notice->created_at)) }}
                                </th>
                                <th scope="row" class="px-2 py-4 font-medium text-gray-900">
                                    {{ date("d/m/Y", strtotime($notice->updated_at)) }}
                                </th>
                                <td class="px-2 py-4">
                                    <a href="/sistema/noticia-formulario-atualizacao/{{ $notice->id }}" class="w-fit text-white bg-[#5974C4] hover:bg-[#485d9e] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 md:px-3 py-2.5 flex items-center justify-center gap-2">
                                        <img src="/images/icons/edit.svg" alt="Editar">
                                        Editar
                                    </a>
                                </td>
                                <td class="pl-4 pr-6 py-4">
                                    <x-delete-modal
                                        :id="$notice->id"
                                        :title="'Você tem certeza de que deseja deletar este registro?'"
                                        :type="'noticia'"
                                    />
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-2 py-4 text-center text-gray-900">
                                    Ainda não há registros.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
