@extends("layouts.main")

@section("title", "SINPROBAU - Sistema")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col gap-8 p-10 md:px-20 md:py-20">
        <h1 class="font-bold text-3xl">Sistema</h1>
        <div class="flex flex-col gap-4">
            <div class="w-full relative overflow-x-auto shadow-md sm:rounded-lg">
                <x-system-table
                    :news="$news"
                />
            </div>
            <a href="/news-form" class="w-fit text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Cadastrar notícia</a>
        </div>
        <form method="POST" action="{{ URL("/logout") }}">
            @csrf
            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                Deslogar
            </button>
        </form>
    </div>
@endsection
