<head>
<META CHARSET="UTF-8">
<title>Formulario de livro</title>
</head>

<?php
require_once('conexao.php');

action="<?PHP echo $_SERVER['PHP_SELF'];?>"
if (isset($_POST['submit'])){
	
	
}
	
	$nome=mysqli_real_escape_String($dbc,TRIM($_POST['nome']));
	$data_aquisicao=mysqli_real_escape_String($dbc,TRIM($_POST['data_aquisicao']));
	$edicao=mysqli_real_escape_String($dbc,TRIM($_POST['edicao']));
	$titulo=mysqli_real_escape_String($dbc,TRIM($_POST['titulo_obra']));
	$genero=mysqli_real_escape_String($dbc,TRIM($_POST['generoa_obra']));
	

?>



<body>

<h3>Cadastro dos Livros</h3>
<form method="post" action=" ">
	<label>Data de Aquisição</label><input type= "date" name="data_aquisicao" id="data_aquisicao"><br></br>
	<label>Edição</label><input type= "varchar" name="edicao" id="edicao"><br></br>
	<label>Titulo da Obra</label><input type= "varchar" size="100" name="titulo_obra" id="titulo_obra"><br></br>
	<label>Nome do autor(a)</label><input type= "varchar" size="100" name="nome_autor" id="nome_autor"><br></br>
	<label>Genero da obra </label><input type= "varchar" size="100" name="genero_obra" id="genero_obra"><br></br>
	
	<input type="submit" value="enviar">
		<input type="reset" value="apagar">
		
		
</body>
</html>