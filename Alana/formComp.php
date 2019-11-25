<!DOCTYPE HTML>
<HTML>
<head>
<META CHARSET="UTF-8">
<title>Formulario de compra</title>
</head>
<body>
<font face="verdana">
<h1>Formulário de Compra</h1>
	<form method="post" action="cadRealizado.php">
		<label>Nome:</label><input type="text" size="128" name="nome" id="nome"placeholder="Escreva com o nome"><br></br>
	
		<label>Endereço:</label><input type="text" name="endereco" id="endereço" placeholder="Informe o ser endereço">
		<label>Número:</label><input type="text" size="20"  name="numero" id="número" placeholder="Informe o seu número">
		<label>Cidade:</label><input type="text" name="cidade" id="cidade" placeholder="Informe a cidade">
		<label>Bairro:</label><input type="text"name="bairro" id="bairro" placeholder="Informe o seu bairro"><br></br>
		
		<label>Sexo:</labeL>
			<input type="radio" name="sexo" value="M"><label>Masculino</label>
			<input type="radio" name="sexo"value="F"><label>Feminino</label><br></br>
		
		<label>Escolha:</label>
		<select name="carro">
		<option>Selecione</option>
		<option value="Fiesta">Fiesta</option>
		<option value="Siena">Siena</option>
		<option value="Fox">Fox</option>
		<option value="Sandero">Sandero</option>
		</select>
		<br></br>
		<input type="submit" value="enviar">
		<input type="reset" value="apagar">
	</form>
</font>
</body>
</html>