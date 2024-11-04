@extends("layouts.main")

@section("title", "SINPROBAU - Carteirinha Virtual")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col md2:flex-row gap-8 px-10 md:px-20 py-10 md:py-20">
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
            <img src="/images/0261849e-1d30-4fd6-9baa-7235b1145367 1.png" alt="Ilustração de pessoa com celular" class="w-2/3">
            <p class="text-center">Para baixar sua carteirinha virtual clique em uma das lojas abaixo:</p>
            <div class="flex flex-col md:flex-row w-full justify-center gap-2 md:gap-8">
                <button type="button" class="flex items-center justify-center md:w-48 mt-3 text-white bg-black h-14 rounded-xl">
                    <div class="mr-3">
                        <svg viewBox="0 0 384 512" width="30">
                            <path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z">
                            </path>
                        </svg>
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
                        <svg viewBox="30 336.7 120.9 129.2" width="30">
                            <path fill="#FFD400" d="M119.2,421.2c15.3-8.4,27-14.8,28-15.3c3.2-1.7,6.5-6.2,0-9.7  c-2.1-1.1-13.4-7.3-28-15.3l-20.1,20.2L119.2,421.2z">
                            </path>
                            <path fill="#FF3333" d="M99.1,401.1l-64.2,64.7c1.5,0.2,3.2-0.2,5.2-1.3  c4.2-2.3,48.8-26.7,79.1-43.3L99.1,401.1L99.1,401.1z">
                            </path>
                            <path fill="#48FF48" d="M99.1,401.1l20.1-20.2c0,0-74.6-40.7-79.1-43.1  c-1.7-1-3.6-1.3-5.3-1L99.1,401.1z">
                            </path>
                            <path fill="#3BCCFF" d="M99.1,401.1l-64.3-64.3c-2.6,0.6-4.8,2.9-4.8,7.6  c0,7.5,0,107.5,0,113.8c0,4.3,1.7,7.4,4.9,7.7L99.1,401.1z">
                            </path>
                        </svg>
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
