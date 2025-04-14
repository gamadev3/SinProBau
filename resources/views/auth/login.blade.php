@extends("layouts.system")

@section("title", "SINPROBAU")

@section("content")
    <a href="/" class="flex items-center gap-2 font-bold fixed top-7 left-5 hover:underline">
        <img src="/images/icons/back.svg" alt="Voltar" class="w-2 h-2.5">
        Voltar
    </a>
    <div class="w-full h-full mx-auto min-h-[calc(100vh-5rem)] flex justify-center items-center px-5 md:px-20 py-20">
        <div class="w-full md2:w-96 md:p-8 md2:p-8 flex flex-col gap-8 rounded-lg md:shadow-lg md2:shadow-lg">
            <div class="w-full flex justify-center">
                <img src="/images/logo-sinprobau.webp" alt="Logo do SINPROBAU">
            </div>
            <form method="POST" action="/autenticar" class="flex flex-col justify-between gap-8">
                @csrf
                @method("POST")

                @if (Session::has("error"))
                    <x-error :message="session('error')" />
                @endif

                <div class="flex flex-col gap-2">
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
                <div class="flex flex-col gap-2">
                    <x-input
                        :name="'password'"
                        :type="'password'"
                        :label="'Senha'"
                        :placeholder="'Digite a sua senha'"
                    />
                    @error("password")
                        <x-error :message="$message" />
                    @enderror
                </div>
                <button type="submit" class="text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base w-full px-5 py-2.5 text-center">Entrar</button>
            </form>
        </div>
    </div>
@endsection
