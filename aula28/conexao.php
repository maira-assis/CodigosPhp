<?php

	$local_servidor = "localhost";
	$usuario_banco 	= "root";
	$senha_banco 	= "";
	$banco_dados 	= "exemplo";
	
$conexao= mysqli_connect($local_servidor, $usuario_banco, $senha_banco);
$retorno= mysqli_select_db($conexao,$banco_dados) or die ("Erro BD");

?>