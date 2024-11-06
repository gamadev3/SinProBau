@extends("layouts.main")

@section("title", "SINPROBAU - Educação Básica")

@section("content")
    <div class="w-full h-full flex justify-center items-center">
        <h1>Educação Básica</h1>
    </div>

@foreach ($news as $new)
<div class="w-full md2:w-1/4 flex flex-col mt-4 shadow-md rounded-lg">
    <div class="rounded-t-2xl overflow-hidden">
        <img src="/images/news/{{ $new['image'] }}" class="w-full h-full object-cover" alt="">
    </div>
    <div class="flex flex-col gap-4 px-6 py-10 flex-1">
        <p>{{ $new["date"] }}</p>
        <h1 class="text-xl font-bold">{{ $new["title"] }}</h1>
        <button class="mt-auto text-[#138942] hover:text-white border border-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base px-5 py-2.5 text-center">Ler noticia</button>
    </div>
</div>
@endforeach


@endsection
