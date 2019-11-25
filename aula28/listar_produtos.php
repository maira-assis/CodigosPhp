<!doctype html>
<html>
<head><meta charset="UTF-8" />
	<title>Sistema Cadastro de Produtos - CRUD</title>
</head>
<body>
	<center>
	<h1>Listagem de todos produtos</h1>
	<hr>
<?php 
include ("conexao.php");
?>
<p> Exibe listagem </p>
<table border="1">
	<tr>
		<th>codigo produto</th>
		<th>nome produto</th>
	</tr>	
<?php
	$query = "SELECT produto_codigo, produto_descricao from produtos";
	$result = mysqli_query($conexao,$query);
	while ($fetch = mysqli_fetch_row ($result)) {
	echo "<tr><td>". $fetch [0] ." </td>";
	echo "<td>" . $fetch[1] . "</td></tr>";
	}
?>	
	</table>	
	
	<hr>
		<a href="index.php">Inicio</a>
	<center>
</body>
</html>