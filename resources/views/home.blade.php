@extends("layouts.main")

@section("title", "SINPROBAU")

@section("content")
    <x-carousel />
    <div class="px-5 py-10 md:p-20 flex flex-col gap-16">
        <div class="flex flex-col gap-2">
            <div class="flex flex-col md:flex-row justify-between gap-2">
                <h1 class="text-3xl font-bold">Notícias</h1>
                <div class="flex items-center gap-2 self-end">
                    <a href="/news" class="text-[#138942] font-bold hover:underline">Ver todas as notícias</a>
                    <img src="/images/icons/right-arrow-green.svg" alt="Ler notícias" width="8">
                </div>
            </div>
            @if (count($news) > 0)
                <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
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
            @else
                <p class="py-4 text-gray-900">Ainda não há nenhuma notícia relacionada à Campanha Salarial</p>
            @endif
        </div>
        <div class="flex flex-col gap-2">
            <h1 class="text-3xl font-bold">Campanhas salarial</h1>
            @if (count($salaryCampaign) > 0)
                <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach ($salaryCampaign as $notice)
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
            @else
                <p class="py-4 text-gray-900">Ainda não há nenhuma notícia relacionada à Campanha Salarial</p>
            @endif
        </div>
    </div>
@endsection
