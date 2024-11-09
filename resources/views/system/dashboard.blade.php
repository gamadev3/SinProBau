@extends("layouts.system")

@section("title", "SINPROBAU - Sistema")

@section("content")
    <div class="w-full flex flex-col gap-8 p-10 md:px-20 md:py-20">
        <div class="flex justify-between">
            <h1 class="font-bold text-3xl">Cadastrar Notícias</h1>
            <a href="/news-form" class="w-fit text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none flex items-center gap-2">
                <img src="/images/mdi_plus.svg" alt="Cadastrar notícia">
                Cadastrar notícia
            </a>
        </div>
        <div class="flex flex-col gap-4">
            <div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
                <x-system-table
                    :news="$news"
                />
            </div>
        </div>
    </div>
@endsection
