<div class="flex flex-col md2:flex-row shadow-md rounded-2xl overflow-hidden">
    <div class="md2:w-1/3">
        <img src="{{ $image }}" class="w-full max-h-72 object-cover" alt="{{ $title }}">
    </div>
    <div class="md2:w-2/3 flex flex-col gap-4 px-6 py-5 flex-1">
        <p>{{ date("d/m/Y", strtotime($date)) }}</p>
        <h1 class="text-xl font-bold">{{ $title }}</h1>
        <p>{!! nl2br(e(strlen($content) > 150 ? substr($content, 0, 150) . "..." : $content)) !!}</p>
        <a href="/noticia/{{ $id }}" class="w-fit mt-auto text-[#138942] hover:text-white border border-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base px-5 py-2.5 text-center">Ler notícia</a>
    </div>
</div>
