<div class="mb-8">
    <x-input
        :name="'workplace'"
        :type="'text'"
        :label="'Locais de trabalho'"
        :placeholder="'Digite os locais de trabalho'"
    />
</div>
<div class="grid gap-8 mb-8 md:grid-cols-2">
    <div>
        <label
            for="degree"
            class="block mb-2 text-sm font-medium text-gray-900"
        >Se possui</label>
        <select
            id="degree"
            name="degree"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        >
            <option selected>Outro</option>
            <option value="Pós-graduação">Graduado</option>
            <option value="Mestrado">Mestrado</option>
            <option value="Doutorado">Doutorado</option>
        </select>
    </div>
    <div>
        <x-input
            :name="'ifothers'"
            :type="'text'"
            :label="'Se outros, defina'"
            :placeholder="'Digite'"
        />
    </div>
</div>
<div class="grid gap-8 mb-8 md:grid-cols-3">
    <div>
        <x-input
            :name="'dependentOne'"
            :type="'text'"
            :label="'Dependente'"
            :placeholder="'Digite o nome'"
        />
    </div>
    <div>
        <x-input
            :name="'degreeOfKinshipOne'"
            :type="'text'"
            :label="'Grau de parentesco'"
            :placeholder="'Grau de parentesco'"
        />
    </div>
    <div>
        <label
            for="dependent-one"
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
                id="dependent-one-date"
                name="dependentOneDate"
                name="dependent-one"
                type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                placeholder="Selecione a data">
        </div>
    </div>
</div>
<div class="grid gap-8 mb-8 md:grid-cols-3">
    <div>
        <x-input
            :name="'dependentTwo'"
            :type="'text'"
            :label="'Dependente'"
            :placeholder="'Digite o nome'"
        />
    </div>
    <div>
        <x-input
            :name="'degreeOfKinshipTwo'"
            :type="'text'"
            :label="'Grau de parentesco'"
            :placeholder="'Grau de parentesco'"
        />
    </div>
    <div>
        <label
            for="dependent-two"
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
                id="dependent-two"
                name="dependentTwoDate"
                type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                placeholder="Selecione a data">
        </div>
    </div>
</div>
<div class="grid gap-8 mb-8 md:grid-cols-3">
    <div>
        <x-input
            :name="'dependentThree'"
            :type="'text'"
            :label="'Dependente'"
            :placeholder="'Digite o nome'"
        />
    </div>
    <div>
        <x-input
            :name="'degreeOfKinshipThree'"
            :type="'text'"
            :label="'Grau de parentesco'"
            :placeholder="'Grau de parentesco'"
        />
    </div>
    <div>
        <label
            for="dependent-three"
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
                id="dependent-three"
                name="dependentThreeDate"
                type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                placeholder="Selecione a data"
            >
        </div>
    </div>
</div>
