
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro Realizado</title>
</head>
<body>
<h1>CADASTRO REALIZADO COM SUCESSO!!!!!!!!!! S2 S2 S2 S2 S2</H1>

<a href="voltar.php">  <button> Voltar</button> </a>
<a href="pesquisa.php"> <button>Pesquisa  </button> </a>

<?php
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$numero=$_POST['numero'];
$cidade=$_POST['cidade'];
$bairro=$_POST['bairro'];
$sexo=$_POST['sexo'];
$selecione=$_POST['carro'];
/*
var_dump($_POST);
*/
/*
echo "<table border='1px solid black'>";
echo"<tr><th colspan='2'><h2> Dados Informados </h2></th></tr>";
echo"<tr><td>Nome</td><td>".$nome."</td></tr>";
echo"<tr><td>Endereço</td><td>".$endereco."</td></tr>";
echo"<tr><td>Numero</td><td>".$numero."</td></tr>";
echo"<tr><td>Cidade</td><td>".$cidade."</td></tr>";
echo"<tr><td>Bairro</td><td>".$bairro."</td></tr>";
echo"<tr><td>Sexo</td><td>".$sexo."</td></tr>";
echo"<tr><td>Carro selecionado</td><td>".$selecione."</td></tr>";




*/
$con=mysqli_connect('localhost','root', '', 'concessionaria')or die("Conexão não realizada");
If ($con)
	echo "Conexão reqalizada";
 else
	 echo"Conexão nao realizada ";
 
 
 $query="insert into tabpedido values(NULL,'$nome','$endereco','$numero','$cidade','$bairro','$sexo','$selecione')";
 
 $data=mysqli_query($con,$query);
 
 
 if($data)
	 echo"Dados inseridos com sucesso";
 else 
	 echo" Erro so inserir dados";
 $selecao="select *from tabpedido";
 $result= mysqli_query($con, $selecao);
 
                       
 
 mysqli_close($con);
 
 /*---------------------------------------------------------------------------------
 <h3>1 A 10</h3>
 $cont=1;
 while($cont<=10){
	 echo $cont.'<br>';
	
$cont++;
 }
 
 
  <h3> "Do While  1a10"</h3>
 $cont=1;
 Do{
	 echo $cont.'<br>';
	 $cont++;
 }while($cont<=10);
 
  <h3>"for 1a10"</h3>
 for($cont=1;$cont<=10;$cont++)
	 echo $cont.'<br>';
 
---------------------------------------------------------------------------------
	 $cont=0;
	 while($cont<=10 ){
		 if($cont %2==0)
		 echo $cont.'<br>';
		 $cont++;
		 }
	
	 
 
			 $cont=0;
			 Do{
				 if ($cont %2==0)
				 echo $cont.'<br>';
				 $cont++;
				 
			 }while($cont<=10);
			 
 
	 for($cont=1;$cont<=10;$cont++)
	  if ($cont%2==0){
	  echo $cont.'<br>';
	  };*/
	  


?>

</body>
</html>