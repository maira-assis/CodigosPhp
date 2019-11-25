<! DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href ="css2.css"/>
<meta charset="UTF-8">
</head>
<body>
<div class =h2>
<?php


$ano = isset ($_GET["b"])?$_GET["b"]:1900;
$idade= date("y") - $ano;
if($idade>=18){
	
	$vota=true;
	$dirige=true;
	


	echo "Ano de nascimento: $ano <br>";
	echo "Idade: $idade <br>";
		echo " Voto obrigatório <br>";
		echo "Habilitação liberada";
}
else{
	$vota=false;
	$dirige=false;
	
	echo "Ano de nascimento: $ano <br>";
	echo "Idade: $idade <br>";
		echo " Voto não obrigatório <br>";
		echo "Habilitação negada";
}

?>
</div>
</html>