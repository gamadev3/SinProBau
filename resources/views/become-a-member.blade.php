@extends("layouts.main")

@section("title", "SINPROBAU - Seja Sócio")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col gap-8 p-7 md:p-20">
        <h1 class="text-4xl font-bold">CONTATO</h1>
        <h1 class="text-3xl font-bold">Autorização de sindicalização</h1>
        <p>Se você, professor, gostou de nossas propostas preencha o formulário abaixo e torne-se um associado.</p>

        @if (session("error"))
            <x-error :message="session('error')" />
        @endif

        @if (session("success"))
            <div class="py-2">
                <x-success :message="session('success')" />
            </div>
        @endif

        <form id="send-email-form" method="POST" action="send-email" enctype="multipart/form-data">
            @csrf
            <ol class="flex justify-between items-center w-full text-xs text-gray-900 font-medium sm:text-base">
                <li class="stepIndicator flex w-full relative text-[#138942]  after:content-['']  after:w-full after:h-0.5  after:bg-gray-200 after:inline-block after:absolute after:top-3 after:left-4">
                   <div class="block whitespace-nowrap z-10">
                       <span class="w-6 h-6 bg-gray-50 border-2 border-gray-200 rounded-full flex justify-center items-center mr-auto mb-3 text-s-10">1</span>
                       <p class="hidden sm:block">Informações pessoais</p>
                   </div>
                </li>
                <li class="stepIndicator flex w-full justify-center relative  after:content-['']  after:w-full after:h-0.5  after:bg-gray-200 after:inline-block after:absolute after:top-3 after:left-4">
                   <div class="block whitespace-nowrap z-10">
                       <span class="w-6 h-6 -translate-x-2/3 bg-gray-50 border-2 border-gray-200 rounded-full flex justify-center items-center mx-auto mb-3 text-s-10">2</span>
                       <p class="hidden sm:block -translate-x-1/4">Endereço</p>
                   </div>
                </li>
                <li class="stepIndicator flex w-full justify-center relative  after:content-['']  after:w-full after:h-0.5  after:bg-gray-200 after:inline-block after:absolute  after:top-3 after:left-4">
                   <div class="block whitespace-nowrap z-10">
                       <span class="w-6 h-6 translate-x-2/3 bg-gray-50 border-2 border-gray-200 rounded-full flex justify-center items-center mx-auto mb-3 text-sm">3</span>
                       <p class="hidden sm:block translate-x-1/4">Trabalho</p>
                   </div>
                </li>
                <li class="stepIndicator flex w-full relative  before:content-['']  before:w-full before:-translate-x-10 before:h-0.5  before:bg-gray-200 before:inline-block before:absolute  before:top-3 before:left-4">
                   <div class="w-full block whitespace-nowrap z-10">
                       <span class="w-6 h-6 bg-gray-50 border-2 border-gray-200 rounded-full flex justify-center items-center ml-auto mb-3 text-sm">4</span>
                       <p class="text-end hidden sm:block">Folha da instituição</p>
                   </div>
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
