@extends("layouts.main")

@section("title", "SINPROBAU - Contato")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col md:flex-row gap-8 p-5 md:px-20 md:py-20">
        <div class="w-full md:w-1/2 flex flex-col gap-4 md:gap-2">
            <h1 class="text-3xl font-bold">Contato</h1>
            <p>Preencha o formulário abaixo com os seus dados que o mais breve possível entraremos em contato</p>
            <div class="mt-5 flex flex-col gap-4">
                <p>Ou, entre em contato através do telefone:</p>
                <div class="flex items-center gap-2">
                    <img src="/images/icons/phone.svg" alt="Telefone" width="30" class="h-10 flex items-center">
                    <p class="h-10 flex items-center font-bold text-xl">(14) 3879-5313</p>
                </div>
            </div>
        </div>
        <form method="POST" action="/send-contact-email" class="w-full md:w-1/2 md:px-4 py-4">
            @csrf

            @if (session("error"))
                <x-error :message="Session::get('error')" />
            @endif

            @if (session("success"))
                <div class="py-2">
                    <x-success :message="Session::get('success')" />
                </div>
            @endif

            <div class="grid gap-2 mb-6 md:grid-cols-2">
                <div>
                    <x-input
                        :name="'name'"
                        :type="'name'"
                        :label="'Nome'"
                        :placeholder="'Digite o seu nome'"
                    />
                    @error("name")
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="mb-6">
                    <x-input
                        :name="'email'"
                        :type="'email'"
                        :label="'E-mail'"
                        :placeholder="'Digite o seu e-mail'"
                    />
                    @error("email")
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div>
                    <x-input
                        :name="'phone'"
                        :type="'tel'"
                        :label="'Celular'"
                        :placeholder="'Digite o seu celular'"
                    />
                    @error("phone")
                        <x-error :message="$message" />
                    @enderror
                </div>
            </div>
            <div class="mb-6">
                <label
                    for="large-input"
                    class="block mb-2 text-sm font-medium text-gray-900"
                >Observações</label>
                <textarea
                    type="text"
                    id="large-input"
                    name="observation"
                    class="block w-full h-40 p-4 text-gray-900 border border-gray-300 rounded-lg bg-white text-base focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] outline-none"
                    placeholder="Digite alguma observação"
                ></textarea>
            </div>
            <button type="submit" class="text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base w-full px-5 py-2.5 text-center">Enviar</button>
        </form>
    </div>
@endsection
