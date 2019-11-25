<!doctype html>
<html>
<head><meta charset="UTF-8" />
	<title>Sistema Cadastro de Produtos - CRUD</title>
</head>
<body>
	<center>
	<h1>Cadastro de Produtos</h1>
	<hr>
		<table align="center" border="1" width="">
		<form method="post" action="cadastro_ok.php">
		<tr>
			<td>Codigo Produto:</td><td><input type="text" name="produto_codigo"></td>
		</tr>
		<tr>
			<td>Nome Produto:</td><td><input type="text" name="produto_descricao"></td>
		</tr>
		<tr>
			<td>Unidade:</td><td><input type="text" name="produto_unidade"></td>
		</tr>
		<tr>
			<td>Saldo Estoque</td><td><input type="text" name="produto_saldoatual"></td>
		</tr>
		<tr>
			<td><input type="reset" value="Apagar"></td>
			<td><input type="submit" Value="Cadastrar"></td>
		</tr>
		</form>
		</table>	
	<hr>
		<a href="index.php">Inicio</a>
	<center>
</body>
</html>