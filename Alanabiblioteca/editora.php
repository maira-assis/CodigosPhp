<!DOCTYPE HTML>
<HTML>
<head>
<META CHARSET="UTF-8">
<title>Formulario de editora</title>
</head>
<?php
require_once('conexao.php');
if(isset($_POST['submit'])){
$nome_editora=mysqli_real_escape_String($dbc, TRIM($_POST['nome']));

$query="insert into editora values(NULL,'$nome_editora')";
 
 $data=mysqli_query($dbc,$query) or die("erro ao conectar o banco");
IF($data)
	echo"<h1>cadastro realizado com sucesso!</h1>";
else
	echo $data;
mysqli_close($dbc);
}
?>
<body>

<h3>Cadastro de Editoras</h3>
<form method="post" action="<?PHP ECHO $_SERVER['PHP_SELF'];?> ">
	<label>Nome da editora:</label><input type="text" size="128" name="nome" id="nome_editora" placeholder="Escreva com o nome da editora"><br></br>
	
	
	
	<input type="submit" name="submit" value="enviar">
		<input type="reset" value="apagar">
		
		
</form>

<form method="post"

<label> digita nome da </label> <input type="text" size="128" name="nome" id         placeholder=






</body>
</html>