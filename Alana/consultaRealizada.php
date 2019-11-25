<?php
 $pesquisa=$_POST['pesquisa'];
 $selecione=$_POST['esc'];
 var_dump($_POST);

 $con=mysqli_connect('localhost','root','','concessionaria');
 $query="Select * from tabpedido where ".$selecione." like '%".$pesquisa."%'";


 $result=mysqli_query($con,$query);
 echo "<table border='1'>";
 
 echo"<tr> <th colspan='8'> Dados Informados!</th></tr>";
 
 echo "<tr><th>id</th><th>Nome </th> <th> Endereço </th>  <th> Número </th>  <th> Cidade </th> <th> Bairro </th> <th>Sexo </th> <th> escolha</th> </tr>";
 
 foreach ($result as $valor)
 echo "<tr> <td>".$valor ['id']." </td>  <td> ".$valor['nome']." </td>  <td> ".$valor['endereco']." </td> <td> ".$valor['numero']." </td> <td> ".$valor['cidade']." </td> <td> ".$valor['bairro']." </td> <td>".$valor['sexo']." </td> <td> ".$valor['escolha']." </td>
 </tr>";
 echo "</table>";
 mysqli_close($con);


?>