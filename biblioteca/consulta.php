<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pesquisar</title>
</head>
<body>

<?php


$pesquisa=$_POST ['pesquisaU'];
$selecione=$_POST['coluna'];


$con=mysqli_connect("localhost", "root","","biblioteca");

$query ="select * from usuario where ".$selecione." like '%".$pesquisa."%'";
	
$result =mysqli_query($con,$query);
 echo "<table border='1'>";
 echo "<tr><th colspan='8'>Dados Informados!</th></tr>";
 echo'<tr><th>ID</th><th>matricula</th><th>nome</th><th>Sexo</th><th>data nascimento</th><th>rua</th><th>numero</th><th>cidade</th><th>bairro</th><th>telefone</th></tr>';
 
foreach($result as $data)

 echo "<tr><td>".$data['id_usuario']."</td><td>".$data['matricula_usuario']."</td><td>".$data['nome_usuario']."</td><td>".$data['sexo']."</td><td>".$data['dt_nasc_usuario']."</td><td>".$data['endereco_usuario']."</td><td>".$data['numero']."</td><td>".$data['cidade']."</td><td>".$data['bairro']."</td><td>".$data['telefone_usuario']."</td><td><a href='alterar.php?id_usuario=".$data['id_usuario']."'<button>alterar</button></a>
 </td></tr>";
 
 echo'</table>';
 
mysqli_close($con);
 echo "<a href='pesquisar.php'><button>Voltar</button></a>";




?>
</body>
</html>