@extends("layouts.main")

@section("title", "SINPROBAU - Diretoria")

@section("content")
    <div class="w-full md2:max-w-7xl mx-auto flex flex-col items-center gap-10 text-gray-300 opacity-100 px-5 md:p20 py-10">
        <div class="flex flex-col gap-1">
            <h1 class="text-[#454545] text-center font-sans font-bold text-[32px] leading-[40px] self-stretch">
                Conheça a nossa Diretoria
            </h1>
            <h2 class="text-[#454545] font-sans font-normal text-[24px] leading-[40px]">
                do SINPROBAU com mandato vigente 2022-2027
            </h2>
        </div>
        <div class="grid grip-cols-1 md:grid-cols-2 md2:grid-cols-4 w-full gap-8 justify-items-center">
            @foreach ($directors as $director)
                <div class="relative w-full aspect-square bg-[#D9D9D9] flex flex-col justify-center items-center gap-2">
                    <img
                        src="/images/directors/{{ $director["image"] }}"
                        alt="Imagem do Presidente"
                        class="object-cover w-full h-full"
                    />
                    <div class="absolute bottom-0 w-[calc(100%-2rem)] bg-[#fff] flex flex-col justify-center items-center shadow-md mx-4 mb-4 p-1">
                        <div class="text-center text-[#454545] font-sans font-bold text-sm leading-1">
                            {{ $director["role"] }}
                        </div>
                        <div class="text-center text-[#454545] font-sans font-normal text-sm leading-1">
                            {{ $director["name"] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
