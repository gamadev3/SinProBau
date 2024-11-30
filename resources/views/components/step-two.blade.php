<div class="grid gap-8 md:grid-cols-2">
    <div>
        <x-input
            :name="'address'"
            :type="'text'"
            :label="'Endereço'"
            :placeholder="'Digite o seu enderenço'"
        />
        @error("address")
            <x-error :message="$message" />
        @enderror
    </div>
    <div>
        <x-input
            :name="'number'"
            :type="'text'"
            :label="'Número'"
            :placeholder="'Digite o número'"
        />
        @error("number")
            <x-error :message="$message" />
        @enderror
    </div>
    <div>
        <x-input
            :name="'complement'"
            :type="'text'"
            :label="'Complemento'"
            :placeholder="'Digite o complemento'"
        />
    </div>
    <div>
        <x-input
            :name="'neighborhood'"
            :type="'text'"
            :label="'Bairro'"
            :placeholder="'Digite o nome do bairro'"
        />
        @error("neighborhood")
            <x-error :message="$message" />
        @enderror
    </div>
    <div>
        <x-input
            :name="'city'"
            :type="'text'"
            :label="'Cidade'"
            :placeholder="'Digite o nome da cidade'"
        />
        @error("city")
            <x-error :message="$message" />
        @enderror
    </div>
    <div>
        <label
            for="state"
            class="block mb-2 text-sm font-medium text-gray-900"
        >Estado</label>
        <select
            id="state"
            name="state"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        >
            <option value="" {{ old('state') == '' ? 'selected' : '' }} disabled>Selecione um estado</option>
            <option value="AC" {{ old('state') == 'AC' ? 'selected' : '' }}>Acre</option>
            <option value="AL" {{ old('state') == 'AL' ? 'selected' : '' }}>Alagoas</option>
            <option value="AP" {{ old('state') == 'AP' ? 'selected' : '' }}>Amapá</option>
            <option value="AM" {{ old('state') == 'AM' ? 'selected' : '' }}>Amazonas</option>
            <option value="BA" {{ old('state') == 'BA' ? 'selected' : '' }}>Bahia</option>
            <option value="CE" {{ old('state') == 'CE' ? 'selected' : '' }}>Ceará</option>
            <option value="DF" {{ old('state') == 'DF' ? 'selected' : '' }}>Distrito Federal</option>
            <option value="ES" {{ old('state') == 'ES' ? 'selected' : '' }}>Espírito Santo</option>
            <option value="GO" {{ old('state') == 'GO' ? 'selected' : '' }}>Goiás</option>
            <option value="MA" {{ old('state') == 'MA' ? 'selected' : '' }}>Maranhão</option>
            <option value="MT" {{ old('state') == 'MT' ? 'selected' : '' }}>Mato Grosso</option>
            <option value="MS" {{ old('state') == 'MS' ? 'selected' : '' }}>Mato Grosso do Sul</option>
            <option value="MG" {{ old('state') == 'MG' ? 'selected' : '' }}>Minas Gerais</option>
            <option value="PA" {{ old('state') == 'PA' ? 'selected' : '' }}>Pará</option>
            <option value="PB" {{ old('state') == 'PB' ? 'selected' : '' }}>Paraíba</option>
            <option value="PR" {{ old('state') == 'PR' ? 'selected' : '' }}>Paraná</option>
            <option value="PE" {{ old('state') == 'PE' ? 'selected' : '' }}>Pernambuco</option>
            <option value="PI" {{ old('state') == 'PI' ? 'selected' : '' }}>Piauí</option>
            <option value="RJ" {{ old('state') == 'RJ' ? 'selected' : '' }}>Rio de Janeiro</option>
            <option value="RN" {{ old('state') == 'RN' ? 'selected' : '' }}>Rio Grande do Norte</option>
            <option value="RS" {{ old('state') == 'RS' ? 'selected' : '' }}>Rio Grande do Sul</option>
            <option value="RO" {{ old('state') == 'RO' ? 'selected' : '' }}>Rondônia</option>
            <option value="RR" {{ old('state') == 'RR' ? 'selected' : '' }}>Roraima</option>
            <option value="SC" {{ old('state') == 'SC' ? 'selected' : '' }}>Santa Catarina</option>
            <option value="SP" {{ old('state') == 'SP' ? 'selected' : '' }}>São Paulo</option>
            <option value="SE" {{ old('state') == 'SE' ? 'selected' : '' }}>Sergipe</option>
            <option value="TO" {{ old('state') == 'TO' ? 'selected' : '' }}>Tocantins</option>
        </select>
        @error("state")
            <x-error :message="$message" />
        @enderror
    </div>
</div>
