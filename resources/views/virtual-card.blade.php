@extends("layouts.main")

@section("title", "SINPROBAU - Carteirinha Virtual")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col md2:flex-row gap-8 p-7 md:p-20">
        <div class="w-full md2:w-1/2 h-full flex flex-col gap-8">
            <h1 class="text-3xl font-bold">Carteirinha virtual</h1>
            <p>A sua CARTEIRINHA VIRTUAL chegou!</p>
            <p class="text-justify">
                O SinproBau + você acaba de lançar mais uma facilidade para você usufruir de mais de 60 convênios que
                disponibilizamos com exclusividade aos nossos sócios: o APP CARTEIRINHA VIRTUAL!
            </p>
            <p class="text-justify">
                Disponível nas plataformas Google Play Store e App Store (em breve), você pode baixar gratuitamente e já
                fazer uso, apenas com o NÚMERO DE SEU CADASTRO NO SINPROBAU (número da antiga carteirinha) e CPF.
            </p>
        </div>
        <div class="w-full md2:w-1/2 h-full flex flex-col items-center gap-4">
            <img src="/images/0261849e-1d30-4fd6-9baa-7235b1145367 1.webp" alt="Ilustração de pessoa com celular" class="w-2/3">
            <p class="text-center">Para baixar sua carteirinha virtual clique em uma das lojas abaixo:</p>
            <div class="flex flex-col md:flex-row w-full justify-center gap-2 md:gap-8">
                <button type="button" class="flex items-center justify-center md:w-48 mt-3 text-white bg-black h-14 rounded-xl">
                    <div class="mr-3">
                        <img src="/images/icons/app-store.svg" alt="App Store">
                    </div>
                    <div>
                        <div class="text-xs">
                            Baixar na
                        </div>
                        <div class="-mt-1 font-sans text-xl font-semibold">
                            App Store
                        </div>
                    </div>
                </button>
                <button type="button" class="flex items-center justify-center md:w-48 mt-3 text-white bg-black rounded-lg h-14">
                    <div class="mr-3">
                        <img src="/images/icons/google-play.svg" alt="Google Play">
                    </div>
                    <div>
                        <div class="text-xs">
                            DISPONÍVEL NO
                        </div>
                        <div class="-mt-1 font-sans text-xl font-semibold">
                            Google Play
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
@endsection
