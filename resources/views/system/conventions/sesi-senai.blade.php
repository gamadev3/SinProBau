@extends("layouts.system")

@section("title", "SINPROBAU - Sistema")

@section("content")
    <div class="w-full flex flex-col gap-8 p-5 md:p-10">
        <h1 class="font-bold text-3xl border-b-2 border-['#ccc'] pb-4">Sesi/Senai</h1>
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
            <h1 class="font-bold text-3xl">Cadastrar convenções</h1>

            <div class="w-full sm:w-fit flex justify-between items-center flex-col sm:flex-row gap-2">
                <form action="/system/news" class="w-full h-fit mx-auto">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="h-full relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" name="search" class="block w-full h-12 p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar" required />
                    </div>
                </form>

                <a href="/system/convention-form/sesi-senai" class="w-full h-12 text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:ring-[#A5D6A7] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none flex items-center gap-2 self-end">
                    <img src="/images/mdi_plus.svg" alt="Cadastrar notícia">
                    Cadastrar convenção
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            @if (session("success"))
                <div class="py-2">
                    <x-success :message="Session::get('success')" />
                </div>
            @endif
            <div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
                <x-system-table
                    :data="$conventions"
                    :type="'convention'"
                />
            </div>
        </div>
    </div>
@endsection
