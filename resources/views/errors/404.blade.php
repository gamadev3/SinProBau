@extends("layouts.main")

@section("title", "SINPROBAU")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex gap-8 p-10 md:px-20 md:py-20">
        <div class="py-8 px-4 mx-auto max-w-screen-xl">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="mb-4 text-7xl tracking-tight font-extrabold text-[#138942]">404</h1>
                <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl">Página não encontrada.</p>
                <p class="mb-4 text-lg font-light text-gray-500">Desculpe, não conseguimos encontrar essa página.</p>
                <a href="/" class="inline-flex text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-4">Voltar para a página inicial</a>
            </div>
        </div>
    </div>
@endsection
