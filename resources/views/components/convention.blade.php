<div class="flex flex-col sm:flex-row justify-between gap-4 py-5 md:py-10">
    <div class="flex flex-col gap-2">
        <div class="flex gap-2">
            <img src="/images/mdi_calendar-blank.svg" alt="Data">
            <p class="text-lg">{{ date("d/m/Y", strtotime($date)) }}</p>
        </div>
        <h1 class="text-xl">{{ $title }}</h1>
    </div>
    <div class="flex flex-col justify-end">
        <a
            href="{{ $url }}"
            class="w-full sm:w-fit text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base flex gap-2 items-center justify-center px-5 py-2.5 text-center"
        >
            <img src="/images/plus.svg" alt="">
            Ver mais
        </a>
    </div>
</div>
<hr>
