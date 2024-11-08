@extends("layouts.main")

@section("title", "SINPROBAU - Sistema")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col gap-8 p-10 md:px-20 md:py-20">
        <h1 class="text-3xl font-bold text-center">Cadastrar Notícia</h1>
        <form method="POST" action="/news-update/{{ $notice->id }}" enctype="multipart/form-data" class="w-full md:px-4 py-4">
            @csrf
            @method("POST")
            <div class="flex flex-col gap-2 mb-6">
                <div class="flex flex-col gap-2">
                    <x-input
                        :name="'title'"
                        :type="'text'"
                        :label="'Título'"
                        :placeholder="'Digite o título da notícia'"
                        :value="$notice->title"
                    />
                    @error("title")
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <div>
                        <label
                            for="content"
                            class="block mb-2 text-sm font-medium text-gray-900"
                        >Texto</label>
                        <textarea
                            type="text"
                            id="content"
                            name="content"
                            class="block w-full h-40 p-4 text-gray-900 border border-gray-300 rounded-lg bg-white text-base focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] outline-none"
                            placeholder="Digite alguma observação"
                        >{{ $notice->content }}</textarea>
                    </div>
                    @error("content")
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-fit h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                            <img id="image-preview" src="{{ $notice->image_url }}" alt="Preview da imagem" class="w-full h-full object-contain rounded-lg">
                            <div id="upload-placeholder" class="hidden flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input
                                id="dropzone-file"
                                name="image"
                                type="file"
                                class="hidden"
                                accept="image/*"
                            />
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base w-full px-5 py-2.5 text-center">Atualizar</button>
        </form>
    </div>
@endsection
