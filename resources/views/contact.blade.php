@extends("layouts.main")

@section("title", "SINPROBAU - Contato")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col md:flex-row gap-8 p-10 md:px-20 md:py-20">
        <div class="w-full md:w-1/2 flex flex-col gap-4 md:gap-2">
            <h1 class="text-3xl font-bold">Contato</h1>
            <p>Preencha o formulário abaixo com os seus dados que o mais breve possível entraremos em contato</p>
            <div class="mt-5 flex flex-col gap-4">
                <p>Ou, entre em contato através do telefone:</p>
                <div class="flex items-center gap-2">
                    <img src="/images/ic_round-phone.svg" alt="Telefone" width="30" class="h-10 flex items-center">
                    <p class="h-10 flex items-center font-bold text-xl">(14) 3879-5313</p>
                </div>
            </div>
        </div>
        <form class="w-full md:w-1/2 md:px-4 py-4">
            <div class="min- grid gap-2 mb-6 md:grid-cols-2">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
                    <input type="text" id="name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] block w-full p-2.5 outline-none" placeholder="Digite o seu nome" required />
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-mail</label>
                    <input type="email" id="email" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] block w-full p-2.5 outline-none" placeholder="Digite o seu e-mail" required />
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Celular</label>
                        <input type="tel" id="phone" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] block w-full p-2.5 outline-none" placeholder="Digite o seu telefone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                </div>
            </div>
            <div class="mb-6">
                <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900">Observações</label>
                <textarea type="text" id="large-input" class="block w-full h-40 p-4 text-gray-900 border border-gray-300 rounded-lg bg-white text-base focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] outline-none" placeholder="Digite alguma observação"></textarea>
            </div>
            <button type="submit" class="text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base w-full px-5 py-2.5 text-center">Submit</button>
        </form>
    </div>
@endsection
