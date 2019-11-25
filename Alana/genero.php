<head>
<META CHARSET="UTF-8">
<title>Formulario de usuários</title>
</head>
<?php
require_once('conexao.php');

action="<?PHP echo $_SERVER['PHP_SELF'];?>"
if (isset($_POST['submit'])){
	
	
}


	$nome=mysqli_real_escape_string($dbc,TRIM($_POST['nome']));
	$tipo_genero=mysqli_real_escape_string($dbc,TRIM($_POST['tipo_genero']));
	$descricao=mysqli_real_escape_string($dbc,TRIM($_POST['descricao']));
	



?>



<body>

<h3>Cadastro de Genero</h3>
<form method="post" action=" ">

<label>Tipo de genero:</label>
		<select name="tipo_genero">
		<option>Selecione</option>
		<option value="romance">Romance</option>
		<option value="acao">Ação</option>
		<option value="ficcao">Ficção</option>
		<option value="literario">Clássicos Literários</option>
		<option value="autobiografia">Autobiografia</option>
		<option value="fantasia">Fantasia</option>
		<option value="drama">Dramáticos</option>
		</select>
		<br></br>
		
		<label>Descrição:</label><input type="text" size="20" name="descricao" id="descricao"><br></br>
		
		
	<input type="submit" value="enviar">
		<input type="reset" value="apagar">
</body>
</html>