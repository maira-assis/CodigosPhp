<head>
<META CHARSET="UTF-8">
<title>Formulario de usuários</title>
</head>

<?php
require_once('conexao.php');
if(isset($_POST['submit'])){
	
	$nome=mysqli_real_escape_String($dbc,TRIM($_POST['nome']));
	$dt_emprestimo=mysqli_real_escape_String($dbc,TRIM($_POST['data_emprestimo']));
	$dt_devolucao=mysqli_real_escape_String($dbc,TRIM($_POST['data_devolve']));
	$registro_detalhado=mysqli_real_escape_String($dbc,TRIM($_POST['registro_emprestimo']));
	
	
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

<h3>Cadastro de Emprestimo</h3>
<form method="post" action="<?PHP ECHO $_SERVER['PHP_SELF'];?> ">
	<label>Matricula do usuário:</label><select nome="">
<option value=""></option>

</select>
	<label>Datra de Emprestimo</label><input type= "date" name="data_emprestimo" id="data_emprestimo"><br></br>
	<label>Datra de Devolução</label><input type= "date" name="data_devolve" id="data_devolve"><br></br>
	<label>Registro detalhado:</label><input type="text" size="100" name="registro_emprestimo" id="registro_emprestimo" placeholder="Escreva a descrição do emprestimo"><br></br>
	
	
	<input type="submit" name= "submit" value="enviar">
		<input type="reset" value="apagar">
		
</body>
</html>