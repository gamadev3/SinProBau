@extends("layouts.main")

@section("title", "SINPROBAU - Diretoria")

@section("content")
    <!-- Seção "Sobre o Sindicato" -->
    <div class="w-full flex-shrink-0 bg-gradient-to-r from-[#276A2B] via-[#1B5E1F] to-[#004404]">
        <div class="container mx-auto flex items-center justify-center h-[356px]">
            <h1 class="text-white font-sans font-bold text-[40px] leading-[50px]">
                Sobre o Sindicato
            </h1>
        </div>
    </div>

    <!-- Seção principal -->
    <div class="w-full container mx-auto flex flex-col gap-10 text-gray-700 px-5 md:px-20 pt-20 pb-10">
        <h1 class="text-[#138942] font-sans font-bold text-[32px] leading-[40px] self-stretch">
            Sindicato
        </h1>

        <!-- Subtítulo: O que é o Sindicato? -->
        <div class="flex flex-col gap-4">
            <h3 class="text-[#454545] font-bold text-[24px] leading-[32px]">
                O que é o Sindicato?
            </h3>
            <p class="text-[#454545] text-[16px] leading-[24px]">
                Pela trajetória de luta do sindicalismo no Brasil, não é difícil compreender o que é o Sindicato.
                <br><br>
                O Sindicato foi um espaço construído pelos próprios trabalhadores no desenvolvimento da história, apesar da sua oficialização enquanto instituição pelo Estado.
                A simples existência de uma sede com seu corpo administrativo é insuficiente para conceituar o Sindicato. Ele é muito mais do que isso.
                <br><br>
                Sociologicamente, podemos afirmar que o Sindicato é o resultado da ação das massas organizadas em busca de conquistas imediatas e profundas, como salário, emprego, participação política, etc.
            </p>
        </div>

        <!-- Subtítulo: Para que serve o Sindicato? -->
        <div class="flex flex-col gap-4">
            <h3 class="text-[#454545] font-bold text-[24px] leading-[32px]">
                Para que serve o Sindicato?
            </h3>
            <p class="text-[#454545] text-[16px] leading-[24px]">
                Em síntese, o Sindicato serve para defender os interesses da categoria e organizá-la para conquistas coletivas em defesa de seus direitos e necessidades.
            </p>
            <br>
        </div>

        <!-- Subtítulo: Como funciona o nosso sindicato? -->
        <div class="flex flex-col gap-4">
            <h1 class="text-[#138942] font-sans font-bold text-[32px] leading-[40px] self-stretch">
            Como funciona o nosso sindicato?
            </h1>
            <p class="text-[#454545] text-[16px] leading-[24px]">
                Nosso Sindicato funciona com uma diretoria eletiva a cada cinco anos, escolhida a partir de um programa de trabalho.
                Essa diretoria se reúne para discutir o dia a dia do Sindicato, traçar e propor planos de trabalho, de luta e seus encaminhamentos.
            </p>
        </div>

        <!-- Subtítulo: Frentes de trabalho -->
        <div class="flex flex-col gap-4">
            <h3 class="text-[#454545] font-bold text-[24px] leading-[32px]">
                Frentes de trabalho
            </h3>
            <p class="text-[#454545] text-[16px] leading-[24px]">
                Nosso Sindicato se divide em frentes de trabalho, tendo como finalidade uma melhor organização e maior agilidade nos encaminhamentos; Imprensa e Comunicação; Assistência, Saúde, Lazer e Cultura; Jurídico; Formação Sindical; Previdência; Assuntos Intersindicais e Assuntos Parlamentares.
            </p>
        </div>

        <!-- Subtítulo: Como são tomadas as decisões no SINPRO -->
        <div class="flex flex-col gap-4">
            <h3 class="text-[#454545] font-bold text-[24px] leading-[32px]">
                Como são tomadas as decisões no SINPRO - Instâncias de deliberação
            </h3>
            <p class="text-[#454545] text-[16px] leading-[24px]">
                Todos os associados participam das assembleias, que são a instância de decisão abaixo do Congresso que acontece a cada 3 anos. Outro nível de decisão é a Diretoria efetiva, que dirige o SINPRO num período de cinco anos. Todo sindicalizado pode concorrer à eleição. Outra forma de participação é como delegado sindical.
            </p>
        </div>

        <!-- Subtítulo: Abrangência -->
        <div class="flex flex-col gap-4">
            <h3 class="text-[#454545] font-bold text-[24px] leading-[32px]">
                Abrangência
            </h3>
            <p class="text-[#454545] text-[16px] leading-[24px]">
                Bauru, Águas de Santa Bárbara, Agudos, Arandu, Arealva, Areiópolis, Avaí, Avaré, Bariri, Barra Bonita, Bocaina, Boracéia, Borebi, Botucatu, Cabrália Paulista, Cerqueira César, Dois Córregos, Duartina, Espírito Santo do Turvo, Fartura, Igaraçu do Tietê, Ipaussu, Itapuí, Itatinga, Lençóis Paulista, Macatuba, Manduri, Mineiros do Tietê, Óleo, Pardinho, Paulistânia, Pederneiras, Piraju, Pirajuí, Piratininga, Pratânia, Presidente Alves, São Manuel, São Pedro do Turvo, Sarutaiá, Taguaí, Tejupá e Timburi.
            </p>
        </div>

        <!-- Subtítulo: Diretoria -->
        <h1 class="text-[#138942] font-sans font-bold text-[32px] leading-[40px] self-stretch">
            Diretoria
        </h1>

        <!-- Diretoria: Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 md2:grid-cols-4 w-full gap-8 justify-items-center">
            @foreach ($directors as $director)
                <x-director
                    :role="$director->role"
                    :name="$director->name"
                />
            @endforeach
        </div>
    </div>
@endsection
