<!DOCTYPE html>
<html>
<body>
<head></head>
<meta charset="UTF-8">
<body>
<?php
$nome_pessoa=$_POST['nome_pessoa'];
$telefone=floatval($_POST['telefone']);
$email=$_POST['email'];
$mensagem=$_POST['mensagem'];


$con=mysql_connect('localhost','root','','mercearia2') or die("Erro ao conectar o banco!");

$query="Insert into pessoas values(DEFAULT),'$nome_pessoa','$telefone','$email','$mensagem')";
$result=mysql_query($con, $query)or die("Erro ao inserir dados!");
if($result)
echo "<h2>Dados inseridos com sucesso!</h2>";
else
echo "<h2>Erro ao inserir dados!</h2>";
mysql_close($con);
?>
</body>
</html>