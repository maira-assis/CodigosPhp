<head>
<META CHARSET="UTF-8">
<title>Formulario de livro</title>
</head>

<?php
require_once('conexao.php');

	if(isset($_POST['submit'])){
		
	$nome=mysqli_real_escape_String($dbc,TRIM($_POST['nome']));
	$data_aquisicao=mysqli_real_escape_String($dbc,TRIM($_POST['data_aquisicao']));
	$edicao=mysqli_real_escape_String($dbc,TRIM($_POST['edicao']));
	$titulo=mysqli_real_escape_String($dbc,TRIM($_POST['titulo_obra']));
	$genero=mysqli_real_escape_String($dbc,TRIM($_POST['genero_obra']));
	
	
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

<h3>Cadastro dos Livros</h3>
<form method="post" action="<?PHP ECHO $_SERVER['PHP_SELF'];?> ">
	<label>Data de Aquisição</label><input type= "date" name="data_aquisicao" id="data_aquisicao"><br></br>
	<label>Edição</label><input type= "varchar" name="edicao" id="edicao"><br></br>
	<label>Titulo da Obra</label><input type= "varchar" size="100" name="titulo_obra" id="titulo_obra"><br></br>
	<label>Nome do autor(a)</label><input type= "varchar" size="100" name="nome_autor" id="nome_autor"><br></br>
	<label>Genero da obra </label><input type= "varchar" size="100" name="genero_obra" id="genero_obra"><br></br>
	
	<input type="submit" name= "submit" value="enviar">
		<input type="reset" value="apagar">
		
		
</body>
</html>