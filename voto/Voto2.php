<! DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href ="css2.css"/>
<meta charset="UTF-8">
</head>
<body>
<div class =h2>
<?php

$idade= b-y;
$ano =$_GET["b"];
date(y);
if($idade>=18){
	$vota=true;
	$dirige=true;
	echo $idade;
	echo " Voto obrigatório <br>";

	echo "$ano";
}
else{
	$vota=false;
	$dirige=false;
	echo $idade;
	echo " Não obrigatório";
	echo "$ano" ;
}
?>
</div>
</html>