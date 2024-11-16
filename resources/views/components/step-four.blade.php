<p class="mb-8">Autorizo o desconto em folha de pagamento da mensalidade decorrente desta filiação. Tal desconto dar-se-á em folha da instituição denominada:</p>
<div class="mb-8">
    <label
        class="block mb-2 text-sm font-medium text-gray-900"
        for="file_input"
    >Diploma/holerite</label>
    <input
        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
        aria-describedby="file_input_help"
        id="file_input"
        name="file"
        value="{{ old('file') }}"
        type="file"
    >
    @error("file")
        <x-error :message="$message" />
    @enderror
</div>
<div class="grid gap-8 mb-8 md:grid-cols-3">
    <div>
        <x-input
            :name="'institution'"
            :type="'text'"
            :label="'Instituição'"
            :placeholder="'Digite o nome da instituição'"
        />
        @error("institution")
            <x-error :message="$message" />
        @enderror
    </div>
    <div>
        <x-input
            :name="'institucionCity'"
            :type="'text'"
            :label="'Cidade'"
            :placeholder="'Digite o nome da cidade'"
        />
        @error("institucionCity")
            <x-error :message="$message" />
        @enderror
    </div>
    <div>
        <label
            for="date"
            class="block mb-2 text-sm font-medium text-gray-900"
        >Data</label>
        <div class="w-full relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                </svg>
            </div>
            <input
                datepicker
                id="date"
                name="date"
                datepicker-format="dd/mm/yyyy"
                value="{{ old('date') }}"
                type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                placeholder="Selecione a data"
            >
        </div>
    </div>
</div>
<div>
    <label
        for="large-input"
        class="block mb-2 text-sm font-medium text-gray-900"
    >Observações</label>
    <textarea
        type="text"
        id="large-input"
        name="observation"
        value="{{ old('observation') }}"
        class="block w-full h-40 p-4 text-gray-900 border border-gray-300 rounded-lg bg-white text-base focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] outline-none"
        placeholder="Digite alguma observação"></textarea>
</div>
