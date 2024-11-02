@extends("layouts.main")

@section("title", "SINPROBAU - Diretoria")

@section("content")
    <div class="max-w-7xl mx-auto flex flex-col items-center gap-10 md:gap-20 text-gray-300 opacity-100 px-10 md:px-20 py-10 md:py-20">
        <div class="flex flex-col gap-1">
            <h1 class="text-[#454545] text-center font-sans font-bold text-[32px] leading-[40px] self-stretch">
                Conheça a nossa Diretoria
            </h1>
            <h2 class="text-[#454545] font-sans font-normal text-[24px] leading-[40px]">
                do SINPROBAU com mandato vigente 2022-2027
            </h2>
        </div>

        <div class="grid grip-cols-1 md:grid-cols-2 md2:grid-cols-4 gap-8 justify-items-center">
            @foreach ($directors as $director)
                <div class="w-full h-full bg-[#D9D9D9] flex-shrink-0 flex flex-col justify-end items-center gap-2">
                    <div class="w-[calc(100%-1rem)] h-[320px] overflow-hidden flex items-center justify-center mx-2 mt-2">
                        <img
                            src="/images/directors/{{ $director["image"] }}"
                            alt="Imagem do Presidente"
                            class="object-cover w-full h-full"
                        />
                    </div>
                    <div class="w-[calc(100%-1rem)] flex-1 bg-[#fff] flex flex-col justify-center items-center shadow-md mx-2 mb-2 px-4 py-4">
                        <div class="text-center text-[#454545] font-sans font-bold text-[20px] leading-[32px]">
                            {{ $director["role"] }}
                        </div>
                        <div class="text-center text-[#454545] font-sans font-normal text-[20px] leading-[32px]">
                            {{ $director["name"] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
