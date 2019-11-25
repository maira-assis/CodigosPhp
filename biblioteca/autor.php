<html>
<head>
<title>Autor </title>
</head>
<body>
<?php
require_once('conexao.php');
if(isset($_POST['submit'])){

$nome=mysqli_real_escape_String($dbc, TRIM($_POST['nome']));

if(empty($nome)){
	echo"<h1> Preencha todos os campos!</h1>";
	} else{

$query="insert into autor values (NULL,'$nome')";	



$con=mysqli_query($dbc,$query)or die ("erro ao conectar o banco");

mysqli_close($dbc);

}
}


?>

<form method="post" action="<?PHP ECHO $_SERVER['PHP_SELF'];?> ">
<center><h1>Cadastro de autor</h1></center>
<label>Nome do autor</label>
<input type="text" id="enviar" name="nome" id="nome">
<input  name="submit"type="submit">
</form>
<hr/>
</body>
</html>