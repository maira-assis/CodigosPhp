<html>
<head>
<meta charset="utf-8">
<title> Exercício 10</title>
</head>
<body>
<?php
$a=4;
$b=2;
$resultado;
switch($a*$b)
{
	case 8:
	$resultado=$a*$b;
	echo "A soma das variáveis é igual a: ".$resultado;
	break;
	
	case 2 :
	$resultado=$a-$b;
	echo "A diferença das variáveis é igual a: ".$resultado;
	break;
	
	case 6:
	$resultado=$a+$b;
	echo "O produto das variáveis é igual a: ".$resultado;
	break;
	
	case 2:
	$resultado=$a/$b;
	echo "O quociente das variáveis é igual a: ".$resultado;
	break;
	
	
	
}
?>
</body>
</html>