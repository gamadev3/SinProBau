@extends("layouts.main")

@section("title", "SINPROBAU - Notícias")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col gap-8 p-10 md:px-20 md:py-20">
        <h1 class="text-3xl sm:text-4xl font-bold text-center">{{ $notice->title }}</h1>
        <img src="{{ $notice->image_url }}" alt="{{ $notice->title }}" class="w-full sm:w-1/2 mx-auto">
        <div class="flex justify-between">
            <p>{{ date("d/m/Y", strtotime($notice->created_at)) }}</p>
            <input id="share" type="text" class="hidden" value="{{ url()->current() }}" disabled readonly>
            <button data-copy-to-clipboard-target="share" class="flex items-center gap-2 font-bold" data-tooltip-target="copy">
                Compartilhe
                <span id="default-icon">
                    <img src="/images/icons/share-nodes.svg" alt="Compartilhe">
                </span>
            </button>
            <div id="copy" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                <span id="default-tooltip-message">Clique para copiar</span>
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
        <p class="text-xl text-justify">{!! nl2br($notice->content) !!}</p>
        <h1 class="text-4xl font-bold mt-8">Veja mais</h1>
        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($news as $notice)
                <div class="w-full flex flex-col mt-4 shadow-md rounded-lg">
                    <div class="rounded-t-2xl overflow-hidden">
                        <img src="{{ $notice->image_url }}" class="w-full max-h-72 object-cover" alt="{{ $notice->title }}">
                    </div>
                    <div class="flex flex-col gap-4 px-6 py-10 flex-1">
                        <p>{{ date("d/m/Y", strtotime($notice->created_at)) }}</p>
                        <h1 class="text-xl font-bold">{{ $notice->title }}</h1>
                        <a href="/notice/{{ $notice->id }}" class="mt-auto text-[#138942] hover:text-white border border-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base px-5 py-2.5 text-center">Ler notícia</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
