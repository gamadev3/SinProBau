@extends("layouts.main")

@section("title", "SINPROBAU - Notícias")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col gap-8 p-10 md:px-20 md:py-20">
        <h1 class="text-4xl font-bold text-center">{{ $notice->title }}</h1>
        <img src="{{ $notice->image_url }}" alt="{{ $notice->title }}" class="w-full sm:w-1/2 mx-auto">
        <div class="flex justify-between">
            <p>{{ date("d/m/Y", strtotime($notice->created_at)) }}</p>
            <input id="share" type="text" class="hidden" value="{{ url()->current() }}" disabled readonly>
            <button data-copy-to-clipboard-target="share" class="flex items-center gap-2 font-bold">
                Compartilhe
                <img src="/images/icons/share-nodes.svg" alt="Compartilhe">
            </button>
        </div>
        <p class="text-xl text-justify">{!! nl2br($notice->content) !!}</p>
        <h1 class="text-4xl font-bold mt-8">Veja mais</h1>
        <div class="w-full flex flex-col md2:flex-row justify-between gap-6">
            @foreach ($news as $notice)
                <div class="w-full md2:w-1/3 flex flex-col mt-4 shadow-md rounded-lg">
                    <div class="rounded-t-2xl overflow-hidden">
                        <img src="{{ $notice->image_url }}" class="w-full h-full object-cover" alt="{{ $notice->title }}">
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
