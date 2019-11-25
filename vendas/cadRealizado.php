<!DOCTYPE HTML>
<html lang="Pt-br">
<head>
<meta charset="UTF-8">
<title> Cadrasto</title>
</head>
<body>
<h1> Cadastro Realizado com sucesso! </h1>
<?php
$id=$_POST['id'];

$nome=$_POST['nome'];

















































$quantidade=$_POST['quantidade'];
echo="<p> id:".$id."</p>";


$dbc=mysqli_connect('localhost','root','', 'Vendas') or die ("Erro ao conectar ao banco");
$query="INSERT into Vendas
values (DEFAULT, '$nome', 'quantidade')";
$data=mysqli_query($dbc,$query)or die ("Erro ao inserir valores");
mysqli_close($dbc);

?>






</body>
</html>