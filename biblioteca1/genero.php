<head>
<META CHARSET="UTF-8">
<title>Formulario de usuários</title>
</head>
<?php
require_once('conexao.php');

if(isset($_POST['submit'])){

	$nome=mysqli_real_escape_string($dbc,TRIM($_POST['nome']));
	$tipo_genero=mysqli_real_escape_string($dbc,TRIM($_POST['tipo_genero']));
	$descricao=mysqli_real_escape_string($dbc,TRIM($_POST['descricao']));
	

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

<h3>Cadastro de Genero</h3>
<form method="post" action="<?PHP ECHO $_SERVER['PHP_SELF'];?> ">

<label>Tipo de genero:</label>
		<select name="tipo_genero">
		<option>Selecione</option>
		<option value="romance">Romance</option>
		<option value="acao">Ação</option>
		<option value="ficcao">Ficção</option>
		<option value="literario">Clássicos Literários</option>
		<option value="autobiografia">Autobiografia</option>
		<option value="fantasia">Fantasia</option>
		<option value="drama">Dramáticos</option>
		</select>
		<br></br>
		
		<label>Descrição:</label><input type="text" size="20" name="descricao" id="descricao"><br></br>
		
		
	<input type="submit" name= "submit" value="enviar">
		<input type="reset" value="apagar">
		
		<form method="post" action="<?PHP ECHO $_SERVER['PHP_SELF'];?> ">
		<h3> Cadastro de Autor</h3>
		<label> Nome :</label><input type="text" name="nome" id="nome" placeholder="">
<input type= "submit" value="enviar" name="enviar" id="enviar">



<br>
<br>
<form method="POST" action="Pesquisar.php">

<select name="esc">
		<option value="Id">id</option>
		<option value="nome">nome</option>
		</select>
 Pesquisar: <input type="text" name="pesquisa" >                        
 <input type="submit" value="enviar"> 
 </form>
		
		
		
		
		
</body>
</html>