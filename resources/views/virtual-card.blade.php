@extends("layouts.main")

@section("title", "SINPROBAU - Carteirinha Virtual")

@section("content")
<div class="flex flex-col md:flex-row justify-center items-start p-4">
    <!-- Primeira coluna -->
    <div class="flex-1 p-4">
        <h1 class="text-2xl font-bold mb-4">Carteirinha virtual</h1>
        <p class="mb-4">A sua CARTEIRINHA VIRTUAL chegou!</p>
        <p class="mb-4">
            O SinproBau + você acaba de lançar mais uma facilidade para você usufruir de mais de 60 convênios que
            disponibilizamos com exclusividade aos nossos sócios: o APP CARTEIRINHA VIRTUAL!
        </p>
        <p class="mb-4">
            Disponível nas plataformas Google Play Store e App Store (em breve), você pode baixar gratuitamente e já
            fazer uso, apenas com o NÚMERO DE SEU CADASTRO NO SINPROBAU (número da antiga carteirinha) e CPF.
        </p>
    </div>

    <!-- Segunda coluna -->
    <div class="flex-1 p-4 flex flex-col items-center">
        <img src="https://www.figma.com/file/d43Po3gG8JgXniPrkrAKCi/image/db0023f9a85da1e0b841e19ade68901bdff7692c" alt="Ilustração de pessoa com celular" class="w-64 mb-4">
        <p class="text-center mb-4">Para baixar sua carteirinha virtual clique em uma das lojas abaixo:</p>
        <div class="flex space-x-4">
            <a href="https://www.apple.com/app-store/" target="_blank">
                <img src="https://www.figma.com/file/d43Po3gG8JgXniPrkrAKCi/image/e29d07740c4a7ad694285a002e13f2e6140664ca" alt="App Store" class="h-12">
            </a>
            <a href="https://play.google.com/store" target="_blank">
                <img src="https://www.figma.com/file/d43Po3gG8JgXniPrkrAKCi/image/7e7b2f12c4f0107bb6972c2d8f3661ad199adeb5" alt="Google Play" class="h-12">
            </a>
        </div>
    </div>
</div>
@endsection
