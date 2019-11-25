
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pesquisar</title>
</head>
<body>
<form method="POST" action="consulta.php">
		
		<center><h1>Local destinado para realizar consultas de usuarios</h1></center>
	<label>Selecione o item para consultar:</label>
		<select name="coluna">
		<option>Selecione</option>
		<option value="matricula_usuario">Matricula</option>
		<option value="nome_usuario">Nome</option>
		<option value="sexo">Sexo</option>
		<option value="dt_nasc_usuario">Data de nascimento</option>
		<option value="endereco">Rua</option>
		<option value="numero">Numero da casa</option>
		<option value="cidade">Cidade</option>
		<option value="bairro">Bairro</option>
		<option value="telefone_usuario">Telefone</option>
		</select>
		</br></br>
		
		<label>Pesquisar </label> 
		<input type ="text" name="pesquisaU" id="pesquisaU" placeholder="Faça a pesquisa"  >
		<input type="submit" name="submit" value="enviar">
	
		
		
		<br></br>
		
		</form>
		
		
		
		

		</body>
</html>