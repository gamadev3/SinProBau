@extends("layouts.main")

@section("title", "SINPROBAU - Seja Sócio")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col gap-8 p-5 md:px-20 md:py-20">
        <h1 class="text-4xl font-bold">CONTATO</h1>
        <h1 class="text-3xl font-bold">Autorização de sindicalização</h1>
        <p>Se você, professor, gostou de nossas propostas preencha o formulário abaixo e torne-se um associado.</p>

        @if (session("error"))
            <x-error :message="Session::get('error')" />
        @endif

        @if (session("success"))
            <div class="py-2">
                <x-success :message="Session::get('success')" />
            </div>
        @endif

        <form id="send-email-form" method="POST" action="send-email">
            @csrf
            <ol class="flex flex-col sm:flex-row items-center w-full text-sm font-medium text-center text-gray-500 sm:text-base">
                <li class="stepIndicator flex gap-2 md:w-full items-center text-[#138942] sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
                    <img src="/images/icons/verified.svg" alt="Verificado" class="hidden w-3.5 sm:w-5">
                    <span class="flex items-center text-base after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                        Informações pessoais
                    </span>
                </li>
                <li class="stepIndicator flex gap-2 md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
                    <img src="/images/icons/verified.svg" alt="Verificado" class="hidden w-3.5 sm:w-5">
                    <span class="flex items-center text-base after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                        Endereço
                    </span>
                </li>
                <li class="stepIndicator flex gap-2 md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
                    <img src="/images/icons/verified.svg" alt="Verificado" class="hidden w-3.5 sm:w-5">
                    <span class="flex items-center text-base after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
                        Trabalho
                    </span>
                </li>
                <li class="stepIndicator flex text-base gap-2 items-center">
                    <img src="/images/icons/verified.svg" alt="Verificado" class="hidden w-3.5 sm:w-5">
                    Folha da instituição
                </li>
            </ol>

            <div class="step py-10">
                <x-step-one/>
            </div>
            <div class="step py-10">
                <x-step-two/>
            </div>
            <div class="step py-10">
                <x-step-three/>
            </div>
            <div class="step py-10">
                <x-step-four/>
            </div>
            <div class="form-footer flex justify-between gap-3">
                <button type="button" id="prevBtn" class="w-fit text-[#138942] hover:text-white border-2 border-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base px-10 py-2.5 text-center">Anterior</button>
                <button type="button" id="nextBtn" class="w-fit ml-auto text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base px-5 py-2.5 text-center"">Próximo</button>
            </div>
        </form>
    </div>
@endsection
