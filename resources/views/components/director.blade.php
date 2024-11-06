<div class="relative w-full aspect-square bg-[#D9D9D9] flex flex-col justify-center items-center gap-2">
    <img
        src="/images/directors/{{ $image }}"
        alt="Imagem do Presidente"
        class="object-cover w-full h-full"
    />
    <div class="absolute bottom-0 w-[calc(100%-2rem)] bg-[#fff] flex flex-col justify-center items-center shadow-md mx-4 mb-4 p-1">
        <div class="text-center text-[#454545] font-sans font-bold text-sm leading-1">
            {{ $role }}
        </div>
        <div class="text-center text-[#454545] font-sans font-normal text-sm leading-1">
            {{ $name }}
        </div>
    </div>
</div>
