@extends("layouts.system")

@section("title", "SINPROBAU - Sistema")

@section("content")
    <div class="w-full flex flex-col gap-8 p-7 md:p-10">
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
            <h1 class="font-bold text-3xl text-center">Carrossel</h1>

            <div class="w-full sm:w-fit flex justify-between items-center flex-col sm:flex-row gap-2">
                <a href="/sistema/imagem-carrossel-formulario" class="w-full h-12 text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:ring-[#A5D6A7] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none flex items-center gap-2 self-end">
                    <img src="/images/icons/plus.svg" alt="Cadastrar notícia">
                    Cadastrar imagem
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
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 table-auto">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="pl-6 pr-4 py-3">
                                Alt
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
                        @forelse ($carousel as $carouselItem)
                            <tr class="odd:bg-white even:bg-gray-50">
                                <th scope="row" class="pl-6 pr-4 py-4 font-medium text-gray-900">
                                    {{ $carouselItem->alt }}
                                </th>
                                <td class="px-4 py-4">
                                    <a href="/sistema/imagem-carrossel-formulario-atualizacao/{{ $carouselItem->id }}" class="w-fit text-white bg-[#5974C4] hover:bg-[#485d9e] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 sm:px-3 py-2.5 flex items-center justify-center gap-2">
                                        <img src="/images/icons/edit.svg" alt="Editar">
                                        Editar
                                    </a>
                                </td>
                                <td class="pl-4 pr-6 py-4">
                                    <x-delete-modal
                                        :id="$carouselItem->id"
                                        :title="'Você tem certeza de que deseja deletar este registro?'"
                                        :type="'imagem-carrossel'"
                                    />
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center text-gray-900">
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
