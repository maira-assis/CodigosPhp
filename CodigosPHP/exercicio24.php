<html>
<head>
<meta charset="utf-8">
</head>


<body>
<center>
<p>Tipo de sinalização, sendo 1 para Vermelho, 2 para amarelo e 3 para Verde</p>
</center>
<?php


$sinal = 2;

echo "<center>";
switch ($sinal)
{
	case "1": echo "Escolha de sinal foi: ".$sinal;
	echo "<br>";echo "<br>";
	echo "Sinal: Vermelho";
	echo "<br>";echo "<br>";
	echo "Instrução: Parar no sinal vermelho";
	break;
	
	case "2": echo "Escolha de sinal foi: ".$sinal;
	echo "<br>";echo "<br>";
	echo "Sinal: Amarelo";
	echo "<br>";echo "<br>";
	echo "Instrução: Diminuir velocidade";
	break;
	
	case "3": echo "Escolha de sinal foi: ".$sinal;
	echo "<br>";echo "<br>";
	echo "Sinal: Verde";
	echo "<br>";echo "<br>";
	echo "Instrução: Motorista pode avançar";
	break;
	
	default: echo "<h1><center>OPÇÃO INVALÍDA</h1></center>";
	break;
}
echo "</center>";
?>
</body>
</html>