@extends("layouts.system")

@section("title", "SINPROBAU - Sistema")

@section("content")
    <div class="max-w-7xl mx-auto w-full min-h-screen flex flex-col justify-center gap-8 p-7 md:px-20 md:py-20">
        <h1 class="text-3xl font-bold text-center">Atualizar imagem</h1>
        <form id="form" method="POST" action="/sistema/atualizar-imagem-carrossel/{{ $carouselImage->id }}" enctype="multipart/form-data" class="w-full md:px-4 py-4">
            @csrf
            @method("POST")
            <div class="flex flex-col gap-10 mb-6">
                <div class="flex flex-col gap-2">
                    <x-input
                        :name="'alt'"
                        :type="'text'"
                        :label="'Texto alternativo'"
                        :placeholder="'Digite o texto alternativo da imagem do carrossel'"
                        :value="$carouselImage->alt"
                    />
                    @error("alt")
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-fit h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                            <img id="image-preview" src="{{ $carouselImage->image_url }}" alt="Preview da imagem" class="w-full h-full object-contain rounded-lg">
                            <div id="upload-placeholder" class="hidden flex-col items-center justify-center pt-5 pb-6">
                                <img src="/images/icons/upload.svg" alt="Upload" class="w-8 h-8 mb-4 text-gray-500">
                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Clique para enviar</span> ou arraste e solte</p>
                            </div>
                            <input
                                id="dropzone-file"
                                name="file"
                                type="file"
                                class="hidden"
                                accept="image/*"
                            />
                        </label>
                    </div>
                </div>
            </div>
            <button
                type="submit"
                class="text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base w-full px-5 py-2.5 text-center flex justify-center items-center"
            >Atualizar imagem</button>
        </form>
    </div>
@endsection
