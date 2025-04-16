@extends("layouts.main")

@section("title", "SINPROBAU - Diretoria")

@section("content")
    <div class="w-full flex-shrink-0 bg-gradient-to-r from-[#276A2B] via-[#1B5E1F] to-[#004404]">
        <div class="container mx-auto flex items-center justify-center h-52 sm:h-72">
            <h1 class="text-white text-center font-arialBlack font-bold text-4xl sm:text-5xl">
                Sobre o Sindicato
            </h1>
        </div>
    </div>
    <div class="max-w-7xl mx-auto w-full flex flex-col gap-8 p-7 md:p-20">
        <h1 class="text-[#138942] font-sans font-bold text-3xl">
            Sindicato
        </h1>

        <div class="flex flex-col gap-4">
            <h3 class="text-[#454545] font-bold text-2xl">
                O que é o Sindicato?
            </h3>
            <p class="text-[#454545] text-xl text-justify">
                Pela trajetória de luta do sindicalismo no Brasil, não é difícil compreender o que é o Sindicato.
            </p>
            <p class="text-[#454545] text-xl text-justify">
                O Sindicato foi um espaço construído pelos próprios trabalhadores no desenvolvimento da história, apesar da sua oficialização enquanto instituição pelo Estado.
                A simples existência de uma sede com seu corpo administrativo é insuficiente para conceituar o Sindicato. Ele é muito mais do que isso.
            </p>
            <p class="text-[#454545] text-xl text-justify">
                Sociologicamente, podemos afirmar que o Sindicato é o resultado da ação das massas organizadas em busca de conquistas imediatas e profundas, como salário, emprego, participação política, etc.
            </p>
        </div>

        <div class="flex flex-col gap-4">
            <h3 class="text-[#454545] font-bold text-2xl">
                Para que serve o Sindicato?
            </h3>
            <p class="text-[#454545] text-xl text-justify">
                Em síntese, o Sindicato serve para defender os interesses da categoria e organizá-la para conquistas coletivas em defesa de seus direitos e necessidades.
            </p>
            <br>
        </div>

        <div class="flex flex-col gap-4">
            <h1 class="text-[#138942] font-sans font-bold text-2xl">
                Como funciona o nosso sindicato?
            </h1>
            <p class="text-[#454545] text-xl text-justify">
                Nosso Sindicato funciona com uma diretoria eletiva a cada cinco anos, escolhida a partir de um programa de trabalho.
                Essa diretoria se reúne para discutir o dia a dia do Sindicato, traçar e propor planos de trabalho, de luta e seus encaminhamentos.
            </p>
        </div>

        <div class="flex flex-col gap-4">
            <h3 class="text-[#454545] font-bold text-2xl">
                Frentes de trabalho
            </h3>
            <p class="text-[#454545] text-xl text-justify">
                Nosso Sindicato se divide em frentes de trabalho, tendo como finalidade uma melhor organização e maior agilidade nos encaminhamentos; Imprensa e Comunicação; Assistência, Saúde, Lazer e Cultura; Jurídico; Formação Sindical; Previdência; Assuntos Intersindicais e Assuntos Parlamentares.
            </p>
        </div>

        <div class="flex flex-col gap-4">
            <h3 class="text-[#454545] font-bold text-2xl">
                Como são tomadas as decisões no SINPRO - Instâncias de deliberação
            </h3>
            <p class="text-[#454545] text-xl text-justify">
                Todos os associados participam das assembleias, que são a instância de decisão abaixo do Congresso que acontece a cada 3 anos. Outro nível de decisão é a Diretoria efetiva, que dirige o SINPRO num período de cinco anos. Todo sindicalizado pode concorrer à eleição. Outra forma de participação é como delegado sindical.
            </p>
        </div>

        <div class="flex flex-col gap-4">
            <h3 class="text-[#454545] font-bold text-2xl">
                Abrangência
            </h3>
            <p class="text-[#454545] text-xl text-justify">
                Bauru, Águas de Santa Bárbara, Agudos, Arandu, Arealva, Areiópolis, Avaí, Avaré, Bariri, Barra Bonita, Bocaina, Boracéia, Borebi, Botucatu, Cabrália Paulista, Cerqueira César, Dois Córregos, Duartina, Espírito Santo do Turvo, Fartura, Igaraçu do Tietê, Ipaussu, Itapuí, Itatinga, Lençóis Paulista, Macatuba, Manduri, Mineiros do Tietê, Óleo, Pardinho, Paulistânia, Pederneiras, Piraju, Pirajuí, Piratininga, Pratânia, Presidente Alves, São Manuel, São Pedro do Turvo, Sarutaiá, Taguaí, Tejupá e Timburi.
            </p>
        </div>

        {{-- Validação se há Diretoria para Exibir (correção do erro da data) --}}
        @if ($direction)
        <h1 class="text-[#138942] font-bold text-3xl">
            Diretoria
        </h1>

        <div class="flex flex-col gap-2">
            <h1 class="text-[#454545] text-center text-3xl font-bold">
                Conheça a nossa Diretoria
            </h1>
            <h2 class="text-[#454545] text-center text-2xl mb-4">
                do SINPROBAU com mandato vigente de {{ date("Y", strtotime($direction->start_date)) }} a {{ date("Y", strtotime($direction->end_date)) }}
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 md2:grid-cols-4 w-full gap-8 justify-items-center">
                @foreach ($directors as $director)
                    <x-director
                        :role="$director->role"
                        :name="$director->name"
                    />
                @endforeach
            </div>
        </div>
        @else
        <h1 class="text-[#138942] font-bold text-3xl">
            Não há mandato disponível.
        </h1>
        @endif



    </div>
@endsection
