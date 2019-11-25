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
if(empty($nome_editora)){
	echo"<h1> Preencha todos os campos !</h1>";
	} else{





$query="insert into editora values(NULL,'$nome_editora')";
 
 $data=mysqli_query($dbc,$query) or die("erro ao conectar o banco");
IF($data)
	echo"<h1>cadastro realizado com sucesso!</h1>";

else
	echo $data;
mysqli_close($dbc);
echo "<br/>";
echo "<a href=editora.php>Clique aqui para voltar para pagina editora </a>";
}
}

else if(isset($_POST['botaoPesquisar'])){
	
$pesquisa=mysqli_real_escape_String($dbc, TRIM($_POST['pesquisa']));

$query="select * from editora where nome_editora like '%".$pesquisa."%'";	


$result=mysqli_query($dbc,$query);

  
echo "<table border='1'>";
echo "<tr><th colspan='8'>Dados Informados!</th></tr>";

foreach($result as $data)
echo "<tr><td>".$data['id_editora']."</td><td>".$data['nome_editora']."</td></tr>";
echo "</table>";

mysqli_close($dbc);
echo "<br/>";
echo "<a href=editora.php>Clique aqui para voltar para pagina editora </a>";
}
else{
?>
<body>

<h3>Cadastro de Editoras</h3>
<form method="post" action="<?PHP ECHO $_SERVER['PHP_SELF'];?> ">
	<label>Nome da editora:</label><input type="text" size="128" name="nome" id="nome_editora" placeholder="Escreva com o nome da editora"><br></br>
	
	
	
	<input type="submit" name="submit" value="enviar">
		<input type="reset" value="apagar">
</form>		

	<form method="post" action="<?PHP ECHO $_SERVER['PHP_SELF'];?> ">	
	<hr/>
	
<center>	<h1>Local na pagina destinado para realizar pesquisas</h1></center>

<label>Digite o nome da editora para pesquisar </label>
<input type="text" size="40" name="pesquisa" id="pesquisa"  placeholder="Digite o nome"><br></br>

<input type="submit" name="botaoPesquisar" value="Pesquisar">

</form>
<?php
}
?>
</body>
</html>