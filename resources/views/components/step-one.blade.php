<div class="grid gap-8 md:grid-cols-2">
    <div>
        <x-input
            :name="'name'"
            :type="'name'"
            :label="'Nome'"
            :placeholder="'Digite o seu nome'"
        />
    </div>
    <div>
        <label for="maritalStatus" class="block mb-2 text-sm font-medium text-gray-900">Estado civil</label>
        <select id="maritalStatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option selected>Estado civil</option>
            <option value="Solteiro(A)">Solteiro(a)</option>
            <option value="União estável">União estável</option>
            <option value="Casado(a)">Casado(a)</option>
        </select>
    </div>
    <div>
        <label for="default-datepicker" class="block mb-2 text-sm font-medium text-gray-900">Nascimento</label>
        <div class="w-full relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                </svg>
            </div>
            <input datepicker id="default-datepicker" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Selecione a data">
        </div>
    </div>
    <div>
        <x-input
            :name="'naturality'"
            :type="'text'"
            :label="'Natural de:'"
            :placeholder="'Digite de onde você é'"
        />
    </div>
    <div>
        <x-input
            :name="'rg'"
            :type="'text'"
            :label="'RG'"
            :placeholder="'RG'"
        />
    </div>
    <div>
        <x-input
            :name="'cpf'"
            :type="'text'"
            :label="'CPF'"
            :placeholder="'CPF'"
        />
    </div>
    <div>
        <x-input
            :name="'phone'"
            :type="'tel'"
            :label="'Telefone'"
            :placeholder="'Telefone'"
        />
    </div>
    <div>
        <x-input
            :name="'email'"
            :type="'email'"
            :label="'E-mail'"
            :placeholder="'Digite o seu e-mail'"
        />
    </div>
</div>
