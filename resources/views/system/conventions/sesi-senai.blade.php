@extends("layouts.system")

@section("title", "SINPROBAU - Sistema")

@section("content")
    <div class="w-full flex flex-col gap-8 p-7 md:p-10">
        <h1 class="font-bold text-3xl border-b-2 border-['#ccc'] pb-4">Sesi/Senai</h1>
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
            <h1 class="font-bold text-3xl text-center">Cadastrar convenções</h1>

            <div class="w-full sm:w-fit flex justify-between items-center flex-col sm:flex-row gap-2">
                <x-search :url="'sesi-senai'" />

                <a href="/system/convention-form/sesi-senai" class="w-full sm:w-2/3 md:w-full h-12 text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:ring-[#A5D6A7] font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none flex items-center gap-2 self-end">
                    <img src="/images/icons/plus.svg" alt="Cadastrar convenção">
                    Cadastrar convenção
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
                <x-system-table
                    :data="$conventions"
                    :type="'convention'"
                />
            </div>
        </div>
    </div>
@endsection
