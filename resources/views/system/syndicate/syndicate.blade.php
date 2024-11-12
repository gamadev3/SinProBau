@extends("layouts.system")

@section("title", "SINPROBAU - Sistema")

@section("content")
    <div class="w-full flex flex-col gap-8 p-5 md:p-10">
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
            <h1 class="font-bold text-3xl text-center">Sindicato</h1>

            <div class="w-full sm:w-fit flex justify-between items-center flex-col sm:flex-row gap-2">
                <x-search :url="'syndicate'" />

                <a href="/system/syndicate-form" class="w-full h-12 text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:ring-[#A5D6A7] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none flex items-center gap-2 self-end">
                    <img src="/images/icons/plus.svg" alt="Cadastrar diretor(a)">
                    Cadastrar diretor(a)
                </a>
            </div>
        </div>
        @if (session("success"))
            <div class="py-2">
                <x-success :message="Session::get('success')" />
            </div>
        @endif
        <div class="flex flex-col gap-8">
            <form action="/system/syndicate-update-duration" method="POST" id="date-range-picker" class="flex flex-col md2:flex-row md2:items-center gap-2">
                @csrf
                @method("POST")
                <div class="flex gap-2 items-center">
                    <div class="relative w-full sm:max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input
                            id="datepicker-orientation-start"
                            name="start"
                            datepicker datepicker-orientation="bottom"
                            datepicker-format="dd/mm/yyyy"
                            type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                            placeholder="Selecione a data"
                            value="{{ date("d/m/Y", strtotime($direction->start_date)) }}"
                        >
                    </div>
                    <p class="text-gray-500">até</p>
                    <div class="relative w-full sm:max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input
                            id="datepicker-orientation-end"
                            name="end"
                            datepicker datepicker-orientation="bottom"
                            datepicker-format="dd/mm/yyyy"
                            type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                            placeholder="Selecione a data"
                            value="{{ date("d/m/Y", strtotime($direction->end_date)) }}"
                        >
                    </div>
                </div>
                <button type="submit" class="w-full sm:w-fit h-12 text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:ring-[#A5D6A7] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                    Atualizar período de vigência
                </button>
            </form>
            <div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 table-auto">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="pl-6 pr-4 py-3">
                                Nome
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Cargo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Editar
                            </th>
                            <th scope="col" class="pl-4 pr-6 py-3">
                                Deletar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($directors as $director)
                            <tr class="odd:bg-white even:bg-gray-50">
                                <th scope="row" class="pl-6 pr-4 py-4 font-medium text-gray-900">
                                    {{ $director->name }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                                    {{ $director->role }}
                                </th>
                                <td class="px-6 py-4">
                                    <a href="/system/director-update-form/{{ $director->id }}" class="text-white bg-[#5974C4] hover:bg-[#485d9e] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center gap-2">
                                        <img src="/images/icons/edit.svg" alt="Editar">
                                        Editar
                                    </a>
                                </td>
                                <td class="pl-4 pr-6 py-4">
                                    <x-delete-modal
                                        :id="$director->id"
                                        :title="'Você tem certeza de que deseja deletar este registro?'"
                                        :type="'director'"
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
