@extends("layouts.main")

@section("title", "SINPROBAU")

@section("content")
    <div class="mx-auto h-screen flex justify-center items-center px-5 md:px-20 py-20">
        <div class="w-full md2:min-w-36 md2:max-w-[738px] md:p-4 md2:p-8 flex flex-col gap-8 rounded-lg md:shadow-lg md2:shadow-lg">
            <div class="w-full flex justify-center">
                <img src="/images/logo-sinprobau.png" alt="Logo do SINPROBAU">
            </div>
            <form method="POST" action="{{ URL("/authentication") }}" class="flex flex-col justify-between gap-8">
                @csrf

                @if (Session::has("error"))
                    <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">{{ Session::get("error") }}</span>
                        </div>
                    </div>
                @endif

                <div class="flex flex-col gap-2">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-mail</label>
                        <input type="text" id="email" name="email" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] block w-full p-2.5 outline-none" placeholder="Digite o seu e-mail" required />
                    </div>
                    @error("email")
                        <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">{{ $message }}</span>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Senha</label>
                        <input type="text" id="password" name="password" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] block w-full p-2.5 outline-none" placeholder="Digite a sua senha" required />
                    </div>
                    @error("password")
                        <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">{{ $message }}</span>
                            </div>
                        </div>
                    @enderror
                </div>
                <button type="submit" class="text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base w-full px-5 py-2.5 text-center">Entrar</button>
            </form>
        </div>
    </div>
@endsection
