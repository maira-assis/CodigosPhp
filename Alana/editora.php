<!DOCTYPE HTML>
<HTML>
<head>
<META CHARSET="UTF-8">
<title>Formulario de editora</title>
</head>
<?php
require_once('conexao.php');

action="<?PHP echo $_SERVER['PHP_SELF'];?>"
if (isset($_POST['submit'])){
	
	
}

$nome_editora=mysqli_real_escape_String($dbc,TRIM($_POST['nome']));
$nome_livro=mysqli_real_escape_String($dbc,TRIM($_POST['nome']));
$nome=$_POST['nome'];
$dbc=mysqli_connect();



?>
<body>

<h3>Cadastro de Editoras</h3>
<form method="post" action="<?PHP ECHO $_SERVER['PHP_SELF'];?> ">
	<label>Nome da editora:</label><input type="text" size="128" name="nome" id="nome_editora" placeholder="Escreva com o nome da editora"><br></br>
	<label>Nome do livro:</label><input type="text" size="128" name="nome" id="nome_livro "placeholder="Escreva com o nome do livro"><br></br>
	
	
	<input type="submit" value="enviar">
		<input type="reset" value="apagar">

</body>
<html>