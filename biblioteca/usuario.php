
<!DOCTYPE HTML>
<HTML>
<head>
<META CHARSET="UTF-8">
<title>Formulario de usuários</title>
</head>
<?php
require_once('conexao.php');

if(isset($_POST['submit'])){
	

$matricula_usuario=mysqli_real_escape_String($dbc, TRIM($_POST['id_usuario']));
$nome_usuario=mysqli_real_escape_String($dbc, TRIM($_POST['nome_usuario']));
$sexo=mysqli_real_escape_String($dbc, TRIM($_POST['sexo']));
$dt_nasc_usuario=mysqli_real_escape_String($dbc, TRIM($_POST['dt_nasc_usuario']));
$endereco=mysqli_real_escape_String($dbc, TRIM($_POST['endereco']));
$numero=mysqli_real_escape_String($dbc, TRIM($_POST['numero']));
$cidade=mysqli_real_escape_String($dbc, TRIM($_POST['cidade']));
$bairro=mysqli_real_escape_String($dbc, TRIM($_POST['bairro']));
$telefone_usuario=mysqli_real_escape_String($dbc, TRIM($_POST['telefone_usuario']));

if(empty($matricula_usuario)|| empty($nome_usuario)||  empty($nome_usuario)||  empty($dt_nasc_usuario)||  empty($endereco)
	&& empty($numero)|| empty($cidade)||  empty($bairro)||  empty($telefone_usuario) ){
		echo"<h1> Preencha todos os campos!</h1>" ;
	} else{



$query="insert into usuario values(NULL,'$matricula_usuario','$nome_usuario','$sexo','$dt_nasc_usuario','$endereco','$numero','$cidade','$bairro','$telefone_usuario')";
 
 $data=mysqli_query($dbc,$query) or die("erro ao conectar o banco");
 
IF($data)
	echo"<h1>cadastro realizado com sucesso!</h1>";
else
	echo $data;

mysqli_close($dbc);

}
}
?>



<body>

<h3>Cadastro de Usuários</h3>
<form method="post" action="<?PHP ECHO $_SERVER['PHP_SELF'];?> ">

	<label>Matricula do usuário:</label><input type="text" size="3" name="id_usuario" id="id_usuario" placeholder="Escreva a matricula do usuário"><br></br>
	<label>Nome do usuário:</label><input type="text" size="128" name="nome_usuario" id="nome_usuario" placeholder="Escreva o nome do usuário"><br></br>
	<label>Sexo:</labeL>
			<input type="radio" name="sexo" value="M" checked="checked" ><label>Masculino</label>
			<input type="radio" name="sexo"value="F"><label>Feminino</label><br></br>
	<label>data de nascimento do usuário:</label><input type="date" size="128" name="dt_nasc_usuario" id="dt_nasc_usuario"placeholder="Escreva a data de nascimento do usuário"><br></br>
	
	<label>Endereço:</label><input type="text" name="endereco" id="endereco" placeholder="Informe o seu endereço">
		<label>Número:</label><input type="text" size="20"  name="numero" id="número" placeholder="Informe o seu número">
		<label>Cidade:</label><input type="text" name="cidade" id="cidade" placeholder="Informe a cidade">
		<label>Bairro:</label><input type="text"name="bairro" id="bairro" placeholder="Informe o seu bairro"><br></br>
	
	<label>Telefone:</label><input type="text" name="telefone_usuario" id="telefone_usuario" placeholder="Informe o seu telefone">
	
	<input type="submit" name= "submit" value="enviar">


		<input type="reset" value="apagar">
		</form>
		<hr/>

</body>
</html>