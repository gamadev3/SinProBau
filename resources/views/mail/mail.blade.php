<h2>Detalhes do Formulário</h2>
<p><strong>Nome:</strong> {{ $data['name'] }}</p>
<p><strong>Estado Civil:</strong> {{ $data['maritalStatus'] }}</p>
<p><strong>Data de Nascimento:</strong> {{ $data['birthdate'] }}</p>
<p><strong>Naturalidade:</strong> {{ $data['naturality'] }}</p>
<p><strong>RG:</strong> {{ $data['rg'] }}</p>
<p><strong>CPF:</strong> {{ $data['cpf'] }}</p>
<p><strong>Telefone:</strong> {{ $data['phone'] }}</p>
<p><strong>E-mail:</strong> {{ $data['email'] }}</p>
<p><strong>Endereço:</strong> {{ $data['address'] }}, {{ $data['number'] }}</p>
<p><strong>Complemento:</strong> {{ $data['complement'] }}</p>
<p><strong>Bairro:</strong> {{ $data['neighborhood'] }}</p>
<p><strong>Cidade:</strong> {{ $data['city'] }} - {{ $data['state'] }}</p>
<p><strong>Local de Trabalho:</strong> {{ $data['workplace'] }}</p>
<p><strong>Grau de Escolaridade:</strong> {{ $data['degree'] }}</p>
<p><strong>Outros:</strong> {{ $data['ifothers'] }}</p>
<h3>Dependentes:</h3>
<ul>
    <li><strong>Dependente 1:</strong> {{ $data['dependentOne'] }} - {{ $data['degreeOfKinshipOne'] }} ({{ $data['dependentOneDate'] }})</li>
    <li><strong>Dependente 2:</strong> {{ $data['dependentTwo'] }} - {{ $data['degreeOfKinshipTwo'] }} ({{ $data['dependentTwoDate'] }})</li>
    <li><strong>Dependente 3:</strong> {{ $data['dependentThree'] }} - {{ $data['degreeOfKinshipThree'] }} ({{ $data['dependentThreeDate'] }})</li>
</ul>
<h3>Outras Informações:</h3>
<p><strong>Instituição:</strong> {{ $data['institution'] }}</p>
<p><strong>Cidade da Instituição:</strong> {{ $data['institucionCity'] }}</p>
<p><strong>Data:</strong> {{ $data['date'] }}</p>
<p><strong>Observações:</strong> {{ $data['observation'] }}</p>
