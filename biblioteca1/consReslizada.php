<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pesquisar</title>
</head>
<body>
<?php

$pesquisa=$_POST ['pesquisa'];
$selecione=$_POST['coluna'];
//abrir a conexão

$con=mysqli_connect('localhost','root','','biblioteca');
$query="select* from livro where ".$selecione." like '%".$pesquisa."%'";
echo $query;
$result=mysqli_query($con,$query);
 echo "<table border='1'>";
 echo "<tr><th colspan='8'>Dados Informados!</th></tr>";
 echo'<tr><th>ID</th><th>nome</th><th>escolha</th></tr>';
 foreach($result as $data)
 echo "<tr><td>".$data['id_livro']."</td><td>".$data['nome_autor']."</td>]."</td> <td>".$data['escolha']."</td></tr>";
 echo'</table>';

mysqli_close($con);
 echo "<a href='pesquisar.php'><button>Voltar</button></a>";

?>
</body>
</html>