@extends("layouts.system")

@section("title", "SINPROBAU - Sistema")

@section("content")
    <div class="max-w-7xl mx-auto w-full flex flex-col gap-8 p-7 md:px-20 md:py-20">
        <h1 class="text-3xl font-bold text-center">Cadastrar Notícia</h1>
        <form id="form" method="POST" action="/sistema/registrar-noticia" enctype="multipart/form-data" class="w-full md:px-4 py-4">
            @csrf
            @method("POST")
            <div class="flex flex-col gap-10 mb-6">
                <div class="flex flex-col gap-2">
                    <x-input
                        :name="'title'"
                        :type="'text'"
                        :label="'Título'"
                        :placeholder="'Digite o título da notícia'"
                    />
                    @error("title")
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="flex flex-col">
                    <p class="block mb-2 text-sm font-medium text-gray-900">A notícia faz parte da Campanha Salarial?</p>
                    <div class="flex">
                        <div class="flex items-center h-5">
                        <input
                            id="salary_campaign"
                            name="salary_campaign"
                            type="checkbox"
                            value="1"
                            class="w-4 h-4 text-[#138942] border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-[#A5D6A7] cursor-pointer"
                        />
                        </div>
                        <label
                            for="salary_campaign"
                            class="ms-2 text-sm font-medium text-gray-900 cursor-pointer"
                        >Sim, faz parte.</label>
                    </div>
                </div>
                <div class="flex flex-col">
                    <p class="block mb-2 text-sm font-medium text-gray-900">Adicionar a notícia ao "Em alta".</p>
                    <div class="flex">
                        <div class="flex items-center h-5">
                        <input
                            id="is_trending"
                            name="is_trending"
                            type="checkbox"
                            value="1"
                            class="w-4 h-4 text-[#138942] border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-[#A5D6A7] cursor-pointer"
                        />
                        </div>
                        <label
                            for="is_trending"
                            class="ms-2 text-sm font-medium text-gray-900 cursor-pointer"
                        >Sim, adicionar.</label>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div>
                        <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Texto</label>
                        <textarea
                            type="text"
                            id="content"
                            name="content"
                            class="block w-full h-40 p-4 text-gray-900 border border-gray-300 rounded-lg bg-white text-base focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] outline-none"
                            placeholder="Digite alguma observação"
                        ></textarea>
                    </div>
                    @error("content")
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div class="flex flex-col gap-1">
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-fit h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                            <img id="image-preview" src="" alt="Preview da imagem" class="hidden w-full h-full object-contain rounded-lg">
                            <div id="upload-placeholder" class="flex flex-col items-center justify-center pt-5 pb-6 px-5">
                                <img src="/images/icons/upload.svg" alt="Upload" class="w-8 h-8 mb-4 text-gray-500">
                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Clique para enviar</span> ou arraste e solte</p>
                                <p class="text-xs text-gray-500">SVG, PNG, JPG ou GIF (MAX. 800x400px)</p>
                            </div>
                            <input
                                id="dropzone-file"
                                name="image"
                                type="file"
                                class="hidden"
                                accept="image/*"
                                required
                            />
                        </label>
                    </div>
                    @error("file")
                        <x-error :message="$message" />
                    @enderror
                </div>
            </div>
            <button
                type="submit"
                id="submit-button"
                class="text-white bg-[#138942] hover:bg-[#1B5E1F] focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] font-medium rounded text-base w-full px-5 py-2.5 text-center flex justify-center items-center"
            >Cadastrar notícia</button>
        </form>
    </div>
@endsection
