<div class="grid gap-8 md:grid-cols-2">
    <div>
        <x-input
            :name="'address'"
            :type="'text'"
            :label="'Endereço'"
            :placeholder="'Digite o seu enderenço'"
        />
    </div>
    <div>
        <x-input
            :name="'number'"
            :type="'text'"
            :label="'Número'"
            :placeholder="'Digite o número'"
        />
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
    </div>
    <div>
        <x-input
            :name="'city'"
            :type="'text'"
            :label="'Cidade'"
            :placeholder="'Digite o nome da cidade'"
        />
    </div>
    <div>
        <label for="state" class="block mb-2 text-sm font-medium text-gray-900">Estado</label>
        <select id="state" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option selected>Estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
    </div>
</div>
