@extends("layouts.main")

@section("title", "SINPROBAU")

@section("content")
    <div class="w-full h-full flex justify-center items-center">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <div class="relative h-24 md:h-[70vh] overflow-hidden">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/banners/banner_educacao.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-fill" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/banners/banner_carteirinha.jpeg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-fill" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/banners/atendimento-presencial2.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-fill" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/banners/banner.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-fill" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/banners/2.png" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-fill" alt="...">
                </div>
            </div>
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Anterior</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Próximo</span>
                </span>
            </button>
        </div>
    </div>
    <div class="px-10 md:px-20 py-10 md:py-20 flex flex-col gap-8">
        <div class="flex flex-col gap-2">
            <div class="flex flex-col md:flex-row justify-between gap-2">
                <h1 class="text-3xl font-bold">Notícias em alta</h1>
                <div class="flex items-center gap-2 self-end">
                    <a href="/news" class="text-[#138942] font-bold hover:underline">Ver todas as notícias</a>
                    <img src="/images/Vector.svg" alt="Seta" width="8">
                </div>
            </div>
            <div class="flex flex-col md:flex-row mt-4 shadow-md rounded-2xl">
                <div class="md:w-1/3 rounded-t-2xl md:rounded-l-2xl md:rounded-t-none overflow-hidden">
                    <img src="/images/image.png" class="w-full h-full object-cover" alt="">
                </div>
                <div class="md:w-2/3 flex flex-col gap-4 px-6 md:px-14 md2:px-20 py-10">
                    <p>22 Abril 2022</p>
                    <h1 class="text-xl md2:text-2xl md:text-3xl font-bold">Professor: Você conhece a composição do seu salário?</h1>
                    <button class="w-fit text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base px-5 py-2.5 text-center">Ler notícia</button>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-2">
            <h1 class="text-3xl font-bold">Campanhas salarial</h1>
            <div class="w-full flex flex-col md2:flex-row justify-between gap-6">
                @foreach ($news as $new)
                    <div class="w-full md2:w-1/4 flex flex-col mt-4 shadow-md rounded-lg">
                        <div class="rounded-t-2xl overflow-hidden">
                            <img src="/images/news/{{ $new["image"] }}" class="w-full h-full object-cover" alt="">
                        </div>
                        <div class="flex flex-col gap-4 px-6 py-10 flex-1">
                            <p>{{ $new["date"] }}</p>
                            <h1 class="text-xl font-bold">{{ $new["title"] }}</h1>
                            <button class="mt-auto text-[#138942] hover:text-white border border-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base px-5 py-2.5 text-center">Ler notícia</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
