@if ($carousel->isNotEmpty())
<div id="carouselExampleControls" class="relative" data-twe-carousel-init data-twe-ride="carousel">
    <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
        @foreach ($carousel as $index => $carouselItem)
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" {{ $index === 0 ? 'data-twe-carousel-item data-twe-carousel-active' : 'data-twe-carousel-item' }}>
                <img
                    src="{{ $carouselItem->image_url }}"
                    class="block w-full"
                    alt="{{ $carouselItem->alt ?? 'Imagem' }}"
                />
            </div>
        @endforeach
    </div>

    <button class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-twe-target="#carouselExampleControls" data-twe-slide="prev">
        <span class="inline-block h-8 w-8">
            <img src="/images/icons/left-carousel-arrow.svg" class="w-5"  alt="Anterior">
        </span>
        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Anterior</span>
    </button>

    <button class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-twe-target="#carouselExampleControls" data-twe-slide="next">
        <span class="inline-block h-8 w-8">
            <img src="/images/icons/right-carousel-arrow.svg" class="w-5" alt="Próximo">
        </span>
        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Próximo</span>
    </button>
</div>
@else
        <p class="text-center text-gray-500">Nenhuma imagem disponível no momento.</p>
@endif