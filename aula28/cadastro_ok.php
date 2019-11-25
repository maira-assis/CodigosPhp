<!doctype html>
<html>
<head><meta charset="UTF-8" />
	<title>Sistema Cadastro de Produtos - CRUD</title>
</head>
<body>
	<center>
	<h1>Cadastro OK</h1>
	<hr>
		<?php
			include("conexao.php");
				$codpro	= $_POST["produto_codigo"];
				$nomeproduto= $_POST["produto_descricao"];
				$unidade= $_POST["produto_unidade"];
				$estoque= $_POST["produto_saldoatual"];
			if($codpro==""){
				echo("Codigo produto é obrigatório <br>");
				echo("<a href='cadastro_produtos.php'> Voltar Cadastro</a>");
			}
			
			$sql="insert into produtos(produto_codigo, produto_descricao, produto_unidade, produto_saldoatual) values ('$codpro','$nomeproduto','$unidade','$estoque')";
			mysqli_query($conexao,$sql) or die ("Erro no cadastro ".$sql);
			echo ("Dados cadastrados com sucesso");
		?>
	<hr>
		<p><a href="cadastro_produtos.php">Novo Cadastro</a></p>
		<a href="index.php">Inicio</a>
	<center>
</body>
</html>