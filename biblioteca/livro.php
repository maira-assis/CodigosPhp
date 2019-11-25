<head>
<META CHARSET="UTF-8">
<title>Formulario de livro</title>
</head>

<?php
require_once('conexao.php');

	if(isset($_POST['submit'])){
		

	$data_aquisicao=mysqli_real_escape_String($dbc,TRIM($_POST['data_aquisicao']));	 
	$nome_editora=mysqli_real_escape_String($dbc,TRIM($_POST['nome_editora']));	
	$titulo_obra=mysqli_real_escape_String($dbc,TRIM($_POST['titulo_obra']));	
	$nome_autor=mysqli_real_escape_String($dbc,TRIM($_POST['nome_autor']));	
	$genero_livro=mysqli_real_escape_String($dbc,TRIM($_POST['genero_livro']));	
	
$query="insert into livro values('NULL','NULL','NULL','$data_aquisicao','$nome_editora','$titulo_obra','$nome_autor','$genero_livro')";
 
$data=mysqli_query($dbc,$query) or die("erro ao conectar o banco");
IF($data)
	echo"<h1>cadastro realizado com sucesso!</h1>";

else
	echo $data;

}
?>



<body>

<h3>Cadastro dos Livros</h3>
<form method="post" action="<?PHP ECHO $_SERVER['PHP_SELF'];?> ">
	<label>Data de Aquisição</label><input type= "date" name="data_aquisicao" id="data_aquisicao"><br></br>
	<label>Editora</label> <select name="nome_editora" id="nome_editora"><br></br>
	<?php
	$query = "select * from editora";
	$data = mysqli_query($dbc, $query);
	foreach($data as $d)
	echo "<option value='".$d['nome_editora']."'>".$d['nome_editora']."</option>";
	
	?>
	</select></br></br>
	
	<label>Titulo da Obra</label><input type= "varchar" size="100" name="titulo_obra" id="titulo_obra"><br></br>
	
	<label>Nome do autor(a)</label><select name="nome_autor" id="nome_autor"><br></br>
	<?php
	$query = "select * from autor";
	$con = mysqli_query($dbc, $query);
	foreach($con as $a)
	echo "<option value='".$a['nome_autor']."'>".$a['nome_autor']."</option>";
	
	?>
	</select>
	<br></br>
	
	<label>Genero da obra </label ><select name="genero_livro" id="genero_livro"><br></br>
	<?php
	$query = "select * from genero";
	$data = mysqli_query($dbc, $query);
	foreach($data as $d)
	echo "<option value='".$d['Descricao_genero']."'>".$d['Descricao_genero']."</option>";
	mysqli_close($dbc);	
	?>
	</select>
	<input type="submit" name= "submit" value="enviar">
		<input type="reset" value="apagar">
		</form>
		
		

	
	
	
		
</body>
</html>