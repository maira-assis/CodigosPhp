<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>  </title>
</head>
<body>
<h1>Cadastro de produto </h1>
<?php
$flag= 0;
//chamar o arquivo de conexao
require_once('conexao.php');
if (isset ($_POST['submit'])){
$descricao=$_POST['descricao'];
$quantidade=intval($_POST['quantidade']);
$preco=doubleval($_POST['preco']);
//validar campos 
/*
if (empty($descricao) || empty ($quantidade) || empty ($preco))
	echo "preencha todos os campos";
else {
	//montar query
	$query="insert into produto values (DEFAULT, '$descricao','$quantidade', '$preco')";
	
	//executar a query
	$data=mysqli_query($dbc,$query);
	//retornar dados inseridos para o ursuario 
	if($data)
		echo "Dados inseridos com sucesso";
	else 
		echo "Erro ao inserir dados!";
	
}

*/
/*
echo gettype($descrisao);
echo gettype($quantidade);
echo gettype($preco);
*/
if (empty($descricao) || empty ($quantidade) || empty ($preco))
	echo"Preencha todos os campos";
	 else{
		//montar a query
		$query="Insert into produto values (DEFAULT,'$descricao','$quantidade','$preco')";
		
		//executar a query
		$data=mysqli_query($dbc,$query);
		//retornar dados inseridos para ursuario
		if($data)
			echo "Dados inseridos com sucesso!";
		else
			echo"Erro ao inserir dados!";
		
		
		
	}
	
}else 	
if(isset($_POST['pesq'])){
	
	$flag=1;
	
}
	
?>
<form method="post" action="<?php echo $_SERVER ['PHP_SELF']; ?>">
<fieldset> <legend> Produto </legend>
<label>Descricao </label>  <input type="text" size="10%" name="descricao" id="descricao"> <br> 
<label>Quantidade </label> <input type="number" size="20%" name="quantidade" id="quantidade" > <br>
<label>Preço</label> <input type="text" size="20%" name="preco" id="preco">
<br>
<br>
<input type="submit" name="submit" value="cadastrar"> <input type="reset" name="reset" value="apagar">
</fieldset>
</form>
<br>
<form method="post" action="<?php echo $_SERVER ['PHP_SELF']; ?>">
<fieldset>  <legend> </legend>
<label> pesquisar: </label> <input type="text" name="pesquisa" id="pesquisa"> <br>
<input type="submit" name="pesq" value="pesquisa">
</fieldset>
</form>
<?php
if($flag){
$pesquisa=$_POST['pesquisa'];
echo $pesquisa;
	$query="select * from produto where descricao like '%".$pesquisa."%'";
	$data=mysqli_query($dbc, $query);
	echo "<table>";
	echo"<tr><th>ID</th> <th> Descricao</th> <th> quantidade </th> <th> preço </th> </tr>";
	foreach($data as $d)
	echo "<tr> <td>".$d['id']."</td><td>".$d['descricao']."</td> <td>".$d['quantidade']."</td> <td>".$d['preco']."</td> </td>
	<a href='alterar.php?id=".$d['id']."'> alterar</a> </td> </tr>";
	echo "</table>";
}
?>
</body>
</html>
