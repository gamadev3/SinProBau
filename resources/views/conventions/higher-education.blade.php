@extends("layouts.main")

@section("title", "SINPROBAU - Ensino Superior")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col gap-8 px-10 md:px-20 py-10 md:py-20">
        <h1 class="text-3xl font-bold">Convenção Ensino Superior</h1>
        <div class="w-full flex flex-col rounded-lg">
            @foreach ($conventions as $convention)
                <div class="flex flex-col sm:flex-row justify-between gap-4 py-10">
                    <div class="flex flex-col gap-2">
                        <div class="flex gap-2">
                            <img src="/images/mdi_calendar-blank.svg" alt="Data">
                            <p class="text-lg">{{ date("d/m/Y", strtotime($convention["date"])) }}</p>
                        </div>
                        <h1 class="text-xl">{{ $convention["title"] }}</h1>
                    </div>
                    <div class="flex flex-col justify-end">
                        <button class="w-full sm:w-fit text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base flex gap-2 items-center justify-center px-5 py-2.5 text-center">
                            <img src="/images/plus.svg" alt="">
                            Ler notícia
                        </button>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endsection
