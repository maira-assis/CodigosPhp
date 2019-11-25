<head>
<META CHARSET="UTF-8">
<title>Formulario de usuários</title>
</head>
<?php
require_once('conexao.php');

if(isset($_POST['submit'])){

	$descricao=mysqli_real_escape_string($dbc,TRIM($_POST['descricao']));
	if(empty($descricao)){
		echo"<h1> Preencha todos os campos!</h1>";
	} else{

$query="insert into genero values(NULL,'$descricao')";
 
 $data=mysqli_query($dbc,$query) or die("erro ao conectar o banco");
IF($data)
	echo"<h1>cadastro realizado com sucesso!</h1>";
else
	echo $data;
mysqli_close($dbc);
	}
}

?>



<body>

<h3>Cadastro de Genero</h3>
<form method="post" action="<?PHP ECHO $_SERVER['PHP_SELF'];?> ">

	<label>Descrição:</label><input type="text" size="20" name="descricao" id="descricao"><br></br>
		
	<input type="submit" name= "submit" value="enviar">
		<input type="reset" value="apagar">
		</form>
		
		<hr/>
		
		
		<?php

		?>
		
	
</body>
</html>