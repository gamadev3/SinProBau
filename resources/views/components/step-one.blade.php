<div class="grid gap-8 md:grid-cols-2">
    <div>
        <x-input
            :name="'name'"
            :type="'name'"
            :label="'Nome'"
            :placeholder="'Digite o seu nome'"
        />
        @error("name")
            <x-error :message="$message" />
        @enderror
    </div>
    <div>
        <label
            for="maritalStatus"
            class="block mb-2 text-sm font-medium text-gray-900"
        >Estado civil</label>
        <select
            id="maritalStatus"
            name="maritalStatus"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        >
            <option value="" {{ old('maritalStatus') == '' ? 'selected' : '' }} disabled>Selecione um</option>
            <option value="Solteiro(A)" {{ old('maritalStatus') == 'Solteiro(A)' ? 'selected' : '' }}>Solteiro(a)</option>
            <option value="União estável" {{ old('maritalStatus') == 'União estável' ? 'selected' : '' }}>União estável</option>
            <option value="Casado(a)" {{ old('maritalStatus') == 'Casado(a)' ? 'selected' : '' }}>Casado(a)</option>
            <option value="Divorciado(a)" {{ old('maritalStatus') == 'Divorciado(a)' ? 'selected' : '' }}>Divorciado(a)</option>
            <option value="Viúvo(a)" {{ old('maritalStatus') == 'Viúvo(a)' ? 'selected' : '' }}>Viúvo(a)</option>
        </select>
        @error("maritalStatus")
            <x-error :message="$message" />
        @enderror
    </div>
    <div>
        <label
            for="birthdate"
            class="block mb-2 text-sm font-medium text-gray-900"
        >Nascimento</label>
        <div class="w-full relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                </svg>
            </div>
            <input
                datepicker
                id="birthdate"
                name="birthdate"
                datepicker-format="dd/mm/yyyy"
                value="{{ old('birthdate') }}"
                type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                placeholder="Selecione a data"
            >
        </div>
        @error("birthdate")
            <x-error :message="$message" />
        @enderror
    </div>
    <div>
        <x-input
            :name="'naturality'"
            :type="'text'"
            :label="'Natural de:'"
            :placeholder="'Digite de onde você é'"
        />
        @error("naturality")
            <x-error :message="$message" />
        @enderror
    </div>
    <div>
        <x-input
            :name="'rg'"
            :type="'text'"
            :label="'RG'"
            :placeholder="'RG'"
        />
        @error("rg")
            <x-error :message="$message" />
        @enderror
    </div>
    <div>
        <x-input
            :name="'cpf'"
            :type="'text'"
            :label="'CPF'"
            :placeholder="'CPF'"
        />
        @error("cpf")
            <x-error :message="$message" />
        @enderror
    </div>
    <div>
        <x-input
            :name="'phone'"
            :type="'tel'"
            :label="'Telefone'"
            :placeholder="'Telefone'"
        />
        @error("phone")
            <x-error :message="$message" />
        @enderror
    </div>
    <div>
        <x-input
            :name="'email'"
            :type="'email'"
            :label="'E-mail'"
            :placeholder="'Digite o seu e-mail'"
        />
        @error("email")
            <x-error :message="$message" />
        @enderror
    </div>
</div>
