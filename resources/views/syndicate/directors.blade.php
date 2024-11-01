@extends("layouts.main")

@section("title", "SINPROBAU - Diretoria")

@section("content")
    <div class="flex flex-col items-center max-w-[1200px] mx-auto gap-[20px] text-gray-300 opacity-100 pt-8">
        <h1 class="text-[#454545] text-center font-sans font-bold text-[32px] leading-[40px] self-stretch mb-4">
            Conheça a nossa Diretoria
        </h1>
        <h2 class="text-[#454545] font-sans font-normal text-[24px] leading-[40px] mb-8">
            do SINPROBAU com mandato vigente 2022-2027
        </h2>
        
        <div class="grid grid-cols-4 gap-20 justify-items-center">
            <!-- Retângulo para imagem 1 com o texto -->
            <div class="w-[300px] h-[320px] bg-[#D9D9D9] flex-shrink-0 flex flex-col justify-end items-center gap-4 ">
                 <!-- Imagem -->
                <div class="w-[280px] h-[220px] bg-[#C4C4C4] rounded-t-lg overflow-hidden flex items-center justify-center">
                    <img src="https://st.depositphotos.com/1011382/2845/i/950/depositphotos_28451603-stock-photo-real-normal-person-portrait.jpg/280x220" alt="Imagem do Presidente" class="object-cover w-full h-full" />
                </div>
                <!-- Retângulo pequeno para o texto, alinhado para baixo -->
                <div class="w-[280px] h-[70px] bg-[#E0E0E0] flex flex-col justify-center items-center rounded-lg  mb-2">
                    <!-- Título -->
                    <div class="text-center text-[#454545] font-sans font-bold text-[20px] leading-[32px]">
                        Presidente
                    </div>
                    <!-- Nome '' -->
                    <div class="text-center text-[#454545] font-sans font-normal text-[20px] leading-[32px]">
                        Sebastiao Clementino da Silva
                    </div>
                </div>
            </div>

            <div class="w-[300px] h-[320px] bg-[#D9D9D9] flex-shrink-0 flex flex-col justify-end items-center gap-2">
                <!-- Retângulo pequeno para o texto, alinhado para baixo -->
                <div class="w-[280px] h-[70px] bg-[#E0E0E0] flex flex-col justify-center items-center rounded-lg  mb-2">
                    <!-- Título -->
                    <div class="text-center text-[#454545] font-sans font-bold text-[20px] leading-[32px]">
                        Vice - Presidente
                    </div>
                    <!-- Nome '' -->
                    <div class="text-center text-[#454545] font-sans font-normal text-[20px] leading-[32px]">
                        Elvio Gilberto da Silva
                    </div>
                </div>
            </div>

            <div class="w-[300px] h-[320px] bg-[#D9D9D9] flex-shrink-0 flex flex-col justify-end items-center gap-2">
                <!-- Retângulo pequeno para o texto, alinhado para baixo -->
                <div class="w-[280px] h-[70px] bg-[#E0E0E0] flex flex-col justify-center items-center rounded-lg  mb-2">
                    <!-- Título -->
                    <div class="text-center text-[#454545] font-sans font-bold text-[20px] leading-[32px]">
                        Secretária Geral
                    </div>
                    <!-- Nome '' -->
                    <div class="text-center text-[#454545] font-sans font-normal text-[20px] leading-[32px]">
                        Monica Medola Damine
                    </div>
                </div>
            </div>

            <div class="w-[300px] h-[320px] bg-[#D9D9D9] flex-shrink-0 flex flex-col justify-end items-center gap-2">
                <!-- Retângulo pequeno para o texto, alinhado para baixo -->
                <div class="w-[280px] h-[70px] bg-[#E0E0E0] flex flex-col justify-center items-center rounded-lg  mb-2">
                    <!-- Título -->
                    <div class="text-center text-[#454545] font-sans font-bold text-[18px] leading-[32px]">
                        Diretor de Assuntos Profissionais
                    </div>
                    <!-- Nome '' -->
                    <div class="text-center text-[#454545] font-sans font-normal text-[20px] leading-[32px]">
                        Felipe de Moura Garrido
                    </div>
                </div>
            </div>

            <div class="w-[300px] h-[320px] bg-[#D9D9D9] flex-shrink-0 flex flex-col justify-end items-center gap-2">
                <!-- Retângulo pequeno para o texto, alinhado para baixo -->
                <div class="w-[280px] h-[70px] bg-[#E0E0E0] flex flex-col justify-center items-center rounded-lg  mb-2">
                    <!-- Título -->
                    <div class="text-center text-[#454545] font-sans font-bold text-[20px] leading-[32px]">
                        Diretor Tesoureiro
                    </div>
                    <!-- Nome '' -->
                    <div class="text-center text-[#454545] font-sans font-normal text-[20px] leading-[32px]">
                        Sebastião Clementino da Silva
                    </div>
                </div>
            </div>

            <div class="w-[300px] h-[320px] bg-[#D9D9D9] flex-shrink-0 flex flex-col justify-end items-center gap-2">
                <!-- Retângulo pequeno para o texto, alinhado para baixo -->
                <div class="w-[280px] h-[70px] bg-[#E0E0E0] flex flex-col justify-center items-center rounded-lg  mb-2">
                    <!-- Título -->
                    <div class="text-center text-[#454545] font-sans font-bold text-[20px] leading-[32px]">
                        Diretor Suplente
                    </div>
                    <!-- Nome '' -->
                    <div class="text-center text-[#454545] font-sans font-normal text-[20px] leading-[32px]">
                        Luciana Bezerra de Toledo
                    </div>
                </div>
            </div>

            <div class="w-[300px] h-[320px] bg-[#D9D9D9] flex-shrink-0 flex flex-col justify-end items-center gap-2">
                <!-- Retângulo pequeno para o texto, alinhado para baixo -->
                <div class="w-[280px] h-[70px] bg-[#E0E0E0] flex flex-col justify-center items-center rounded-lg  mb-2">
                    <!-- Título -->
                    <div class="text-center text-[#454545] font-sans font-bold text-[20px] leading-[32px]">
                        Diretor Suplente
                    </div>
                    <!-- Nome '' -->
                    <div class="text-center text-[#454545] font-sans font-normal text-[20px] leading-[32px]">
                        Washington Luiz Bueno Silva
                    </div>
                </div>
            </div>

            <div class="w-[300px] h-[320px] bg-[#D9D9D9] flex-shrink-0 flex flex-col justify-end items-center gap-2">
                <!-- Retângulo pequeno para o texto, alinhado para baixo -->
                <div class="w-[280px] h-[70px] bg-[#E0E0E0] flex flex-col justify-center items-center rounded-lg  mb-2">
                    <!-- Título -->
                    <div class="text-center text-[#454545] font-sans font-bold text-[20px] leading-[32px]">
                        Conselho Fiscal - Efetivos
                    </div>
                    <!-- Nome '' -->
                    <div class="text-center text-[#454545] font-sans font-normal text-[20px] leading-[32px]">
                        Nair Leite Ribeiro Nassarala
                    </div>
                </div>
            </div>

            <div class="w-[300px] h-[320px] bg-[#D9D9D9] flex-shrink-0 flex flex-col justify-end items-center gap-2">
                <!-- Retângulo pequeno para o texto, alinhado para baixo -->
                <div class="w-[280px] h-[70px] bg-[#E0E0E0] flex flex-col justify-center items-center rounded-lg  mb-2">
                    <!-- Título -->
                    <div class="text-center text-[#454545] font-sans font-bold text-[20px] leading-[32px]">
                        Conselho Fiscal - Efetivos
                    </div>
                    <!-- Nome '' -->
                    <div class="text-center text-[#454545] font-sans font-normal text-[20px] leading-[32px]">
                        Creusa Vitalino Guimarã
                    </div>
                </div>
            </div>

            <div class="w-[300px] h-[320px] bg-[#D9D9D9] flex-shrink-0 flex flex-col justify-end items-center gap-2">
                <!-- Retângulo pequeno para o texto, alinhado para baixo -->
                <div class="w-[280px] h-[100px] bg-[#E0E0E0] flex flex-col justify-center items-center rounded-lg  mb-2">
                    <!-- Título -->
                    <div class="text-center text-[#454545] font-sans font-bold text-[20px] leading-[32px]">
                        Delegados Representantes junto à Federação - Efetivos
                    </div>
                    <!-- Nome '' -->
                    <div class="text-center text-[#454545] font-sans font-normal text-[20px] leading-[32px]">
                        Sebastião Clementino da Silva
                    </div>
                </div>
            </div>


            <div class="w-[300px] h-[320px] bg-[#D9D9D9] flex-shrink-0 flex flex-col justify-end items-center gap-2">
                <!-- Retângulo pequeno para o texto, alinhado para baixo -->
                <div class="w-[280px] h-[100px] bg-[#E0E0E0] flex flex-col justify-center items-center rounded-lg  mb-2">
                    <!-- Título -->
                    <div class="text-center text-[#454545] font-sans font-bold text-[20px] leading-[32px]">
                        Delegados Representantes junto à Federação - Efetivos
                    </div>
                    <!-- Nome '' -->
                    <div class="text-center text-[#454545] font-sans font-normal text-[20px] leading-[32px]">
                        Carlos Roberto de Oliveira
                    </div>
                </div>
            </div>

            <div class="w-[300px] h-[320px] bg-[#D9D9D9] flex-shrink-0 flex flex-col justify-end items-center gap-2 mb-40">
                <!-- Retângulo pequeno para o texto, alinhado para baixo -->
                <div class="w-[280px] h-[100px] bg-[#E0E0E0] flex flex-col justify-center items-center rounded-lg  mb-2">
                    <!-- Título -->
                    <div class="text-center text-[#454545] font-sans font-bold text-[20px] leading-[32px]">
                        Delegados Representantes junto à Federação - Suplentes
                    </div>
                    <!-- Nome '' -->
                    <div class="text-center text-[#454545] font-sans font-normal text-[20px] leading-[32px]">
                        Felipe de Moura Garrido
                    </div>
                </div>
            </div>

            
            <!-- Adicione mais retângulos conforme necessário -->
        </div>
    </div>
@endsection
