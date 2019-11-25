<!DOCTYPE HTML>
<html lang="Pt-br">
<head>
<meta charset="UTF-8">
<title> </title>

</head>
<body>
<h1> Cadastro Realizado com sucesso! </h1>
<?php
$nome=$_POST['nome']
echo="<p> nome:".$nome."</p>";

$dbc=mysqli_connect('localhost','root','', 'aluno_teste') or die ("Erro ao conectar ao banco");

$query="INSERT into aluno 
values (DEFAULT, '$nome')";
$data=mysqli_query($dbc,$query)or die ("Erro ao inserir valores");
mysqli_close($dbc);


</body>
</html>
