@extends("layouts.main")

@section("title", "SINPROBAU - Notícias")

@section("content")
    <div class="px-5 md:px-20 py-10 md:py-20 flex flex-col gap-8">
        @if ($trendingNotice)
            <div class="flex flex-col gap-2">
                <h1 class="text-3xl font-bold">Notícias em alta</h1>
                <div class="flex flex-col md2:flex-row mt-4 shadow-md rounded-2xl overflow-hidden">
                    <div class="md2:w-1/2">
                        <img src="{{ $trendingNotice->image_url }}" class="w-full h-full object-cover" alt="">
                    </div>
                    <div class="md2:w-1/2 flex flex-col gap-4 px-6 md:px-14 md2:px-20 py-10">
                        <p>{{ date("d/m/Y", strtotime($trendingNotice->created_at)) }}</p>
                        <h1 class="text-xl md2:text-2xl md:text-3xl font-bold">{{ $trendingNotice->title }}</h1>
                        <a href="/notice/{{ $trendingNotice->id }}" target="_blank" class="w-fit text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base px-5 py-2.5 text-center">Ler notícia</a>
                    </div>
                </div>
            </div>
        @endif
        <div class="w-full flex flex-col justify-between gap-6">
            @forelse ($news as $notice)
                <x-news
                    :image="$notice->image_url"
                    :date="$notice->created_at"
                    :title="$notice->title"
                    :content="$notice->content"
                    :id="$notice->id"
                />
            @empty
                <p class="py-4 text-gray-900 text-center">Ainda não há nenhuma notícia.</p>
            @endforelse
        </div>
    </div>
@endsection
