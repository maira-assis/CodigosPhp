<!DOCTYPE html>

<html lang="pt-br">

<meta charset="UTF-8">

<head>

<title>Loja</title>

</head>

<body>

<?php

//abri conexao

	$flag=0;
if
	(isset($_POST['submit']))
			
	{
	$con=mysql_connect('localhost','root','','loja')or die("Erro ao conectar ao banco!");
	$descricao=$_POST['descricao'];
	$quantidade=$_POST['quantidade'];
	$preco=$_POST['preco'];
	$query="insert into produto values(DEFAULT,'$descricao','$quantidade','$preco')";
	$data=mysqli_query($con,$query)or die("Erro ao conectar a tabela");
	echo"<h2>Cadastro realizado com sucesso!</h2>";
	mysql_close($con);
	}
	
else
	
	if(isset($_POST['pesquisar']))
	{
		$flag=1;
	}
?>
<h1>Cadastro de Produto</h1>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

	<label>Descrição do Produto:</label>
	<input type="text" name="descricao" id="descricao" placeholder="Informe o nome do produto" size="50">
	
	<br><br>
	
	<label>Quantidade:</label>
	<input type="number" name="quantidade" id="quantidade" placeholder="Informe a quantidade" size="11">
	
	<br><br>
	
	<label>Preço:</label>
	<input type="text" name="preco" id="preco" placeholder="Informe o preco" size="11">
	
	<br><br>
	
	<input type="submit" value="Gravar" name="submit">
	<input type="reset" value="Apagar">

</form>

<h1>Pesquisar por Produto</h1>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	
	<label>Nome: </label>
	<input type="text" name="prod" id="prod" placeholder="Informe o nome do produto" size="50">
	
	<br><br>
	
	<input type="submit" value="Pesquisar" name="pesquisar">
	<input type="reset" value="Apagar">
	
</form>
<?php

echo "<br><br>";

if	($flag)
	
{
		require_once('conexao.php');
	$con=mysqli_connect('localhost','root','','loja') or die("Erro ao conectar ao banco!");
	
	$prod=$_POST['prod'];
	
	$query="Select * from produto where descricao like '%".$prod."%'";
	
	$data=mysqli_query($con, $query);
	
	echo "<table border='1'>";
	
	echo "<tr><th>Id</th><th>Descrição</th><th>Quantidade</th><th>Preço</th></tr>";
	
	foreach($data as $d)
	
	echo "<tr><td>".$d['id']."</td><td>".$d['descricao']."</td><td>".$d['quantidade']."</td><td>".$d['preco']."</td></tr>";
	
	echo "</table>";
	
	mysqli_close($con);
	
	//var_dump($d);
}

?>

</body>

</html>
